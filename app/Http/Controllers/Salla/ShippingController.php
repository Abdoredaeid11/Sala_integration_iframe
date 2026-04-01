<?php

namespace App\Http\Controllers\Salla;

use Exception;
use App\Models\Country;
use App\Models\Setting;
use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Models\Zone as MappedZone;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Accurate\Shipping\Models\Inputs\Size;
use Accurate\Shipping\Enums\Types\TypeField;
use Accurate\Shipping\Enums\Types\PriceField;
use Accurate\Shipping\Enums\Types\BooleanField;
use Accurate\Shipping\Enums\Types\PaymentField;
use Accurate\Shipping\Enums\Fields\ShipmentField;
use Accurate\Shipping\Enums\Fields\Core\DropDownField;
use Accurate\Shipping\Models\Filters\ListShipmentFilter;
use Accurate\Shipping\Services\Shipment as ShipmentService;
use Accurate\Shipping\Services\Shipment as AccurateShipment;
use Accurate\Shipping\Models\Inputs\Shipment as InputsShipment;
use App\Models\Province;

class ShippingController extends Controller
{
    private $setting;
    private $session;

    public function listOrders(Request $request)
    {
        try {
            $this->session = $request->get('sallaSession');

            $this->setting = Setting::where('session_id', $this->session->id)->first();

            $orders = $this->getOrders($request->input('page'));

            $args = $request->all();

            if (empty($orders)) {
                return response()->json(['orders' => [], 'pageInfo' => ['hasNextPage' => false, 'hasPreviousPage' => false]]);
            }

            $shipmentIds = collect($orders['data'])->filter(fn($o) => !$o['draft'])->pluck('id')->filter()->unique();

            if ($shipmentIds->isNotEmpty()) {
                $shipments = Shipment::whereIn('order_id', $shipmentIds)
                    ->where('session_id', $this->session->id)
                    ->get();

                /** @var mixed */
                $response = (new AccurateShipment())->listShipments(
                    input: new ListShipmentFilter(id: $shipments->pluck('shipment_id')->toArray()),
                    output: [ShipmentField::ID, ShipmentField::CODE, ShipmentField::TRACKING_URL, ShipmentField::DELIVEREDORRETURNEDDATE, ShipmentField::RECIPIENTNAME, ShipmentField::status([DropDownField::ID, DropDownField::CODE, DropDownField::NAME])],
                    first: @$args['first'] ?? @$args['last'],
                    page: 1
                );

                if (@$response->data['data']['message']) {
                    return response()->json(json_encode($response->data['data']), 402);
                }

                // make collection of shipments from accurate provider
                $accurateShipments = collect();

                // Safely extract shipments from response
                if (isset($response->data['data']['listShipments']['data']) && is_array($response->data['data']['listShipments']['data'])) {
                    $accurateShipments = collect($response->data['data']['listShipments']['data']);
                } else {
                    // Log when we don't get expected data structure
                    info('Unexpected Accurate API response structure', [
                        'response_structure' => array_keys($response->data['data'] ?? []),
                        'listShipments_exists' => isset($response->data['data']['listShipments']),
                        'data_exists' => isset($response->data['data']['listShipments']['data']),
                        'local_shipments_count' => $shipments->count()
                    ]);
                }

                // Add shipment info to orders
                $accurateShipments->each(function ($accurateShipment) use (&$orders, $shipments) {
                    $shipment = $shipments
                        ->where('shipment_id', $accurateShipment['id'])
                        ->where('session_id', $this->session->id)
                        ->first();

                    $params = [
                        'status' => $accurateShipment['status']['name'],
                        'delivered_at' => $accurateShipment['deliveredOrReturnedDate'],
                        'tracking' => $accurateShipment['trackingUrl'],
                    ];

                    $shipment->forceFill($params);
                    $shipment->save();

                    $ordersData = collect($orders['data'])
                        ->transform(function ($order) use ($shipment, $accurateShipment) {
                            if ($order['id'] == $shipment->order_id) {
                                $order['shipment'] = [
                                    'id' => $accurateShipment['id'],
                                    'code' => $accurateShipment['code'],
                                    'tracking' => $accurateShipment['trackingUrl'],
                                    'status' => $accurateShipment['status']['name'],
                                    'consignee' => $accurateShipment['recipientName'] ?? $order['salla_shipment']['ship_to']['name'],
                                    'deliveredAt' => $accurateShipment['deliveredOrReturnedDate'],
                                    'syncedAt' => $shipment->created_at->toDatetimeString(),
                                ];
                            }

                            return $order;
                        })
                        ->values()
                        ->toArray();

                    $orders['data'] = $ordersData;
                });

                // Only process deferred shipments if we have a valid response from Accurate
                // Deferred shipments are local shipments that don't exist in the Accurate provider's response
                if ($deferredShipmentsIds = array_diff($shipments->pluck('shipment_id')->toArray(), $accurateShipments->pluck('id')->toArray())) {
                    $deferredShipments = $shipments
                        ->where('session_id', $this->session->id)
                        ->whereIn('shipment_id', $deferredShipmentsIds)
                        ->all();

                    // Only cancel fulfillments and remove shipments if we have a substantial response from Accurate
                    // This prevents accidental cancellations due to API issues or incomplete responses
                    $shouldCancelFulfillments = false;

                    // Check if we have a reasonable response from Accurate API
                    if ($accurateShipments->count() > 0) {
                        // We got some shipments back, so it's likely a real difference
                        $shouldCancelFulfillments = true;
                    } elseif ($shipments->count() <= 3) {
                        // For small numbers of shipments, it's safer to proceed
                        $shouldCancelFulfillments = true;
                    } else {
                        // For larger numbers with no response, likely an API issue
                        $shouldCancelFulfillments = false;
                    }

                    if ($shouldCancelFulfillments) {
                        // Only cancel fulfillments and remove tags for the specific shipments that were deleted from shipping company
                        Shipment::whereIn('id', collect($deferredShipments)->pluck('id')->toArray())->delete();

                        // Update order edges to remove shipment information for cancelled shipments
                        $cancelledOrderIds = collect($deferredShipments)->pluck('order_id')->toArray();

                        $orders = collect($orders)
                            ->transform(function ($order) use ($cancelledOrderIds) {
                                if (in_array($order['id'], $cancelledOrderIds)) {
                                    // Remove shipment information and update fulfillment status
                                    unset($order['shipment']);
                                }
                                return $order;
                            })
                            ->toArray();

                        info('Cancelled fulfillments and removed shipments for deferred shipments', [
                            'cancelled_count' => count($deferredShipments),
                            'deferred_shipment_ids' => collect($deferredShipments)->pluck('shipment_id')->toArray(),
                            'updated_order_ids' => $cancelledOrderIds
                        ]);
                    } else {
                        // Log warning instead of cancelling when we suspect API issues
                        info('Skipping fulfillment cancellation - possible API issue or incomplete response', [
                            'accurate_shipments_count' => $accurateShipments->count(),
                            'local_shipments_count' => $shipments->count(),
                            'deferred_count' => count($deferredShipments),
                            'reason' => 'No shipments returned from Accurate API - possible connectivity issue'
                        ]);
                    }
                }
            }

            return response()->json([
                'orders' => collect($orders['data'])->filter(fn($o) => !$o['draft'])->values()->toArray(),
                'pageInfo' => $orders['pagination'],
            ]);
        } catch (Exception $e) {
            return response()->json(
                [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                    'orders' => [],
                    'pageInfo' => ['hasNextPage' => false, 'hasPreviousPage' => false],
                ],
                500,
            );
        }
    }

