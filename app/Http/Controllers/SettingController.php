<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Setting;
use App\Models\OauthToken;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{

    public function index(Request $request)
    {
        $domains = User::where('username', '<>', 'admin')->get()->pluck('domain')->toArray();
        return view('settings.token_settings', compact('domains'));
    }

    public function settingIndex()
    {
        return view('settings.index');
    }

    public function tokenSettingsSave(Request $request)
    {
        $request->validate([
            'url' => 'required|string|exists:users,domain',
            'data' => 'required|json',
        ]);

        $data = json_decode($request->data);

        $setting = Setting::where('merchant', $data->merchant)->first() ?? new Setting();

        $setting->forceFill([
            'user_id' => $setting->user_id ?? User::where('domain', $request->url)->first()->id,
            'expired' => $setting->expired ?? false,
            'merchant' => $setting->merchant ?? $data->merchant,
            'domain' => $setting->domain ?? $request->url,
        ])->save();

        $oauthToken = OauthToken::where('merchant', $data->merchant)->first() ?? new OauthToken();

        $oauthToken->forceFill([
            'setting_id' => $oauthToken->setting_id ?? $setting->id,
            'merchant' => $data->merchant,
            'access_token' => $data->access_token,
            'expires_in' => $data->expires_in,
            'refresh_token' => $data->refresh_token,
        ])->save();

        session()->put('setting', $setting->id);

        $this->subscribe($setting);

        return redirect(route('dashboard', ['setting' => $setting->id]));
    }
    public function save(Request $request)
    {
        $request->validate([
            'service' => [
                'required',
                'numeric',
            ],
            'zone' => [
                'required',
                'numeric',
            ],
            'sub_zone' => [
                'required',
                'numeric',
            ],
            'setting' => [
                'required',
                Rule::exists('settings', 'id'),
            ]
        ]);

        $setting = Setting::whereKey($request->setting)->first();

        $setting->forceFill([
            "from_zone_id" => $request->zone,
            "from_sub_zone_id" => $request->sub_zone,
            "service_id" => $request->service,
        ])->save();

        return redirect(route('dashboard', ['setting' => $setting->id]));
    }

    public function subscribe(Setting $setting)
    {
        $client = new Client();
        $headers = [
            'User-Agent' => 'Apidog/1.0.0 (https://apidog.com)',
            'Content-Type' => 'application/json',
            "Authorization" => "Bearer " . $setting->token->access_token,
        ];
        $body = json_encode([
            'name'  => 'webhook subscribe',
            'url'   => config('services.salla.redirect') . '/webhooks',
            'event' => 'order.shipment.creating',
            'version' => 2
        ]);

        $request = new Psr7Request('POST', 'https://api.salla.dev/admin/v2/webhooks/subscribe', $headers, $body);
        @$res = $client->sendAsync($request)->wait();
    }
}
