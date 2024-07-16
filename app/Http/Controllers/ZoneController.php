<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Setting;
use GuzzleHttp\Psr7\Request;
use Accurate\Shipping\Enums\Fields\ZoneField;
use Accurate\Shipping\Models\Filters\Service;
use Accurate\Shipping\Services\Zone as ServicesZone;
use Accurate\Shipping\Models\Filters\ListZonesFilter;
use Accurate\Shipping\Client\Client as AccurateClient;

class ZoneController extends Controller
{

    public function getZones($serviceId,Setting $setting, $parent = null, int $fromZoneId = null, int $fromSubzoneId = null)
    {
        AccurateClient::init(
            config('app.env') != 'production' ? "http://" . $setting->domain . ':8000/graphql' : "https://" . $setting->domain . ':8001/graphql',
            [
                'Authorization' => "Bearer " . $setting->accurate_token,
            ]
        );
        try {
            /** @var mixed */
            $response = (new ServicesZone())->listZones(input: new ListZonesFilter(parentId: $parent,service: new Service($serviceId)), output: [ZoneField::ID, ZoneField::CODE, ZoneField::NAME]);
            return $response->original['data']['listZonesDropdown'];
        } catch (\Throwable $e) {
            info("There is an error here DashboardController->zones:" . $e->getMessage());
            return [];
        }
    }

    public function getPublicZones($parent = null)
    {
        AccurateClient::init(auth()->user()->url);
        $response = (new ServicesZone())->listZones(input: new ListZonesFilter(parentId: $parent), output: [ZoneField::ID, ZoneField::CODE, ZoneField::NAME]);
        $zones = @$response->original['data']['listZonesDropdown'] ?? [];

        return $zones;
    }
}
