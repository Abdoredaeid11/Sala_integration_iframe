<?php

namespace App\Actions\Order;

use App\Actions\BaseAction;
use App\Models\Province;
use App\Models\Setting;
use App\Models\Shipment;
use App\Models\Zone;

/**
 * @property string merchant example "674390266"
 * @property string created_at example "2021-06-02 22:17:06"
 * @property string event example "order.shipment.creating"
 * @property array data @see https://docs.salla.dev/docs/merchent/c2NoOjE4OTY4MzIx-order-shipment-creating
 */
class ShipmentCreating extends BaseAction
{
    public function handle()
    {
        info($this->data);
        $shipment = $this->data['shipments'][0];
        $provinceId = Province::where('name', $shipment['ship_to']['city'])->first()?->id;
        $zoneId = Zone::where('mapped_zone_id', $provinceId)?->first()?->id;
        $settingId = Setting::where('merchant', $this->merchant)?->first()?->id;

        if(!Shipment::where('order_id', $this->data['id'])->exists()){
            return Shipment::create([
                'order_id'      => $this->data['id'],
                'merchant'      => $this->merchant,
                'setting_id'    => $settingId,
                'weight'        => $shipment['total_weight']['value'],
                'total'         => $shipment['total']['amount'],
                'address'       => $shipment['ship_to']['address_line'],
                'name'          => $shipment['ship_to']['name'],
                'phone'         => $shipment['ship_to']['phone'],
                'city'          => $shipment['ship_to']['city'],
                'zone_id'       => @$zoneId,
            ]);
        } else {
            info("This order {$this->data['id']} sent from Salla before");
            return;
        }
    }
}
