<?php

namespace App\Http\Controllers\Salla;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebhookRequest;

class WebhookController extends Controller
{
    public function __invoke(WebhookRequest $request)
    {
        $event = explode('.', $request->input('event'));
        $class = implode('\\', array_map(fn($str) => ucfirst($str), $event));

        $classOfAction = sprintf('\\App\\Actions\\%s', $class);

        if (!class_exists($classOfAction)) {
            return response('Ok, but without process');
        }

        $classOfAction::make()->setRequest($request)->handle();

        return response('🎉');
    }
}
