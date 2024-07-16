<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Accurate\Shipping\Client\Client;
use Accurate\Shipping\Services\Service;
use Accurate\Shipping\Enums\Fields\ServiceField;
use App\Models\Setting;

class ServiceController extends Controller
{
    public function __invoke(Setting $setting)
    {
        Client::init(
            config('app.env') != 'production' ? "http://" . $setting->domain . ':8000/graphql' : "https://" . $setting->domain . ':8001/graphql',
            [
                'Authorization' => "Bearer " . $setting->accurate_token,
            ]
        );
        $response = (new Service)->listServices([ServiceField::ID, ServiceField::CODE, ServiceField::NAME]);
        $services = @$response->original['data']['listShippingServicesDropdown'] ?? [];

        return $services;
    }
}
