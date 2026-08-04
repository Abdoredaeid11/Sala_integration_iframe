<?php

namespace App\Http\Controllers\Salla;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Models\User;
use App\Services\SallaAuthService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;


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
    public function redirect(Request $request, $provider)
    {
        $shippingProvider = User::findOrFail($provider);

        if (!$shippingProvider->active) {
            abort(403);
        }

        return redirect(
            $this->service
                ->forProvider($shippingProvider)
                ->getAuthorizationUrl()
        );
    }

    public function callback(Request $request, $provider)
    {
        if ($request->filled('error')) {
            return redirect()->route('home')->withErrors([
                'oauth' => $request->input(
                    'error_description',
                    'Authorization failed.'
                ),
            ]);
        }

        if (!$request->filled('code')) {
            abort(400, 'Missing authorization code');
        }

        abort_if(
            $this->service->isEasyMode(),
            401,
            'The Authorization mode is not supported'
        );

        $shippingProvider = User::findOrFail($provider);

        $this->service->forProvider($shippingProvider);

        $token = $this->service->getAccessToken('authorization_code', [
            'code' => $request->input('code')
        ]);

        /** @var \Salla\OAuth2\Client\Provider\SallaUser $user */
        $user = $this->service->getResourceOwner($token);

        $session = Session::firstOrNew([
            'merchant'    => $user->getStoreId(),
            'provider_id' => $shippingProvider->id,
        ]);

        $session->forceFill([
            'merchant'      => $user->getStoreId(),
            'provider_id'   => $shippingProvider->id,
            'access_token'  => $token->getToken(),
            'expires_at'    => Carbon::createFromTimestamp(
                $token->getExpires()
            )->toDateTimeString(),
            'refresh_token' => $token->getRefreshToken(),
        ])->save();

        Cookie::queue(
            'salla_session',
            encrypt($session->id),
            60 * 24 * 30,
            '/',
            null,
            true,
            true,
            false,
            'lax'
        );

        return redirect()->route('home');
    }

    public function install(Request $request)
    {

        abort_if(!$request->provider_id, 404);

        session([
            'oauth_provider_id' => (int) $request->provider_id
        ]);

        return redirect()->route('oauth.redirect');
    }
}
