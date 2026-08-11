<?php

namespace App\Http\Controllers\Salla;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebhookRequest;
use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function __invoke(WebhookRequest $request)
    {
        if ($request->input('event') === 'app.store.authorize') {
            $providerId = $request->route('provider');
            $merchantId = $request->input('merchant');
            $data = $request->input('data');

            $accessToken = $data['access_token'] ?? null;
            $refreshToken = $data['refresh_token'] ?? null;
            $expiresTimestamp = $data['expires'] ?? null;

            Log::info('[Webhook] app.store.authorize received', [
                'provider_id' => $providerId,
                'merchant_id' => $merchantId,
                'has_access_token' => (bool) $accessToken,
            ]);

            if (!$merchantId || !$accessToken) {
                Log::warning('[Webhook] app.store.authorize missing merchant or access_token', [
                    'provider_id' => $providerId,
                    'merchant' => $merchantId,
                ]);

                return response('Ok, but missing data');
            }

            $session = Session::firstOrNew([
                'merchant'    => $merchantId,
                'provider_id' => $providerId,
            ]);

            $session->forceFill([
                'merchant'      => $merchantId,
                'provider_id'   => $providerId,
                'access_token'  => $accessToken,
                'refresh_token' => $refreshToken,
                'expires_at'    => $expiresTimestamp
                    ? Carbon::createFromTimestamp($expiresTimestamp)
                    : null,
            ]);

            $session->save();

            Log::info('[Webhook] Session created/updated from app.store.authorize', [
                'session_id'  => $session->id,
                'merchant_id' => $merchantId,
                'provider_id' => $providerId,
            ]);

            return response('Ok');
        }

        $event = explode('.', $request->input('event'));
        $class = implode('\\', array_map(fn($str) => ucfirst($str), $event));

        $classOfAction = sprintf('\\App\\Actions\\%s', $class);

        if (!class_exists($classOfAction)) {
            return response('Ok, but without process');
        }

        $classOfAction::make()->setRequest($request)->handle();

        return response('Ok');
    }
}
