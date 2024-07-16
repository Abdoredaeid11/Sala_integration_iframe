<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use GuzzleHttp\Psr7\Request;
use App\Services\SallaAuthService;
use Accurate\Shipping\Client\Client;
use GuzzleHttp\Client as GuzzleClient;
use Accurate\Shipping\Enums\Fields\ShipmentField;
use Accurate\Shipping\Models\Filters\ShipmentById;
use Accurate\Shipping\Enums\Fields\Core\DropDownField;
use Accurate\Shipping\Services\Shipment as ServicesShipment;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

use Accurate\Shipping\Enums\Fields\ZoneField;
use Accurate\Shipping\Services\Zone as ServicesZone;
use Accurate\Shipping\Models\Filters\ListZonesFilter;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Setting;

class DashboardController extends Controller
{
    /**
     * @var SallaAuthService
     */
    private $salla;

    /**
     * Create a new controller instance.
     *1
     * @return void
     */
    public function __construct(SallaAuthService $salla)
    {
        $this->salla = $salla;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse
     * @throws IdentityProviderException
     */
    public function __invoke(Setting $setting)
    {
        if(is_null($setting->accurate_token)) {
            return redirect(route('shipping.login'));
        }
        // ddd($settingId);
        // $setting = Setting::where('merchant', session('merchant'))->first();
        $this->updateAllShipments($setting);
        $this->updateStatus($setting);

        $store = null;

        if ($setting?->token) {

            $this->salla->forUser($setting);

            // you need always to check the token before made a request
            // If the token expired, lets request a new one and save it to the database
            try {
                $this->salla->getNewAccessToken();
            } catch (IdentityProviderException $exception) {
                return redirect()->route('oauth.redirect');
            }

            $store = $this->salla->getStoreDetail();

            $shipments = $setting->shipments;
        }

        return view('dashboard.index', [
            'setting' => $setting,
            'shipments' => @$shipments ?? [],
            'store'     => $store,
            // 'zones' => $zones,
        ]);
    }

    public function updateAllShipments($setting)
    {
        $shipments = Shipment::whereNull('setting_id')->where('merchant', $setting->merchant)->get();

        foreach(@$shipments as $shipment){
            $shipment->update([
                'setting_id' => $setting->id,
            ]);
        }
    }

    public function updateStatus($setting)
    {
        if(count($setting?->shipments ?? []) > 0) {
            $shipments = Shipment::where('setting_id', $setting->id)->fulfilled()->get();
            Client::init(
                config('app.env') != 'production' ? "http://" . $setting->user->domain . ':8000/graphql' : "https://" . $setting->user->domain . ':8001/graphql',
                [
                    'Authorization' => "Bearer " . $setting->accurate_token,
                ]
            );
            foreach($shipments as $shipment){
                $response = (new ServicesShipment)->shipment(new ShipmentById(code: $shipment->code),
                [
                    ShipmentField::status([
                        DropDownField::NAME,
                        DropDownField::CODE,
                    ])
                ]);
                $status = @$response->original['data']['shipment']['status'];
                if(isset($status) && ! is_null($status)){
                    if($status !== $shipment->status){
                        $shipment->update([
                            'status' => $status['name'],
                        ]);
                        $slug = "";
                        if($status['code'] == "PKR"){
                            $slug = "under_review";
                        }
                        if($status['code'] == "PKM"){
                            $slug = "in_progress";
                        }
                        if($status['code'] == "PKD"){
                            $slug = "completed";
                        }
                        if($status['code'] == "OTD"){
                            $slug = "delivering";
                        }
                        if($status['code'] == "DTR"){
                            $slug = "delivered";
                        }
                        if($status['code'] == "RITS" || $status['code'] == "PRPD"){
                            $slug = "shipped";
                        }
                        if($status['code'] == "RJCT"){
                            $slug = "canceled";
                        }
                        if($status['code'] == "RTRN"){
                            $slug = "restored";
                        }
                        if($status['code'] == "OTR"){
                            $slug = "restoring";
                        }
                        $client = new GuzzleClient();
                        $headers = [
                            'User-Agent' => 'Apidog/1.0.0 (https://apidog.com)',
                            'Authorization' => "Bearer " . $setting->token->access_token,
                            'Content-Type' => 'application/json'
                        ];
                        $body = json_encode([ 'slug' => $slug ]);
                        $request = new Request('POST', 'https://api.salla.dev/admin/v2/orders/' . $shipment->order_id . '/status', $headers, $body);
                        $res = $client->sendAsync($request)->wait();
                    }
                }
            }
        }
    }

    // public function saveZones(HttpRequest $request)
    // {
    //     $request->validate([
    //         'zones' => 'json|required',
    //         'page'  => 'numeric|required|max:60',
    //     ]);
    //     $zones = json_decode($request->zones);
    //     foreach($zones as $zone){
    //         $this->saveEachZone($zone);
    //     }
    //     return redirect(url('/dashboard/mapping?page=' . $request->page + 1));
    // }

    // public function saveEachZone($args)
    // {
    //     $zone = Zone::where('integration_zone_id', $args->integrationZoneId)->first() ?? new Zone();

    //     $zone->forceFill([
    //         'integration_zone_id'   => $args->integrationZoneId,
    //         'integration_zone_name' => $args->integrationZoneName,
    //         'zone_id'               => $args->zoneId,
    //         'sub_zone_id'           => $args->subZoneId,
    //     ])->save();

    //     collect(auth()->user()->shipments->where('city_id', $zone->integration_zone_id)->all())->each(function($shipment) use($zone) {
    //         $shipment->update([
    //             'zone_id' => $zone->id,
    //         ]);
    //     });
    // }


    // Administrative Operations

    public function loginView()
    {
        return view('dashboard.login');
    }

    public function login(HttpRequest $request)
    {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required',
        ]);
        if(Auth::attempt($request->only(['username', 'password']))){
            $user = User::where('username', $request->username)->first();
            Auth::login($user);
            return redirect(route(auth()->user()->is_admin ? 'clients' : 'mappedZones', auth()->user()->is_admin ? null : $user->id));
        }
        return back()->withInput(['username'])->withErrors(['msg' => 'Invalid Credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }


    /**
     * get accurate zones or subzones for logedin client or selected client
     *
     * @param int|null $zoneId
     * @param int|null $userId
     * @return array
     */
    public function zones($zoneId = null, $userId = null): array
    {
        $user = auth()->user();
        $domain = $user->username == 'admin' ? User::find($userId)->domain : $user->domain;
        Client::init(config('app.env') != 'production' ? "http://" . $domain . ':8000/graphql' : "https://" . $domain . ':8001/graphql');

        try {
            /** @var mixed */
            $response = (new ServicesZone())->listZones(input: new ListZonesFilter(parentId: $zoneId), output: [ZoneField::ID, ZoneField::CODE, ZoneField::NAME]);
            return $response->original['data']['listZonesDropdown'];
        } catch (\Throwable $e) {
            info("There is an error here DashboardController->zones:" . $e->getMessage());
            return [];
        }
    }

    /**
     * get Salla zones for logedin client or selected client
     *
     * @param int|null $userId
     * @return paginator
     */
    public function provinces($userId = null)
    {
        $user = auth()->user()->username == 'admin' ? User::find($userId) : auth()->user();

        return Province::whereHas('country', fn ($q) => $q->where('code', $user->country_code))->paginate(15);
    }

    public function mappedZones($userId = null)
    {
        $user = auth()->user()->username == 'admin' ? User::find($userId) : auth()->user();

        if ($user->username == 'admin' && !$userId) abort(404);

        if (!$user->is_admin && $user->id != $userId) abort(403);

        $userId = $user->id;

        $accurateZones = $this->zones(userId: $userId);
        $provinces = $this->provinces(userId: $userId);
        $mappedZones = Zone::where('user_id', $user->id)->get();

        return view('dashboard.mapping', compact('provinces', 'accurateZones', 'mappedZones', 'userId'));
    }

    public function mappedZonesSave(HttpRequest $request, $userId = null)
    {
        $user = auth()->user()->username == 'admin' ? User::find($userId) : auth()->user();
        $provinces = Province::whereHas('country', fn ($q) => $q->where('code', $user->country_code))->get();

        foreach ($provinces as $province) {
            $mappedZoneId = $province->id;
            $zoneId = $request->input("province{$mappedZoneId}_accurateZones");
            $subzoneId = $request->input("province{$mappedZoneId}_accurateSubzones");
            if(!is_null($zoneId) && !is_null($subzoneId)){
                $mappedZone = Zone::where([
                    'user_id' => $userId ?? $user->id,
                    'mapped_zone_id' => $mappedZoneId,
                ])->first();

                if (!$mappedZone) {
                    $mappedZone = new Zone();
                    $mappedZone->forceFill([
                        'user_id' =>  $user->id,
                        'mapped_zone_id' => $mappedZoneId,
                    ]);
                }
                $mappedZone->zone_id = $zoneId;
                $mappedZone->subzone_id = $subzoneId;
                $mappedZone->save();
            }

        }

        return redirect()->back()->with('success', 'Mapped zones updated successfully.');
    }
}
