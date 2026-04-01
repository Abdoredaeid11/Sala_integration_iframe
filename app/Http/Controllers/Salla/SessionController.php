<?php

namespace App\Http\Controllers\Salla;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Services\SallaAuthService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SessionController extends Controller
{
    /**
     * @var SallaAuthService
     */
    private $service;

    public function __construct(SallaAuthService $service)
    {
        $this->service = $service;
    }

    public function redirect()
    {
        return redirect($this->service->getProvider()->getAuthorizationUrl());
    }

    public function callback(Request $request)
    {
        abort_if($this->service->isEasyMode(), 401, 'The Authorization mode is not supported');

        $token = $this->service->getAccessToken('authorization_code', [
            'code' => $request->input('code')
        ]);

        /** @var \Salla\OAuth2\Client\Provider\SallaUser $user */
        $user = $this->service->getResourceOwner($token);

        $session = Session::where('merchant', $user->getStoreId())->first() ?? new Session;

        if (
            $session->access_token != $token->getToken() || $session->refresh_token != $token->getRefreshToken()
            || $session->expires_at->notEqualTo(Carbon::createFromTimestamp($token->getExpires()))
        ) {
            $session->forceFill([
                'merchant'      => $user->getStoreId(),
                'access_token'  => $token->getToken(),
                'expires_at'    => Carbon::createFromTimestamp($token->getExpires())->toDateTimeString(),
                'refresh_token' => $token->getRefreshToken(),
            ])->save();
        }

        Cookie::queue(
            'salla_session',
            app('encrypter')->encrypt($session->id),
            60 * 24 * 30,
            '/',
            null,
            true,   // secure (HTTPS only)
            true,   // httpOnly
            false,  // raw
            'lax'   // sameSite
        );

        return redirect()->route('home');
    }
}
