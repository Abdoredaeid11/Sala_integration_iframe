<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use GuzzleHttp\Psr7\Request;
use App\Http\Requests\WebhookRequest;

class WebhookController extends Controller
{
    public function __invoke(WebhookRequest $request)
    {
        $event = explode('.', $request->get('event'));
        $component = $event[0];
        $action = Str::camel(Str::replace('.', '_', Str::after($request->get('event'), $component.'.')));

        $classOfAction = sprintf('\\App\\Actions\\%s\\%s', ucfirst($component), ucfirst($action));
        if (!class_exists($classOfAction)) {
            return response('Ok, but without process');
        }

        $classOfAction::make()->setRequest($request)->handle();

        return response('🎉');
    }

    public function subscribe()
    {
        $client = new Client();
        $headers = [
            'User-Agent' => 'Apidog/1.0.0 (https://apidog.com)',
            'Content-Type' => 'application/json',
            "Authorization" => "Bearer " . auth()->user()->token->access_token,
        ];
        $body = json_encode([
            'name'  => 'test form local',
            'url'   => 'https://officials-wizard-wheat-numerical.trycloudflare.com/webhooks',
            'event' => 'order.shipment.creating',
            'version' => 2
        ]);

        $request = new Request('POST', 'https://api.salla.dev/admin/v2/webhooks/subscribe', $headers, $body);
        @$res = $client->sendAsync($request)->wait();

        return redirect(route('dashboard'));
    }
}
