<?php

namespace App\Http\Controllers;

use App\Models\OauthToken;
use App\Services\SallaAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

class OAuthController extends Controller
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
        abort_if($this->service->isEasyMode(), 401,'The Authorization mode is not supported');

        try {
            $token = $this->service->getAccessToken('authorization_code', [
                'code' => $request->code ?? ''
            ]);

            /** @var \Salla\OAuth2\Client\Provider\SallaUser $user */
            $user = $this->service->getResourceOwner($token);

            // $oAuthToken = OauthToken::where('merchant', $user->getStoreId())->exists() ?
            //                 OauthToken::where('merchant', $user->getStoreId())->first() : new OauthToken();

            // $params = [
                // 'merchant'      => $user->getStoreId(),
                // 'access_token'  => $token->getToken(),
                // 'expires_in'    => $token->getExpires(),
                // 'refresh_token' => $token->getRefreshToken(),
            // ];

            // $oAuthToken->forcefill($params)->save();

            session()->put('merchant', $user->getStoreId());
            session()->put('token', $token);

            return redirect(route('settings.token'));

        } catch (IdentityProviderException $e) {
            return redirect(route('settings.token'))->withStatus($e->getMessage());
        }
    }
}
