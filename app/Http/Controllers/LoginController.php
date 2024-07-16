<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\OauthToken;
use Illuminate\Http\Request;
use Accurate\Shipping\Client\Client;
use Accurate\Shipping\Enums\Fields\LoginField;
use Accurate\Shipping\Models\Inputs\Login as InputsLogin;
use Accurate\Shipping\Services\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('settings.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required',
            'setting' => 'required|exists:settings,id',
        ]);

        $setting = Setting::whereKey($request->setting)->first();

        Client::init(config('app.env') != 'production' ? "http://" . $setting->domain . ':8000/graphql' : "https://" . $setting->domain . ':8001/graphql');
        try {
            $output = [LoginField::TOKEN];
            /** @var mixed */
            $response = (new Login())->login(new InputsLogin($request->username, $request->password), $output);
            $token = $response->original['data']['login']['token'];

            $setting->forceFill([
                'accurate_token' => $token,
            ])->save();

            return redirect(route('dashboard', ['setting' => $setting->id]));
        } catch (\Throwable $e) {
            info("There is an error here:" . $e->getMessage());
            return back()->withErrors(['msg' => 'Invalid Credentials']);
        }

    }
}
