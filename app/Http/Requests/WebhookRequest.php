<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class WebhookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $providerId = $this->route('provider');

        $provider = User::find($providerId);

        Log::info('Webhook Signature Check', [
            'provider_id' => $providerId,
            'headers' => $this->headers->all(),
            'body' => $this->getContent(),
        ]);

        if (!$provider) {
            Log::warning('Webhook provider not found', [
                'provider_id' => $providerId
            ]);

            return false;
        }

        $secret = $provider->webhook_secret;

        if (!$secret) {
            Log::warning('Webhook secret missing', [
                'provider_id' => $providerId
            ]);

            return false;
        }

        return match ($this->header('X-Salla-Security-Strategy')) {
            'Signature' => $this->validateSignature($secret),
            'Token'     => $this->validateToken($secret),
        };
    }

    protected function validateSignature(string $secret)
    {
        $providerId = $this->route('provider');

        $requestSignature = $this->header('x-salla-signature');

        if (!$requestSignature) {
            Log::warning('Webhook signature missing', [
                'provider_id' => $providerId
            ]);

            return false;
        }

        $computedSignature = hash_hmac('sha256', $this->getContent(), $secret);

        $isValid = hash_equals($requestSignature, $computedSignature);

        Log::info('Webhook Signature Result', [
            'provider_id' => $providerId,
            'received' => $requestSignature,
            'computed' => $computedSignature,
            'match' => $isValid,
        ]);

        return $isValid;
    }

    protected function validateToken(string $secret)
    {
        info(json_encode([
            'provider_id' => $this->route('provider'),
            'token' => $this->header('Authorization'),
            'secret' => $secret,
        ]));

        return $this->header('Authorization') == $secret;
    }

    /**
     * Validation rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            'event'    => ['required'],
            'merchant' => ['required'],
            'data'     => ['required'],
        ];
    }
}
