<?php

namespace App\Http\Middleware;

use Accurate\Shipping\Client\Client;
use App\Models\Session;
use App\Models\Setting;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;

class EnsureSallaSession
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('[EnsureSallaSession] handle() START', [
            'path' => $request->path(),
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'has_cookie' => $request->hasCookie('salla_session'),
            'has_bearer' => !empty($request->bearerToken()),
            'bearer_preview' => $request->bearerToken()
                ? substr($request->bearerToken(), 0, 30) . '...'
                : null,
        ]);

        /*
        |--------------------------------------------------------------------------
        | 1. Try normal Laravel session cookie first
        |--------------------------------------------------------------------------
        */
        $session = $this->getSessionFromIframeToken($request);
        Log::info('[EnsureSallaSession] After cookie attempt', [
            'session_found_from_cookie' => !is_null($session),
            'session_id' => $session?->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | 2. If no cookie, try Salla iframe token
        |--------------------------------------------------------------------------
        */
        if (!$session) {
            $session = $this->getSessionFromIframeToken($request);
            Log::info('[EnsureSallaSession] After iframe token attempt', [
                'session_found_from_token' => !is_null($session),
                'session_id' => $session?->id,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | No valid session
        |--------------------------------------------------------------------------
        */
        if (!$session) {
            Log::warning('[EnsureSallaSession] RETURNING 403 Unauthorized access. - No session found from cookie or token.');
            return response()->json([
                'message' => 'Unauthorized access.'
            ], 403);
        }

        /*
        |--------------------------------------------------------------------------
        | Check expiration
        |--------------------------------------------------------------------------
        */
        if ($session->expires_at && $session->expires_at->isPast()) {
            Log::warning('[EnsureSallaSession] RETURNING 403 Session expired.', [
                'session_id' => $session->id,
                'expires_at' => $session->expires_at->toDateTimeString(),
                'now' => now()->toDateTimeString(),
            ]);
            return response()->json([
                'message' => 'Session expired.'
            ], 403);
        }

        /*
        |--------------------------------------------------------------------------
        | Get shipping provider
        |--------------------------------------------------------------------------
        */
        $provider = User::find($session->provider_id);

        Log::info('[EnsureSallaSession] Provider lookup', [
            'session_id' => $session->id,
            'session_provider_id' => $session->provider_id ?? 'NULL',
            'provider_found' => !is_null($provider),
            'provider_active' => $provider?->active ?? 'N/A',
        ]);

        if (!$provider) {
            Log::warning('[EnsureSallaSession] RETURNING 403 Provider not found. session_provider_id is missing or invalid.', [
                'session_id' => $session->id,
                'session_provider_id' => $session->provider_id ?? 'NULL',
            ]);
            return response()->json([
                'message' => 'Provider not found.'
            ], 403);
        }

        if (!$provider->active) {
            Log::warning('[EnsureSallaSession] RETURNING 403 Provider is inactive.', [
                'session_id' => $session->id,
                'provider_id' => $provider->id,
                'provider_username' => $provider->username,
            ]);
            return response()->json([
                'message' => 'Provider is inactive.'
            ], 403);
        }

        /*
        |--------------------------------------------------------------------------
        | Initialize shipping client
        |--------------------------------------------------------------------------
        */
        $this->initializeShippingClient($session);

        /*
        |--------------------------------------------------------------------------
        | Make session/provider available to controllers
        |--------------------------------------------------------------------------
        */
        $request->attributes->set('sallaSession', $session);
        $request->attributes->set('provider', $provider);

        return $next($request);
    }

    /**
     * Get session from normal Laravel cookie.
     */
    private function getSessionFromCookie(Request $request): ?Session
    {
        $sessionId = $request->cookie('salla_session');

        if (!$sessionId) {
            return null;
        }

        try {
            $sessionId = app('encrypter')->decrypt($sessionId);

            return Session::find($sessionId);
        } catch (\Exception $e) {
            Log::warning('Invalid Salla session cookie', [
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }



    private function getSessionFromIframeToken(Request $request): ?Session
    {
        // Embedded iframe:
        // - First page load => token comes from query string
        // - API requests => token comes from Authorization: Bearer
        $token = $request->query('token') ?? $request->bearerToken();

        if (!$token) {
            Log::warning('[Salla] No embedded token found');

            return null;
        }

        try {
            Log::info('[Salla] Embedded token', [
                'length' => strlen($token),
                'preview' => substr($token, 0, 30) . '...',
                'source' => $request->query('token')
                    ? 'query'
                    : 'bearer',
            ]);

            /*
        |--------------------------------------------------------------------------
        | Salla Exchange Authority / Introspection
        |--------------------------------------------------------------------------
        */

            $sSource = config('services.salla.client_id');

            Log::info('[Salla] Introspection request', [
                's_source' => $sSource,
                'token_length' => strlen($token),
                'token_prefix' => substr($token, 0, 10),
            ]);

            $response = Http::withToken($token)
                ->withHeaders([
                    'S-Source' => $sSource,
                    'Accept'   => 'application/json',
                ])
                ->post(
                    'https://api.salla.dev/exchange-authority/v1/introspect'
                );

            Log::info('[Salla] Token introspection response', [
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);

            /*
        |--------------------------------------------------------------------------
        | Invalid embedded token
        |--------------------------------------------------------------------------
        */

            if (!$response->successful()) {
                Log::warning('[Salla] Token introspection failed', [
                    'status' => $response->status(),
                    'response' => $response->json(),
                ]);

                return null;
            }

            $data = $response->json();

            /*
        |--------------------------------------------------------------------------
        | Extract merchant
        |--------------------------------------------------------------------------
        */

            $merchantId = data_get(
                $data,
                'data.merchant_id'
            );

            if (!$merchantId) {
                Log::warning('[Salla] merchant_id missing from introspection', [
                    'response' => $data,
                ]);

                return null;
            }

            Log::info('[Salla] Merchant extracted', [
                'merchant_id' => $merchantId,
            ]);

            /*
        |--------------------------------------------------------------------------
        | Find OAuth session
        |--------------------------------------------------------------------------
        */

            $session = Session::where('merchant', $merchantId)
                ->latest('id')
                ->first();

            Log::info('[Salla] Session lookup', [
                'merchant_id' => $merchantId,
                'session_id' => $session?->id,
                'provider_id' => $session?->provider_id,
            ]);

            if (!$session) {
                Log::warning('[Salla] No OAuth session found for merchant', [
                    'merchant_id' => $merchantId,
                ]);

                return null;
            }

            return $session;
        } catch (\Throwable $e) {

            Log::error('[Salla] Embedded authentication exception', [
                'class' => get_class($e),
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return null;
        }
    }




    /**
     * Robust fallback to get the Bearer token from Authorization header.
     * Works around Apache/CGI setups that strip the Authorization header.
     */
    private function getBearerTokenRobust(Request $request): ?string
    {
        $header = $request->bearerToken();
        if ($header) {
            return $header;
        }

        $headers = null;
        if (function_exists('apache_request_headers')) {
            $apacheHeaders = apache_request_headers();
            if ($apacheHeaders) {
                $apacheHeaders = array_change_key_case($apacheHeaders, CASE_LOWER);
                $headers = $apacheHeaders['authorization'] ?? null;
            }
        }

        if (!$headers) {
            $headers = $_SERVER['HTTP_AUTHORIZATION']
                ?? $_SERVER['REDIRECT_HTTP_AUTHORIZATION']
                ?? $_SERVER['REDIRECT_REDIRECT_HTTP_AUTHORIZATION']
                ?? $_SERVER['PHP_AUTH_DIGEST']
                ?? null;
        }

        if (!$headers && isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
            $headers = 'Basic ' . base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $_SERVER['PHP_AUTH_PW']);
        }

        if (!$headers) {
            return null;
        }

        if (stripos($headers, 'Bearer ') === 0) {
            return trim(substr($headers, 7));
        }

        return null;
    }

    private function base64UrlDecode(string $data): string
    {
        $data .= str_repeat('=', (4 - strlen($data) % 4) % 4);
        return base64_decode(strtr($data, '-_', '+/'));
    }

    private function initializeShippingClient(Session $session): void
    {
        try {
            $setting = Setting::where('merchant', $session->merchant)
                ->where('provider_id', $session->provider_id)
                ->first();

            if ($setting && $setting->user) {

                Client::init(
                    app()->isProduction()
                        ? "https://" . $setting->user->domain . ':8443/graphql'
                        : "http://" . $setting->user->domain . ':8000/graphql',
                    [
                        'Authorization' => "Bearer " . $setting->token,
                        'content-language' => App::getLocale()
                    ]
                );
            }
        } catch (\Exception $e) {

            Log::error('Failed to initialize shipping client', [
                'error' => $e->getMessage(),
            ]);
        }
    }
}