    private function getAddress($shipment)
    {
        return $shipment['shipping']['address_line'];
    }

    private function getPhone($shipment)
    {
        return $shipment['shipping']['phone'];
    }

    // description
    private function getDescription($items): string
    {
        $description = '';

        foreach ($items as $key => $value) {
            $description = $description . "\n" . $value['quantity'] . ' X ' . $value['name'];
        }

        return $description;
    }

    private function getOrders(?int $page = 1, ?int $id = null)
    {
        $query = [];

        if ($page) $query['page'] = $page;
        if ($id) $query['reference_id'] = $id;

        $ordersResponse = Http::withToken($this->session->access_token)
            ->get(config('services.salla.api_url') . "/orders", $query);

        if ($ordersResponse->getStatusCode() !== 200) {
            return [
                'data' => [],
                'pagination' => [
                    'hasNextPage'       => false,
                    'hasPreviousPage'   => false,
                ],
            ];
        }

        $shipmentsResponse = Http::withToken($this->session->access_token)
            ->get(config('services.salla.api_url') . "/shipments", $query);

        $orders = collect($ordersResponse->json()['data']);

        $shipments = collect($shipmentsResponse->json()['data']);

        $orders = $orders->map(function ($order) use ($shipments) {
            $order['salla_shipment'] = $shipments->where('order_id', $order['id'])->first();

            return $order;
        });

        $response = $ordersResponse->json();
        $response['data'] = $orders->toArray();

        return $response;
    }

