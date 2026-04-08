<?php

namespace App\Http\Middleware;

use Accurate\Shipping\Client\Client;
use App\Models\Session;
use App\Models\Setting;
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

        if (!$sessionId)
            return redirect(route('oauth.redirect'));

        $session = Session::find(app('encrypter')->decrypt($sessionId));

        if (!$session || $session->expires_at->isPast()) {
            return redirect(route('oauth.redirect'));
        }

        $this->initializeShippingClient($session);

        $request->attributes->set('sallaSession', $session);

        return $next($request);
    }

    private function initializeShippingClient(Session $session): void
    {
        try {
            $setting = Setting::where('merchant', $session->merchant)->first();

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
