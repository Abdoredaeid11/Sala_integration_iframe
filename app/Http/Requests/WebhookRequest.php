<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebhookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $secret = config('services.salla.webhook_secret');
        $requestHMAC = $this->header('x-salla-signature');
        $requestBody = $this->getContent();
        $computedHMAC = hash_hmac('sha256', $requestBody, $secret);

        return hash_equals($requestHMAC, $computedHMAC);
    }

    public function rules()
    {
        return [
            'event'    => ['required'],
            'merchant' => ['required'],
            'data'     => ['required'],
        ];
    }
}
