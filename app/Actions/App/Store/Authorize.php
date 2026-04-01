<?php

namespace App\Actions\App\Store;

use App\Actions\BaseAction;
use App\Models\Session;

/**
 * @property string merchant example "1234509876"
 * @property string created_at example "Wed Jun 30 2021 14:32:33 GMT+0300"
 * @property string event example "app.installed"
 * @property array data @see https://docs.salla.dev/docs/merchent/ZG9jOjIzMjE3MjQ0-app-events#app-installation
 */
class Authorize extends BaseAction
{
    public function handle()
    {
        // $session = Session::where('merchant', $this->merchant)->first() ?? new Session();

        // info(json_encode([
        //     'session' => $session,
        //     'data' => $this->data,
        //     'merchant' => $this->merchant,
        //     'access_token' => $this->data['access_token'],
        //     'refresh_token' => $this->data['refresh_token'],
        //     'expires_at' => $this->data['expires'],
        // ]));

        // $session->forceFill([
        //     'merchant'   => $this->merchant,
        //     'access_token'  => $this->data['access_token'],
        //     'refresh_token' => $this->data['refresh_token'],
        //     'expires_at'    => $this->data['expires'],
        // ])->save();
    }
}
