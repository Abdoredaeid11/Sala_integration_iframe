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

class EnsureSallaSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  public function handle(Request $request, Closure $next): Response
{
    $sessionId = $request->cookie('salla_session');

    if (!$sessionId) {
        return response()->json([
            'message' => 'Unauthorized access.'
        ], 403);
    }

    try {
        $sessionId = app('encrypter')->decrypt($sessionId);
        $session = Session::find($sessionId);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Invalid session.'
        ], 403);
    }

    if (!$session) {
        return response()->json([
            'message' => 'Session not found.'
        ], 403);
    }

    if ($session->expires_at->isPast()) {
        return response()->json([
            'message' => 'Session expired.'
        ], 403);
    }

    $provider = User::find($session->provider_id);

    if (!$provider) {
        return response()->json([
            'message' => 'Provider not found.'
        ], 403);
    }

    if (!$provider->active) {
        return response()->json([
            'message' => 'Provider is inactive.'
        ], 403);
    }

    $this->initializeShippingClient($session);

    $request->attributes->set('sallaSession', $session);
    $request->attributes->set('provider', $provider);

    return $next($request);
}

    private function initializeShippingClient(Session $session): void
    {
        try {
            $setting = Setting::where('merchant', $session->merchant)->where('provider_id', $session->provider_id)->first();

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