    // --------------------------------------------
    // -----------Send orders to accurate----------
    // --------------------------------------------

    // Send orders to accurate
    public function sendOrders(Request $request)
    {
        $data = $request->all();

        $this->session = $request->get('sallaSession');
        $this->setting = Setting::with('user')->where('session_id', $this->session->id)->first();

        if ($this->setting->expired) {
            return response()->json('Token is expired', status: 402);
        }

        // Ensure selected client is active before proceeding
        if (!$this->setting->user || !$this->setting->user->active) {
            return response()->json('Selected provider is inactive', status: 402);
        }

        foreach ($data['orders'] as $key => $order) {
            $order = $this->getOrders(id: $order['id']);

            $order = $order['data'][0];

            if (!$order)
                throw new Exception('Order Not Exists in Salla');

            $order['service_id'] = @$this->setting->service_id;

            $order['shipping'] = [
                'name' => $data['orders'][$key]['name'],
                'phone' => $data['orders'][$key]['phone'],
                'country_id' => $data['orders'][$key]['country_id'],
                'city_id' => $data['orders'][$key]['city_id'],
                'address_line' => $data['orders'][$key]['address_line'],
                'items' => $data['orders'][$key]['items'],
                'total_weight' => $data['orders'][$key]['total_weight'],
            ];

            if ($validation = $this->validateOrder($order)) {
                return $validation;
            }

            try {
                $order = $this->prepareOrderForShipping($order);
            } catch (Exception $e) {
                info($e->getMessage());
                return response()->json($e->getMessage(), status: 402);
            }

            if (!$order['zone_id'] || !$order['subzone_id']) {
                $message = "This order " . ($order['zone_id'] ? 'SubZone' : 'Zone') . " not mapped before #{$order['reference_id']}";
                return response()->json(
                    $message,
                    status: 402
                );
            }

            // save shipment to be shipped
            if (!($result = $this->saveShipment($order, $this->session->id))) {
                break;
            }
        }

        return $result;
    }

