<?php

namespace App\Http\Controllers\Salla;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Models\User;
use App\Services\SallaAuthService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class SessionController extends Controller
{
    private $service;

    public function __construct(SallaAuthService $service)
    {
        $this->service = $service;
    }

    /*
    |--------------------------------------------------------------------------
    | OAuth Redirect
    |--------------------------------------------------------------------------
    */

    public function redirect(Request $request, $provider)
    {
        $shippingProvider = User::findOrFail($provider);

        if (!$shippingProvider->active) {
            abort(403);
        }

        return redirect(
            $this->service
                ->forProvider($shippingProvider)
                ->getAuthorizationUrl()
        );
    }

    /*
    |--------------------------------------------------------------------------
    | OAuth Callback
    |--------------------------------------------------------------------------
    */

    public function callback(Request $request, $provider)
    {
        if ($request->filled('error')) {
            return redirect()
                ->route('home', ['provider' => $provider])
                ->withErrors([
                    'oauth' => $request->input(
                        'error_description',
                        'Authorization failed.'
                    ),
                ]);
        }

        if (!$request->filled('code')) {
            abort(400, 'Missing authorization code');
        }

        abort_if(
            $this->service->isEasyMode(),
            401,
            'The Authorization mode is not supported'
        );

        $shippingProvider = User::findOrFail($provider);

        if (!$shippingProvider->active) {
            abort(403, 'Provider is inactive.');
        }

        $this->service->forProvider($shippingProvider);

        Log::info('[Salla OAuth] Callback', [
            'provider_id' => $provider,
        ]);

        $token = $this->service->getAccessToken(
            'authorization_code',
            [
                'code' => $request->input('code'),
            ]
        );

        if (!$token || !$token->getToken()) {
            abort(401, 'Unable to obtain Salla access token.');
        }

        $user = $this->service->getResourceOwner($token);

        $merchantId = $user->getStoreId();

        if (!$merchantId) {
            abort(401, 'Unable to identify Salla merchant.');
        }

        $session = Session::firstOrNew([
            'merchant' => $merchantId,
            'provider_id' => $shippingProvider->id,
        ]);

        $session->forceFill([
            'merchant' => $merchantId,
            'provider_id' => $shippingProvider->id,
            'access_token' => $token->getToken(),
            'refresh_token' => $token->getRefreshToken(),
            'expires_at' => $token->getExpires()
                ? Carbon::createFromTimestamp(
                    $token->getExpires()
                )
                : null,
        ]);

        $session->save();

        Log::info('[Salla OAuth] Session saved', [
            'session_id' => $session->id,
            'merchant_id' => $merchantId,
            'provider_id' => $shippingProvider->id,
        ]);

        Cookie::queue(
            'salla_session',
            encrypt($session->id),
            60 * 24 * 30,
            '/',
            null,
            true,
            true,
            false,
            'none'
        );

        return redirect()->route('home', [
            'provider' => $provider,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Embedded App
    |--------------------------------------------------------------------------
    */

    public function embedded(Request $request, $provider)
    {
        $shippingProvider = User::findOrFail($provider);

        if (!$shippingProvider->active) {
            abort(403);
        }

        return view('layouts.salla', [
            'provider_id' => $provider,
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Embedded Authentication
    |--------------------------------------------------------------------------
    */

    public function embedded(Request $request, $provider)
    {
        $request->validate([
            'token' => ['required', 'string'],
        ]);

        try {
            $token = $request->input('token');

            /*
         * Extract merchant_id from Salla embedded token.
         *
         * Token format:
         * v4.public.BASE64_PAYLOAD_SIGNATURE
         */
            $parts = explode('.', $token);

            if (count($parts) !== 3) {
                abort(401, 'Invalid Salla embedded token.');
            }

            $payload = $parts[2];

            // Remove signature from the payload.
            // The payload contains JSON followed by the signature.
            $decoded = base64_decode(
                strtr($payload, '-_', '+/')
            );

            if (!$decoded) {
                abort(401, 'Unable to decode Salla token.');
            }

            /*
         * Find the JSON payload.
         *
         * The payload starts with:
         * {"data":{"merchant_id":...}}
         *
         * We can decode the JSON portion before the signature.
         */
            $jsonEnd = strpos($decoded, '}');

            if ($jsonEnd === false) {
                abort(401, 'Invalid Salla token payload.');
            }

            /*
         * Since there are nested objects, find the JSON
         * by decoding progressively.
         */
            $data = null;

            for ($i = strlen($decoded); $i > 0; $i--) {
                $possibleJson = substr($decoded, 0, $i);

                $decodedData = json_decode($possibleJson, true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    $data = $decodedData;
                    break;
                }
            }

            $merchantId = data_get($data, 'data.merchant_id');
            $userId = data_get($data, 'data.user_id');

            if (!$merchantId) {
                Log::error('[Salla Embedded] Merchant ID not found', [
                    'provider_id' => $provider,
                    'token_length' => strlen($token),
                ]);

                abort(401, 'Merchant ID not found.');
            }

            Log::info('[Salla Embedded] Token data extracted', [
                'merchant_id' => $merchantId,
                'user_id' => $userId,
                'provider_id' => $provider,
            ]);

            /*
         * Find the OAuth session for this
         * merchant + shipping provider.
         */
            $session = Session::where('merchant', $merchantId)
                ->where('provider_id', $provider)
                ->latest('id')
                ->first();

            if (!$session) {
                Log::warning('[Salla Embedded] Session not found', [
                    'merchant_id' => $merchantId,
                    'provider_id' => $provider,
                ]);

                abort(
                    403,
                    'Salla merchant is not installed for this provider.'
                );
            }

            /*
         * Check OAuth access token.
         */
            if (
                $session->expires_at &&
                $session->expires_at->isPast()
            ) {
                Log::warning('[Salla Embedded] OAuth session expired', [
                    'session_id' => $session->id,
                    'merchant_id' => $merchantId,
                    'provider_id' => $provider,
                ]);

                abort(403, 'OAuth session expired.');
            }

            if (empty($session->access_token)) {
                abort(403, 'Salla access token is missing.');
            }

            /*
         * Create our own application cookie.
         */
            Cookie::queue(
                'salla_session',
                encrypt($session->id),
                60 * 24 * 30,
                '/',
                null,
                true,
                true,
                false,
                'none'
            );

            Log::info('[Salla Embedded] Authentication successful', [
                'session_id' => $session->id,
                'merchant_id' => $merchantId,
                'provider_id' => $provider,
                'access_token_length' => strlen($session->access_token),
            ]);

            /*
         * IMPORTANT:
         * Return the application Home directly.
         *
         * No /iframe route.
         * No second request.
         */
            return view('layouts.salla', [
                'merchant_id' => $merchantId,
                'provider_id' => $provider,
            ]);
        } catch (\Throwable $e) {

            Log::error('[Salla Embedded] Authentication failed', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            abort(500, 'Authentication failed.');
        }
    }
}
