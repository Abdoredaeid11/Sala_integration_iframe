<?php

namespace App\Services;

use App\Models\Session;
use Illuminate\Support\Carbon;
use Salla\OAuth2\Client\Provider\Salla;
use League\OAuth2\Client\Token\AccessToken;
use Salla\OAuth2\Client\Provider\SallaUser;
use Illuminate\Support\Traits\ForwardsCalls;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use App\Models\User;

/**
 * @mixin Salla
 */
class SallaAuthService
{
    use ForwardsCalls;

    /**
     * @var Salla
     */
    protected $provider;

    /**
     * @var Session
     */
    public $session;

    public function __construct()
    {
        $this->provider = new Salla([
            'clientId'     => config('services.salla.client_id'), // The client ID assigned to you by Salla
            'clientSecret' => config('services.salla.client_secret'), // The client password assigned to you by Salla
            'redirectUri'  => $this->isEasyMode() ? null : config('services.salla.redirect'), // the url for current page in your service
        ]);
    }

    /**
     * Get the token from the Session model.
     *
     * @param  Session $session
     *
     * @return $this
     */
    public function forUser(Session $session)
    {
        $this->session = $session;

        return $this;
    }
    public function forProvider(User $provider)
    {
        info(secure_url(
            $provider->id . '/oauth/callback'
        ));

        $this->provider = new Salla([
            'clientId'     => $provider->client_id,
            'clientSecret' => $provider->client_secret,
            'redirectUri'  => secure_url(
                $provider->id . '/oauth/callback'
            ),
        ]);

        return $this;
    }

    /**
     * @return Salla
     */
    public function getProvider(): Salla
    {
        return $this->provider;
    }

    /**
     * Get the details of store for the current token.
     *
     *  {
     *      "id": 181690847,
     *      "name": "eman elsbay",
     *      "email": "user@salla.sa",
     *      "mobile": "555454545",
     *      "role": "user",
     *      "created_at": "2018-04-28 17:46:25",
     *      "store": {
     *        "id": 633170215,
     *        "owner_id": 181690847,
     *        "owner_name": "eman elsbay",
     *        "username": "good-store",
     *        "name": "متجر الموضة",
     *        "avatar": "https://cdn.salla.sa/XrXj/g2aYPGNvafLy0TUxWiFn7OqPkKCJFkJQz4Pw8WsS.jpeg",
     *        "store_location": "26.989000873354787,49.62477639657287",
     *        "plan": "special",
     *        "status": "active",
     *        "created_at": "2019-04-28 17:46:25"
     *      }
     *    }
     * @return \League\OAuth2\Client\Provider\ResourceOwnerInterface|SallaUser
     */
    public function getStoreDetail()
    {
        return $this->provider->getResourceOwner(new AccessToken($this->session->toArray()));
    }

    /**
     * Get A new access token via refresh token.
     *
     * @return \League\OAuth2\Client\Token\AccessToken|\League\OAuth2\Client\Token\AccessTokenInterface
     * @throws \League\OAuth2\Client\Provider\Exception\IdentityProviderException
     */
    public function getNewAccessToken()
    {
        if (!$this->session->refresh_token) {
            throw new \RuntimeException('No refresh token available for Salla session.');
        }

        $shouldRefresh = !$this->session->expires_at || $this->session->expires_at->subMinutes(5)->isPast();

        if (!$shouldRefresh) {
            return new AccessToken($this->session->toArray());
        }

        $token = $this->provider->getAccessToken('refresh_token', [
            'refresh_token' => $this->session->refresh_token
        ]);

        $this->session->forceFill([
            'access_token'  => $token->getToken(),
            'expires_at'    => Carbon::createFromTimestamp($token->getExpires())->toDateTimeString(),
            'refresh_token' => $token->getRefreshToken()
        ])->save();

        return $token;
    }

    public function request(string $method, string $url, array $options = [])
    {
        // you need always to check the token before made a request
        // If the token expired, lets request a new one and save it to the database
        $this->getNewAccessToken();

        return $this->provider->fetchResource($method, $url, $this->session->access_token, $options);
    }

    /**
     * As shortcut to call the functions of provider class.
     *
     *
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        info(json_encode(['provider' => $this->provider, 'name' => $name, 'arguments' => $arguments]));
        return $this->forwardCallTo($this->provider, $name, $arguments);
    }

    /**
     * Determine if the authorization mode is easy
     *
     * @return bool
     */
    public function isEasyMode(): bool
    {
        return config('services.salla.authorization_mode') === 'easy';
    }

    /**
     * Requests and returns the resource owner of given access token.
     *
     * @param  AccessToken $token
     * @return ResourceOwnerInterface
     */
    public function getResourceOwner(?AccessToken $token)
    {
        return $this->provider->getResourceOwner($token ?: new AccessToken($this->session->toArray()));
    }
}
