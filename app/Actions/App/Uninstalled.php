<?php

namespace App\Actions\App;

use App\Actions\BaseAction;
use App\Models\Session;
use App\Models\Setting;
use Illuminate\Support\Facades\Cookie;

/**
 * @property string merchant example "1234509876"
 * @property string created_at example "Wed Jun 30 2021 14:32:33 GMT+0300"
 * @property string event example "app.uninstalled"
 * @property array data @see https://docs.salla.dev/docs/merchent/ZG9jOjIzMjE3MjQ0-app-events#app-installation
 */
class Uninstalled extends BaseAction
{
    public function handle()
    {
        Setting::where('merchant', $this->merchant)->delete();
        Session::where('merchant', $this->merchant)->delete();
        Cookie::forget('salla_session');
    }
}
