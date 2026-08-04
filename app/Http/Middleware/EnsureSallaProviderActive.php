<?php

namespace App\Http\Middleware;

use App\Models\Session;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureSallaProviderActive
{
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

        $provider = User::find($session->provider_id);

        if (!$provider || !$provider->active) {
            return response()->json([
                'message' => 'Provider is not active.'
            ], 403);
        }

        $request->attributes->set('sallaSession', $session);
        $request->attributes->set('provider', $provider);

        return $next($request);
    }
}
