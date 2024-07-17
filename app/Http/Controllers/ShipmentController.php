<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Setting;
use App\Models\Province;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Accurate\Shipping\Client\Client;
use Accurate\Shipping\Enums\Fields\SizeField;
use Accurate\Shipping\Enums\Fields\ZoneField;
use Accurate\Shipping\Enums\Fields\ServiceField;
use Accurate\Shipping\Enums\Fields\ShipmentField;
use Accurate\Shipping\Enums\Fields\Core\DropDownField;
use Accurate\Shipping\Enums\Fields\CancellationReasonField;
use Accurate\Shipping\Services\Shipment as ServicesShipment;
use Accurate\Shipping\Models\Inputs\Shipment as InputsShipment;

class ShipmentController extends Controller
{

    public function store(Request $request)
    {
        /*
            TODO --- Zone, City, Ids shipment =>
            TODO --- [1] Update Mapped Zone in Zone Model,
            TODO --- [2] Get Subzone from accurate
            TODO --- [3] Get Shipments By Ids,
            TODO --- [4] Send Shipments With Details to Accurate System
        */
        $request->validate([
            'ids' => [
                'required',
                'string',
            ],
            'setting' => [
                'required',
                Rule::exists('settings', 'id'),
            ],
        ]);

        $setting = Setting::whereKey($request->setting)->first();

        $output = [
            ShipmentField::ID,
            ShipmentField::CODE,
            ShipmentField::TRACKING_URL,
            ShipmentField::DATE,
            ShipmentField::CREATEDAT,
            ShipmentField::UPDATEDAT,
            ShipmentField::DELIVERYDATE,
            ShipmentField::DESCRIPTION,
            ShipmentField::NOTES,
            ShipmentField::RECIPIENTLATITUDE,
            ShipmentField::PIECESCOUNT,
            ShipmentField::RETURNPIECESCOUNT,
            ShipmentField::WEIGHT,
            ShipmentField::ATTEMPTS,
            ShipmentField::AMOUNT,
            ShipmentField::DELIVERYFEES,
            ShipmentField::EXTRAWEIGHTFEES,
            ShipmentField::COLLECTIONFEES,
            ShipmentField::TOTALAMOUNT,
            ShipmentField::PRICE,
            ShipmentField::RETURNINGDUEFEES,
            ShipmentField::DELIVEREDAMOUNT,
            ShipmentField::RETURNEDVALUE,
            ShipmentField::ALLDUEFEES,
            ShipmentField::COLLECTEDFEES,
            ShipmentField::CUSTOMERDUE,
            ShipmentField::COLLECTEDAMOUNT,
            ShipmentField::PENDINGCOLLECTIONAMOUNT,
            ShipmentField::RETURNFEES,
            ShipmentField::RETURNDELIVERYFEES,
            ShipmentField::RETURNCOLLECTIONFEES,
            ShipmentField::POSTFEES,
            ShipmentField::TAX,
            ShipmentField::RECIPIENTNAME,
            ShipmentField::RECIPIENTPHONE,
            ShipmentField::RECIPIENTMOBILE,
            ShipmentField::RECIPIENTADDRESS,
            ShipmentField::RECIPIENTPOSTALCODE,
            ShipmentField::SENDERNAME,
            ShipmentField::SENDERPHONE,
            ShipmentField::SENDERMOBILE,
            ShipmentField::SENDERADDRESS,
            ShipmentField::SENDERPOSTALCODE,
            ShipmentField::REFNUMBER,
            ShipmentField::service([
                ServiceField::ID,
                ServiceField::CODE,
                ServiceField::NAME,
            ]),
            ShipmentField::senderZone([
                ZoneField::ID,
                ZoneField::CODE,
                ZoneField::NAME,
            ]),
            ShipmentField::senderSubZone([
                ZoneField::ID,
                ZoneField::CODE,
                ZoneField::NAME,
            ]),
            ShipmentField::recipientZone([
                ZoneField::ID,
                ZoneField::CODE,
                ZoneField::NAME,
            ]),
            ShipmentField::recipientSubzone([
                ZoneField::ID,
                ZoneField::CODE,
                ZoneField::NAME,
            ]),
            ShipmentField::cancellationReason([
                CancellationReasonField::ID,
                CancellationReasonField::CODE,
            ]),
            ShipmentField::size([
                SizeField::LENGTH,
                SizeField::WIDTH,
                SizeField::HEIGHT
            ]),
            ShipmentField::type([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
            ShipmentField::openable([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
            ShipmentField::paymentType([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
            ShipmentField::priceType([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
            ShipmentField::deliveryType([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
            ShipmentField::returnType([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
            ShipmentField::status([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
            ShipmentField::returnStatus([
                DropDownField::ID,
                DropDownField::CODE,
                DropDownField::NAME
            ]),
        ];

        $ids = str_contains($request->ids, ',') ? explode(',', $request->ids) : $request->ids;

        $shipments = Shipment::whereKey($ids)->get();

        $missedShipmentIds = [];

        foreach($shipments as $shipment){
            $this->saveShipment($shipment, $output, $missedShipmentIds, $setting);
        }

        if(count($missedShipmentIds)){
            return redirect(route('dashboard', ['setting' => $setting->id]))->withErrors([
                'shipments' => 'these orders {' . implode(', ' , $missedShipmentIds) . '} doesnt have mapped zone'
            ]);
        }
        return redirect(route('dashboard', ['setting' => $setting->id]));
    }

    public function saveShipment($shipment, $output, array &$missedShipmentIds = [], Setting $setting)
    {
        Client::init(
            config('app.env') != 'production' ? "http://" . $setting->domain . ':8000/graphql' : "https://" . $setting->domain . ':8001/graphql',
            [
                'Authorization' => "Bearer " . $setting->accurate_token,
            ]
        );

        if(is_null($shipment->zone)){
            $provinceId = Province::where('name', $shipment->city)->first()?->id;
            $zoneId = Zone::where('mapped_zone_id', $provinceId)?->first()?->id;
            $shipment->forceFill([
                'zone_id' => @$zoneId,
            ])->save();
            $shipment->refresh();
        }

        if(!is_null($shipment->zone)){
            $response = (new ServicesShipment)->saveShipment(input: new InputsShipment(
                weight: $shipment->weight,
                price:  $shipment->total,
                recipientPhone: '+' . $shipment->phone,
                recipientMobile: '+' . $shipment->phone,
                recipientAddress: $shipment->address,
                recipientSubzoneId: $shipment->zone->subzone_id,
                recipientZoneId: $shipment->zone->zone_id,
                recipientName: $shipment->name,
                id: null,
                code: null,
                serviceId: $setting->service_id,
                senderZoneId: $setting->from_zone_id,
                senderSubzoneId: $setting->from_sub_zone_id,
                refNumber: $shipment->order_id,
            ), output: $output);

            if (@$response->original['message']) {
                $errors = [];
                if (@$response->original['extensions']['category'] == 'authentication') {
                    $setting->expired = true;
                    $setting->save();
                    array_push($errors, 'Token is invalid');
                }

                if ($response->original['extensions']['category'] == 'custom') {
                    info($response->original['message']);
                    array_push($errors, @$response->original['message']);
                }

                if (@$response->original['extensions']['validation']) {
                    info(json_encode($response->original['extensions']['validation']));
                    foreach (@$response->original['extensions']['validation'] as $key => $value) {
                        array_push($errors, "there is an error with: " . explode('.', $key)[1] . " in order {$shipment->order_id} ");
                    }
                }

                return redirect(route('dashboard', ['setting', $setting->id]))->withErrors($errors);
            }

            if ($response->original['data']['saveShipment']) {
                $accurateShipment = @$response->original['data']['saveShipment'];
                $shipment->update([
                    'shipment_id' => @$accurateShipment['id'],
                    'code' => @$accurateShipment['code'],
                    'tracking_url' => @$accurateShipment['trackingUrl'],
                    'status' => @$accurateShipment['status']['name'],
                ]);
            }
        } else {
            $missedShipmentIds[] = $shipment->order_id;
        }
    }
}
