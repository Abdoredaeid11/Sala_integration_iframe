<?php

namespace App\Http\Middleware;

use Accurate\Shipping\Client\Client;
use App\Models\Session;
use App\Models\Setting;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class EnsureSallaSession
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('[EnsureSallaSession] handle() START', [
            'path' => $request->path(),
            'method' => $request->method(),
            'url' => $request->fullUrl(),

            'has_cookie' => $request->hasCookie('salla_session'),

            'has_bearer' => !empty(
                $request->bearerToken()
            ),

            'bearer_preview' => $request->bearerToken()
                ? substr($request->bearerToken(), 0, 30) . '...'
                : null,
        ]);

        /*
        |--------------------------------------------------------------------------
        | 1. Try existing Laravel cookie first
        |--------------------------------------------------------------------------
        */

        $session = $this->getSessionFromCookie($request);

        Log::info('[EnsureSallaSession] After cookie attempt', [
            'session_found_from_cookie' => !is_null($session),
            'session_id' => $session?->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | 2. If no cookie, verify Salla iframe token
        |--------------------------------------------------------------------------
        */

        if (!$session) {
            $session = $this->getSessionFromIframeToken($request);

            Log::info('[EnsureSallaSession] After iframe token attempt', [
                'session_found_from_token' => !is_null($session),
                'session_id' => $session?->id,
            ]);

            /*
            |--------------------------------------------------------------------------
            | Create our own session cookie
            |--------------------------------------------------------------------------
            */

            if ($session) {
                $this->queueSallaCookie($session);
            }
        }

        /*
        |--------------------------------------------------------------------------
        | 3. No valid session
        |--------------------------------------------------------------------------
        */

        if (!$session) {
            Log::warning(
                '[EnsureSallaSession] RETURNING 403 Unauthorized access.',
                [
                    'reason' => 'No session found from cookie or iframe token.',
                ]
            );

            return response()->json([
                'message' => 'Unauthorized access.'
            ], 403);
        }

        /*
        |--------------------------------------------------------------------------
        | 4. Check OAuth session expiration
        |--------------------------------------------------------------------------
        */

        if (
            $session->expires_at &&
            $session->expires_at->isPast()
        ) {
            Log::warning(
                '[EnsureSallaSession] RETURNING 403 Session expired.',
                [
                    'session_id' => $session->id,
                    'expires_at' => $session->expires_at
                        ->toDateTimeString(),
                    'now' => now()->toDateTimeString(),
                ]
            );

            return response()->json([
                'message' => 'Session expired.'
            ], 403);
        }

        /*
        |--------------------------------------------------------------------------
        | 5. Get shipping provider
        |--------------------------------------------------------------------------
        */

        $provider = User::find($session->provider_id);

        Log::info('[EnsureSallaSession] Provider lookup', [
            'session_id' => $session->id,
            'session_provider_id' => $session->provider_id ?? null,
            'provider_found' => !is_null($provider),
            'provider_active' => $provider?->active ?? null,
        ]);

        if (!$provider) {
            Log::warning(
                '[EnsureSallaSession] RETURNING 403 Provider not found.',
                [
                    'session_id' => $session->id,
                    'session_provider_id' => $session->provider_id ?? null,
                ]
            );

            return response()->json([
                'message' => 'Provider not found.'
            ], 403);
        }

        if (!$provider->active) {
            Log::warning(
                '[EnsureSallaSession] RETURNING 403 Provider inactive.',
                [
                    'session_id' => $session->id,
                    'provider_id' => $provider->id,
                ]
            );

            return response()->json([
                'message' => 'Provider is inactive.'
            ], 403);
        }

        /*
        |--------------------------------------------------------------------------
        | 6. Initialize shipping client
        |--------------------------------------------------------------------------
        */

        $this->initializeShippingClient($session);

        /*
        |--------------------------------------------------------------------------
        | 7. Make session/provider available to controllers
        |--------------------------------------------------------------------------
        */

        $request->attributes->set(
            'sallaSession',
            $session
        );

        $request->attributes->set(
            'provider',
            $provider
        );

        return $next($request);
    }

    /**
     * Get session from our own encrypted cookie.
     */
    private function getSessionFromCookie(
        Request $request
    ): ?Session {
        $encryptedSessionId = $request->cookie(
            'salla_session'
        );

        if (!$encryptedSessionId) {
            return null;
        }

        try {
            $sessionId = app('encrypter')->decrypt(
                $encryptedSessionId
            );

            $session = Session::find($sessionId);

            if ($session) {
                Log::info(
                    '[Salla] Session found from cookie',
                    [
                        'session_id' => $session->id,
                        'merchant_id' => $session->merchant,
                    ]
                );
            }

            return $session;

        } catch (\Throwable $e) {
            Log::warning(
                '[Salla] Invalid Salla session cookie',
                [
                    'message' => $e->getMessage(),
                ]
            );

            return null;
        }
    }

    /**
     * Verify Salla embedded iframe token
     * and get our local Session.
     */
    private function getSessionFromIframeToken(
        Request $request
    ): ?Session {
        /*
        |--------------------------------------------------------------------------
        | Salla sends the token:
        |
        | iframe:
        | ?token=v4.public....
        |
        | API:
        | Authorization: Bearer v4.public....
        |--------------------------------------------------------------------------
        */

        $token = $request->query('token');

        $tokenSource = 'query';

        if (!$token) {
            $token = $this->getBearerTokenRobust($request);
            $tokenSource = 'bearer';
        }

        if (!$token) {
            Log::warning(
                '[Salla] No embedded token found'
            );

            return null;
        }

        try {
            Log::info('[Salla] Embedded token detected', [
                'source' => $tokenSource,
                'length' => strlen($token),
                'prefix' => substr($token, 0, 11),
            ]);

            /*
            |--------------------------------------------------------------------------
            | Get App ID dynamically from token.
            |
            | We do NOT use this value as authentication.
            |
            | We only use it as S-Source.
            |
            | Salla will verify the token through introspection.
            |--------------------------------------------------------------------------
            */

            $appId = $this->getAppIdFromToken($token);

            Log::info('[Salla] Extracted App ID', [
                'app_id' => $appId,
            ]);

            if (!$appId) {
                Log::warning(
                    '[Salla] Could not extract App ID from token'
                );

                return null;
            }

            /*
            |--------------------------------------------------------------------------
            | Salla Token Introspection
            |--------------------------------------------------------------------------
            */

            $response = Http::timeout(10)
                ->acceptJson()
                ->withHeaders([
                    'S-Source' => $appId,
                    'Content-Type' => 'application/json',
                ])
                ->post(
                    'https://api.salla.dev/exchange-authority/v1/introspect',
                    [
                        'token' => $token,
                    ]
                );

            Log::info(
                '[Salla] Token introspection response',
                [
                    'status' => $response->status(),
                    'body' => $response->json(),
                ]
            );

            if (!$response->successful()) {
                Log::warning(
                    '[Salla] Token introspection failed',
                    [
                        'status' => $response->status(),
                    ]
                );

                return null;
            }

            $data = $response->json();

            /*
            |--------------------------------------------------------------------------
            | Get merchant_id from Salla
            |--------------------------------------------------------------------------
            */

            $merchantId = data_get(
                $data,
                'data.merchant_id'
            );

            if (!$merchantId) {
                Log::warning(
                    '[Salla] merchant_id missing from introspection'
                );

                return null;
            }

            Log::info('[Salla] Merchant extracted', [
                'merchant_id' => $merchantId,
            ]);

            /*
            |--------------------------------------------------------------------------
            | Find our local OAuth session.
            |
            | app_id is NOT needed here.
            |--------------------------------------------------------------------------
            */

            $session = Session::where(
                'merchant',
                $merchantId
            )
                ->latest('id')
                ->first();

            Log::info('[Salla] Session lookup', [
                'merchant_id' => $merchantId,
                'session_id' => $session?->id,
                'provider_id' => $session?->provider_id,
            ]);

            if (!$session) {
                Log::warning(
                    '[Salla] No local OAuth session found',
                    [
                        'merchant_id' => $merchantId,
                    ]
                );

                return null;
            }

            return $session;

        } catch (\Throwable $e) {
            Log::error(
                '[Salla] Embedded authentication failed',
                [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]
            );

            return null;
        }
    }

    /**
     * Extract App ID from Salla v4.public token.
     *
     * Token structure:
     *
     * v4.public.PAYLOAD.SIGNATURE
     *
     * The payload contains:
     *
     * {
     *     "data": {...},
     *     "aud": "APP_ID",
     *     ...
     * }
     *
     * IMPORTANT:
     * This does NOT authenticate the token.
     *
     * It is only used to determine S-Source.
     * Salla's introspection endpoint performs
     * the actual verification.
     */
    private function getAppIdFromToken(
        string $token
    ): ?string {
        try {
            $parts = explode('.', $token);

            if (count($parts) !== 4) {
                Log::warning(
                    '[Salla] Invalid token structure',
                    [
                        'parts_count' => count($parts),
                    ]
                );

                return null;
            }

            /*
            |--------------------------------------------------------------------------
            | Expected:
            |
            | [0] => v4
            | [1] => public
            | [2] => payload
            | [3] => signature
            |--------------------------------------------------------------------------
            */

            if (
                $parts[0] !== 'v4' ||
                $parts[1] !== 'public'
            ) {
                Log::warning(
                    '[Salla] Unsupported token format',
                    [
                        'version' => $parts[0] ?? null,
                        'type' => $parts[1] ?? null,
                    ]
                );

                return null;
            }

            $payload = $this->base64UrlDecode(
                $parts[2]
            );

            $data = json_decode(
                $payload,
                true
            );

            if (!is_array($data)) {
                Log::warning(
                    '[Salla] Token payload is not valid JSON'
                );

                return null;
            }

            $appId = data_get(
                $data,
                'aud'
            );

            return $appId
                ? (string) $appId
                : null;

        } catch (\Throwable $e) {
            Log::warning(
                '[Salla] Failed to extract App ID',
                [
                    'message' => $e->getMessage(),
                ]
            );

            return null;
        }
    }

    /**
     * Get Bearer token robustly.
     */
    private function getBearerTokenRobust(
        Request $request
    ): ?string {
        /*
        |--------------------------------------------------------------------------
        | Laravel
        |--------------------------------------------------------------------------
        */

        $header = $request->bearerToken();

        if ($header) {
            return $header;
        }

        /*
        |--------------------------------------------------------------------------
        | Apache
        |--------------------------------------------------------------------------
        */

        if (function_exists('apache_request_headers')) {
            $headers = apache_request_headers();

            if ($headers) {
                $headers = array_change_key_case(
                    $headers,
                    CASE_LOWER
                );

                $authorization = $headers['authorization']
                    ?? null;

                if (
                    $authorization &&
                    stripos(
                        $authorization,
                        'Bearer '
                    ) === 0
                ) {
                    return trim(
                        substr(
                            $authorization,
                            7
                        )
                    );
                }
            }
        }

        /*
        |--------------------------------------------------------------------------
        | PHP / Nginx / FastCGI
        |--------------------------------------------------------------------------
        */

        $authorization =
            $_SERVER['HTTP_AUTHORIZATION']
            ?? $_SERVER['REDIRECT_HTTP_AUTHORIZATION']
            ?? $_SERVER['REDIRECT_REDIRECT_HTTP_AUTHORIZATION']
            ?? null;

        if (
            $authorization &&
            stripos(
                $authorization,
                'Bearer '
            ) === 0
        ) {
            return trim(
                substr(
                    $authorization,
                    7
                )
            );
        }

        return null;
    }

    /**
     * Base64 URL decoder.
     */
    private function base64UrlDecode(
        string $data
    ): string {
        $padding = strlen($data) % 4;

        if ($padding > 0) {
            $data .= str_repeat(
                '=',
                4 - $padding
            );
        }

        $decoded = base64_decode(
            strtr(
                $data,
                '-_',
                '+/'
            ),
            true
        );

        return $decoded ?: '';
    }

    /**
     * Queue our own application session cookie.
     */
    private function queueSallaCookie(
        Session $session
    ): void {
        cookie()->queue(
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

        Log::info(
            '[Salla] Session cookie queued',
            [
                'session_id' => $session->id,
                'merchant_id' => $session->merchant,
            ]
        );
    }

    /**
     * Initialize Accurate shipping client.
     */
    private function initializeShippingClient(
        Session $session
    ): void {
        try {
            $setting = Setting::where(
                'merchant',
                $session->merchant
            )
                ->where(
                    'provider_id',
                    $session->provider_id
                )
                ->first();

            if (!$setting) {
                Log::warning(
                    '[Accurate] Setting not found',
                    [
                        'merchant_id' => $session->merchant,
                        'provider_id' => $session->provider_id,
                    ]
                );

                return;
            }

            if (!$setting->user) {
                Log::warning(
                    '[Accurate] Setting user not found',
                    [
                        'setting_id' => $setting->id,
                    ]
                );

                return;
            }

            $graphqlUrl = app()->isProduction()
                ? 'https://' . $setting->user->domain . ':8443/graphql'
                : 'http://' . $setting->user->domain . ':8000/graphql';

            Client::init(
                $graphqlUrl,
                [
                    'Authorization' =>
                        'Bearer ' . $setting->token,

                    'content-language' =>
                        App::getLocale(),
                ]
            );

            Log::info(
                '[Accurate] Shipping client initialized',
                [
                    'merchant_id' => $session->merchant,
                    'provider_id' => $session->provider_id,
                    'graphql_url' => $graphqlUrl,
                ]
            );

        } catch (\Throwable $e) {
            Log::error(
                '[Accurate] Failed to initialize shipping client',
                [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]
            );
        }
    }
}