    // shipment create/update
    protected function saveShipment($order, $sessionId)
    {
        $output = [ShipmentField::ID, ShipmentField::CODE, ShipmentField::TRACKING_URL, ShipmentField::DELIVEREDORRETURNEDDATE, ShipmentField::DATE, ShipmentField::CREATEDAT, ShipmentField::status([DropDownField::ID, DropDownField::CODE, DropDownField::NAME])];

        /** @var mixed */
        $response = (new ShipmentService())->saveShipment(
            input: new InputsShipment(
                weight: $order['shipping']['total_weight'] / 1000,
                price: $order['total']['amount'],

                recipientPhone: $this->getPhone($order),
                recipientMobile: $this->getPhone($order),
                recipientAddress: $this->getAddress($order),

                recipientSubzoneId: @$order['subzone_id'],
                recipientZoneId: $order['zone_id'],
                recipientName: $order['shipping']['name'],

                id: null,
                code: null,

                senderSubzoneId: $this->setting->from_subzone_id,
                senderZoneId: $this->setting->from_zone_id,
                serviceId: $this->setting->service_id,

                piecesCount: collect($order['items'])->sum('quantity') ?? 0,

                notes: @$order['note'] ?? '',
                description: $this->getDescription($order['items']),
                refNumber: $order['reference_id'],
                priceTypeCode: PriceField::INCLD,
                paymentTypeCode: PaymentField::COLC,
                openableCode: $this->setting->openable_code == 'Y' ? BooleanField::Y : BooleanField::N,
                typeCode: TypeField::FDP,
                size: new Size(1, 1, 1),
            ),
            output: $output,
        );

        if (@$response->data['message']) {
            $errors = [];
            if (@$response->data['extensions']['category'] == 'authentication') {
                $this->setting->expired = true;
                $this->setting->save();
                array_push($errors, 'Token is invalid');
            }

            if ($response->data['extensions']['category'] == 'custom') {
                array_push($errors, @$response->data['message']);
            }

            if (@$response->data['extensions']['validation']) {
                $seenFields = [];
                foreach (@$response->data['extensions']['validation'] as $key => $value) {
                    $parts = explode('.', $key);
                    $field = isset($parts[1]) ? $parts[1] : $key;

                    // Normalize equivalent phone fields to avoid duplicate messages
                    if ($field === 'recipientMobile' || $field === 'recipientPhone') {
                        $field = 'recipientPhone';
                    }

                    if (!isset($seenFields[$field])) {
                        $seenFields[$field] = true;
                        array_push($errors, 'there is an error with: ' . $field . " in order {$order['reference_id']} ");
                    }
                }
            }
            return response()->json($errors, 402);
        }

        $respArray = json_decode(json_encode($response), true);

        $getNested = function (array $arr, array $path) {
            $tmp = $arr;
            foreach ($path as $key) {
                if (is_array($tmp) && array_key_exists($key, $tmp)) {
                    $tmp = $tmp[$key];
                } else {
                    return null;
                }
            }
            return $tmp;
        };

        $possiblePaths = [['original', 'data', 'saveShipment'], ['original', 'data', 'data', 'saveShipment'], ['data', 'data', 'saveShipment'], ['stdClass', 'data', 'data', 'saveShipment'], ['stdClass', 'data', 'saveShipment'], ['data', 'saveShipment']];

        // try to find saveShipment
        $shipment = null;
        foreach ($possiblePaths as $path) {
            $found = $getNested($respArray, $path);
            if ($found !== null) {
                $shipment = $found;
                break;
            }
        }

        if ($shipment) {
            $this->syncShipment($shipment, $order['id'], $sessionId);
        }

        return true;
    }

    // sync shipment
    private function syncShipment($shipment, $orderId, $sessionId)
    {
        /** @var Shipment */
        $syncedShipment = new Shipment();

        $params = [
            'shipment_id' => $shipment['id'],
            'status' => $shipment['status']['name'],
            'delivered_at' => $shipment['deliveredOrReturnedDate'],
            'tracking' => $shipment['trackingUrl'],
            'shipping_fees' => 0,
            'session_id' => $sessionId,
            'order_id' => $orderId,
        ];
        $syncedShipment->forceFill($params);
        $syncedShipment->save();

        return $shipment;
    }

