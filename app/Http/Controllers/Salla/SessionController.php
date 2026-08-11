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
use Illuminate\Support\Facades\Http;

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
        Log::info('[Salla OAuth] Saving session', [
            'merchant_id' => $merchantId,
            'access_token_length' => strlen($token->getToken()),
            'refresh_token_length' => strlen($token->getRefreshToken() ?? ''),
            'expires' => $token->getExpires(),
        ]);

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
        Log::info('[Salla Embedded] START', [
            'provider' => $provider,
            'query' => $request->all(),
        ]);

        try {
            $request->validate([
                'token' => ['required', 'string'],
            ]);

            Log::info('[Salla Embedded] Token validation passed');

            $shippingProvider = User::findOrFail($provider);

            Log::info('[Salla Embedded] Provider found', [
                'provider_id' => $shippingProvider->id,
                'active' => $shippingProvider->active,
            ]);

            if (!$shippingProvider->active) {
                abort(403, 'Provider is inactive.');
            }
            $appId = $request->input('app_id');

            $token = $request->input('token');

            Log::info('[Salla Embedded] Calling introspect');

            $response = Http::withHeaders([
                'S-Source' => $appId,
                'Accept'   => 'application/json',
            ])->post(
                'https://api.salla.dev/exchange-authority/v1/introspect',
                [
                    'env'     => 'prod',
                    'token'   => $token,
                    'iss'     => 'merchant-dashboard',
                    'subject' => 'embedded-page',
                ]
            );

            Log::info('[Salla Embedded] Introspect response', [
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);

            $data = $response->json();

            Log::info('[Salla Embedded] Parsed response', [
                'data' => $data,
            ]);

            if (!$response->successful()) {
                Log::error('[Salla Embedded] Introspect HTTP failed');
                abort(401, 'Unable to verify embedded token.');
            }

            if (!($data['success'] ?? false)) {
                Log::error('[Salla Embedded] success=false', [
                    'response' => $data,
                ]);

                abort(401, 'Embedded token verification failed.');
            }

            $merchantId = data_get($data, 'data.merchant_id');

            Log::info('[Salla Embedded] Merchant extracted', [
                'merchant_id' => $merchantId,
            ]);

            if (!$merchantId) {
                abort(401, 'Merchant ID not found.');
            }

            $session = Session::where('merchant', $merchantId)
                ->where('provider_id', $provider)
                ->latest('id')
                ->first();

            Log::info('[Salla Embedded] Session lookup', [
                'found' => (bool) $session,
            ]);

            if (!$session) {
                abort(403, 'Session not found.');
            }

            if (
                $session->expires_at &&
                $session->expires_at->isPast()
            ) {
                Log::warning('[Salla Embedded] Session expired', [
                    'session_id' => $session->id,
                ]);

                abort(403, 'OAuth session expired.');
            }

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

            Log::info('[Salla Embedded] SUCCESS', [
                'session_id' => $session->id,
                'merchant_id' => $merchantId,
            ]);

            return view('layouts.salla', [
                'merchant_id' => $merchantId,
                'provider_id' => $provider,
            ]);
        } catch (\Throwable $e) {

            Log::error('[Salla Embedded] EXCEPTION', [
                'class'   => get_class($e),
                'message' => $e->getMessage(),
                'file'    => $e->getFile(),
                'line'    => $e->getLine(),
                'trace'   => $e->getTraceAsString(),
            ]);

            throw $e;
        }
    }
}
