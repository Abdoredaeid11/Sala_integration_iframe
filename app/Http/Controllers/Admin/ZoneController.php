<?php

namespace App\Http\Controllers\Admin;

use Accurate\Shipping\Client\Client;
use Accurate\Shipping\Enums\Fields\ZoneField;
use Accurate\Shipping\Models\Filters\ListZonesFilter;
use Accurate\Shipping\Services\Zone;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use App\Models\Zone as MappedZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{
    /**
     * get accurate zones or subZones for loggedIn client or selected client
     *
     * @param int|null $zoneId
     * @param int|null $userId
     * @return array
     */
    public function zones($zoneId = null, $userId = null): array
    {
        $user = Auth::user();
        $domain = $user->username == 'admin' ? User::find($userId)->domain : $user->domain;

        try {
            Client::init(
                app()->isProduction() ? "https://" . $domain . ':8443/graphql' : "http://" . $domain . ':8000/graphql',
                ["content-language" => "en"]
            );

            /** @var mixed */
            $response = (new Zone())->listZones(input: new ListZonesFilter(parentId: $zoneId), output: [ZoneField::ID, ZoneField::CODE, ZoneField::NAME]);
        } catch (\Exception $e) {
            info("Error", ['message' => $e->getMessage()]);
            return [];
        }
        return $response->data['data']['listZonesDropdown'];
    }

    public function countries()
    {
        return Country::getForDropdown()->toArray();
    }

    public function provinces($userId = null, int $perPage = 25, int $page = 1)
    {
        $user = Auth::user()->username == 'admin' ? User::find($userId) : Auth::user();

        return $user->country->getProvincesDropdown(perPage: $perPage, page: $page);
    }

    public function mappedZones(Request $request, $userId = null)
    {
        $user = Auth::user()->username == 'admin' ? User::find($userId) : Auth::user();

        if ($user?->username == 'admin' && !$userId) abort(404);
        $userId = $user->id;

        $perPage = (int) $request->input('per_page', 25);
        $page = (int) $request->input('page', 1);

        $accurateZones = $this->zones(userId: $userId);
        $provincesPaginator = $this->provinces(userId: $userId, perPage: $perPage, page: $page);
        $provinces = $provincesPaginator->toArray();
        $mappedZones = MappedZone::where('user_id', $user->id)->get();

        $client = $user;
        return view('admin.client.mapping-zones', compact('provinces', 'provincesPaginator', 'accurateZones', 'mappedZones', 'userId', 'client', 'perPage'));
    }

    public function mappedZonesBulkSave(Request $request, $userId = null)
    {
        $user = Auth::user()->username == 'admin' ? User::find($userId) : Auth::user();

        $data = $request->validate([
            'mappings' => 'required|array',
            'mappings.*.id' => 'required|integer', // Changed from code to id
            'mappings.*.zone_id' => 'nullable|string',
            'mappings.*.subzone_id' => 'nullable|string',
        ]);

        collect($data['mappings'])->map(function ($m) use ($user) {
            $params = [
                'user_id' => $user->id,
                'mapped_zone_id' => $m['id'], // Changed from code to id
                'zone_id' => $m['zone_id'] ?? null,
                'subzone_id' => $m['subzone_id'] ?? null,
            ];

            $mappedZone = MappedZone::where('user_id', $user->id)
                ->where('mapped_zone_id', $m['id'])->first() ?? new MappedZone();

            $mappedZone->forceFill($params)->save();
        });

        return response()->json(['status' => true]);
    }
}