    /**
     * Comprehensive order validation before sending to shipping
     * Validates order status, customer data, and shipping requirements
     */
    private function validateOrder($order)
    {
        info(json_encode($order));
        // Check if order already has a shipment
        if (Shipment::where('order_id', $order['id'])->exists()) {
            info("This order synced before #{$order['reference_id']}");
            return response()->json("This order synced before #{$order['reference_id']}", status: 402);
        }

        // Check if order is canceled
        if ($order['status']['slug'] == 'canceled') {
            info("This order is canceled and cannot be shipped #{$order['reference_id']}", [
                'cancel_reason' => $order['cancelReason'] ?? 'Unknown',
                'cancelled_at' => $order['cancelledAt'] ?? 'Unknown'
            ]);

            return response()->json("This order is canceled and cannot be shipped #{$order['reference_id']}. Reason: " . ($order['cancelReason'] ?? 'Unknown'), status: 402);
        }

        // Check customer information
        if (!@$order['shipping']['name']) {
            info("The Customer name is required and not presented in data #{$order['reference_id']}");
            return response()->json("The Customer name is required and not presented in data #{$order['reference_id']}", status: 402);
        }

        // Check address
        if (!$this->getAddress($order)) {
            info("The address is required and not presented in customer data #{$order['reference_id']}");
            return response()->json("The address is required and not presented in customer data #{$order['reference_id']}", status: 402);
        }

        // Check service configuration
        if (!@$order['service_id']) {
            info("The service is required and not presented in data #{$order['reference_id']}");
            return response()->json("The service is required and not presented in data #{$order['reference_id']}", status: 402);
        }

        // Check phone number
        if (!$this->getPhone($order)) {
            info("The recipient phone is required and not presented in data #{$order['reference_id']}");
            return response()->json("The recipient phone is required and not presented in data #{$order['reference_id']}", status: 402);
        }

        return false;
    }

    private function prepareOrderForShipping($order)
    {
        $country = Country::where('external_id', $order['shipping']['country_id'])->first() ?? Country::first();

        info(json_encode($country));

        $mappedZone = Province::where('country_id', $country->id)
            ->where('external_id', $order['shipping']['city_id'])->first()?->id;

        $zone = MappedZone::where('mapped_zone_id', $mappedZone)->where('user_id', $this->setting->user_id)->first();

        if (!isset($zone) || !isset($mappedZone)) {
            throw new Exception('There is no zone mapped for the order: ' . $order['reference_id'] . ' zone');
        }

        $order['zone_id'] = $zone->zone_id;
        $order['subzone_id'] = $zone->subzone_id;
        $order['service_id'] = @$this->setting->service_id;

        return $order;
    }


    /**
     * Redirect to external print URL for a shipment
     * URL Format: ${domain}/waybill/shipment/print/{shipmentId}/{printNumber}?lang={lang}&token={token}
     */
    public function printShipment(Request $request, string $ids)
    {
        $this->session = $request->get('sallaSession');

        /** @var ?Setting */
        $setting = Setting::with('user')->where('session_id', $this->session->id)->first();

        if (!$setting || !$setting->user) {
            return response()->json(['error' => 'Settings not found'], 404);
        }

        $lang = $request->query('lang', 'ar');

        $shipmentIds = array_values(array_filter(array_map(function ($id) {
            $id = trim($id);
            return preg_match('/^\d+$/', $id) ? $id : null;
        }, explode(',', $ids))));

        if (empty($shipmentIds)) {
            return response()->json(['error' => 'No valid shipment ids provided'], 400);
        }

        $idsSegment = implode(',', $shipmentIds);

        // Build base domain without port or trailing /graphql
        $rawDomain = trim((string) $setting->user->domain);
        $base = $this->extractBaseDomain($rawDomain);

        $token = $setting->token;
        $final = rtrim($base, '/') . "/print/waybill/shipment/default/{$idsSegment}?lang=" . urlencode('ar') . "&token=" . urlencode($token);

        return redirect()->away($final);
    }

    private function extractBaseDomain(string $domain): string
    {
        // If no scheme, assume http
        if (!preg_match('#^https?://#i', $domain)) {
            $domain = 'http://' . $domain;
        }

        $parts = parse_url($domain);

        if (!$parts) {
            return $domain;
        }

        $scheme = $parts['scheme'] ?? 'http';
        $host = $parts['host'] ?? '';
        // If domain contained path like /graphql, ignore it
        return $scheme . '://' . $host;
    }
}
