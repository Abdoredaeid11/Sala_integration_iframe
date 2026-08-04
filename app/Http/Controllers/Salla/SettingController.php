<?php

namespace App\Http\Controllers\Salla;

use Accurate\Shipping\Client\Client;
use Accurate\Shipping\Enums\Fields\ServiceField;
use Accurate\Shipping\Enums\Fields\ShipmentField;
use Accurate\Shipping\Enums\Fields\ZoneField;
use Accurate\Shipping\Models\Filters\ListShipmentFilter;
use Accurate\Shipping\Models\Filters\ListZonesFilter;
use Accurate\Shipping\Services\Service;
use Accurate\Shipping\Services\Shipment;
use Accurate\Shipping\Services\Zone;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    public function listUsers()
    {
        $users = User::where('username', '!=', 'admin')->get();
        return response()->json($users);
    }

    public function index(Request $request)
    {
        try {
            $session = $request->get('sallaSession');

            if (!$session) {
                return response()->json(['setting' => null]);
            }

            $setting = Setting::where('merchant', $session->merchant)->where('provider_id', $session->provider_id)->where('provider_id', $session->provider_id)->first();

            return response()->json(['setting' => $setting]);
        } catch (\Exception $e) {
            Log::error('Settings fetch error: ' . $e->getMessage());
            return response()->json(['setting' => null]);
        }
    }

    public function validateToken(Request $request)
    {
        try {
            $session = $request->get('sallaSession');

            if (!$session) {
                return response()->json([
                    'valid' => false,
                    'message' => 'No valid Salla session'
                ], 401);
            }

            $validated = $request->validate([
                'token' => ['required', 'string'],
            ]);

            $user = User::find($session->provider_id);

            if (!$user) {
                return response()->json([
                    'valid' => false,
                    'message' => 'Provider not found'
                ], 400);
            }

            $url = app()->isProduction()
                ? "https://" . $user->domain . ':8443/graphql'
                : "http://" . $user->domain . ':8000/graphql';

            Client::init(
                $url,
                [
                    'Authorization' => "Bearer " . $validated['token'],
                    'content-language' => App::getLocale()
                ]
            );

            $response = (new Shipment())->listShipments(
                new ListShipmentFilter(),
                [ShipmentField::ID]
            );

            if (isset($response->data['data'])) {
                return response()->json([
                    'valid' => true,
                    'message' => 'Token is valid'
                ]);
            }

            return response()->json([
                'valid' => false,
                'message' => 'Token is invalid'
            ], 401);
        } catch (\Exception $e) {
            Log::error('Token validation error: ' . $e->getMessage());

            return response()->json([
                'valid' => false,
                'message' => 'Token validation failed: ' . $e->getMessage()
            ], 401);
        }
    }

    /**
     * Save credentials only
     */
    public function saveCredentials(Request $request)
    {
        try {
            $session = $request->get('sallaSession');

            Log::info('Salla Session Debug', [
                'session_exists' => !is_null($session),
                'session_data' => $session ? (array) $session : null,
            ]);

            if (!$session) {
                Log::error('No session found');
                return response()->json(['error' => 'No valid session found'], 401);
            }

            $validated = $request->validate([
                'token' => ['required', 'string'],
            ]);

            $session = $request->get('sallaSession');

            $user = User::find($session->provider_id);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Provider not found'
                ], 400);
            }



            $url = app()->isProduction()
                ? "https://" . $user->domain . ':8443/graphql'
                : "http://" . $user->domain . ':8000/graphql';

            // Validate token with Accurate Me API
            Client::init(
                $url,
                [
                    'Authorization' => "Bearer " . $validated['token'],
                    'content-language' => App::getLocale()
                ]
            );

            // Try to fetch shipments as a test query to validate token
            $response = (new Shipment())->listShipments(new ListShipmentFilter(), [ShipmentField::ID]);

            if (!isset($response->data['data'])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token validation failed'
                ], 401);
            }

            $existingSetting = Setting::where('merchant', $session->merchant)->where('provider_id', $session->provider_id)->first();
            $setting = $existingSetting ?? new Setting();

            // Check if credentials changed - if so, reset operation fields
            $credentialsChanged = !$existingSetting ||
                $existingSetting->token != $validated['token'];

            $params = [
                'user_id' => $session->provider_id,
                'provider_id' => $session->provider_id,
                'token' => $validated['token'],
                'expired' => false,
                'merchant' => $session->merchant,
            ];

            // Reset operation fields if credentials changed
            if ($credentialsChanged) {
                $params['service_id'] = null;
                $params['from_zone_id'] = null;
                $params['from_subzone_id'] = null;
                $params['openable_code'] = 'N';
            }

            $setting->forceFill($params);
            $setting->save();
            $setting->refresh();

            return response()->json([
                'success' => true,
                'message' => 'Credentials saved successfully!',
                'setting' => $setting,
                'credentials_changed' => $credentialsChanged
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error:', $e->errors());
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Save credentials error:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Token validation failed: ' . $e->getMessage()
            ], 401);
        }
    }

    /**
     * Save operation settings only
     */
    public function saveOperation(Request $request)
    {
        try {
            $session = $request->get('sallaSession');

            if (!$session) {
                Log::error('No session found');
                return response()->json(['error' => 'No valid session found'], 401);
            }

            $validated = $request->validate([
                'service_id' => ['required'],
                'from_zone_id' => ['required'],
                'from_subzone_id' => ['required'],
                'openable_code' => ['required', 'in:Y,N'],
            ]);

            $setting = Setting::where('merchant', $session->merchant)->where('user_id', $session->provider_id)->first();

            if (!$setting || !$setting->user_id || !$setting->token) {
                return response()->json([
                    'success' => false,
                    'message' => 'Credentials must be saved first'
                ], 400);
            }

            $params = [
                'service_id' => $validated['service_id'],
                'from_zone_id' => $validated['from_zone_id'],
                'from_subzone_id' => $validated['from_subzone_id'],
                'openable_code' => Setting::OPENABLE_CODE[$validated['openable_code']] ?? $validated['openable_code'],
            ];

            $setting->forceFill($params);
            $setting->save();
            $setting->refresh();

            return response()->json([
                'success' => true,
                'message' => 'Operation settings saved successfully!',
                'setting' => $setting
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error:', $e->errors());
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Save operation error:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to save operation settings: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Save settings - With extensive debugging
     */
    public function save(Request $request)
    {
        try {
            $session = $request->get('sallaSession');

            if (!$session) {
                Log::error('No session found');
                return response()->json(['error' => 'No valid session found'], 401);
            }

            $validated = $request->validate([
                'token' => ['required', 'string'],
                'service_id' => ['nullable'],
                'from_zone_id' => ['nullable'],
                'from_subzone_id' => ['nullable'],
                'openable_code' => ['required', 'in:Y,N'],
            ]);

            $existingSetting = Setting::where('merchant', $session->merchant)->where('provider_id', $session->provider_id)->first();
            $setting = $existingSetting ?? new Setting();

            // Check if credentials changed - if so, reset operation fields
            $credentialsChanged = !$existingSetting ||
                $existingSetting->token != $validated['token'];

            $params = [
                'merchant' => $session->merchant,
                'user_id' => $session->provider_id,
                'provider_id' => $session->provider_id,
                'token' => $validated['token'],
                'expired' => false,
            ];

            // Reset operation fields if credentials changed
            if ($credentialsChanged) {
                $params['service_id'] = null;
                $params['from_zone_id'] = null;
                $params['from_subzone_id'] = null;
                $params['openable_code'] = 'N';
            } else {
                // Use provided values if credentials didn't change
                $params['service_id'] = $validated['service_id'] ?? null;
                $params['from_zone_id'] = $validated['from_zone_id'] ?? null;
                $params['from_subzone_id'] = $validated['from_subzone_id'] ?? null;
                $params['openable_code'] = Setting::OPENABLE_CODE[$validated['openable_code']] ?? $validated['openable_code'];
            }

            $setting->forceFill($params);
            $setting->save();
            $setting->refresh();
            return response()->json([
                'success' => true,
                'message' => 'Settings saved successfully!',
                'setting' => $setting,
                'debug' => [
                    'merchant' => $session->merchant,
                    'saved' => true,
                    'setting_id' => $setting->id
                ]
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error:', $e->errors());
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Save error:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to save settings: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get services - Initialize client first
     */
    public function services(Request $request)
    {
        try {
            $userId = $request->query('user_id');
            $token = $request->query('token');

            if (!$userId || !$token) {
                // Fallback to session-based approach for backward compatibility
                $session = $request->get('sallaSession');
                $setting = Setting::where('merchant', $session->merchant)->where('provider_id', $session->provider_id)->first();

                if (!$setting || !$setting->user_id || !$setting->token) {
                    return response()->json([]);
                }

                $userId = $setting->user_id;
                $token = $setting->token;
            }

            $user = User::find($userId);
            if (!$user) {
                return response()->json([]);
            }

            $url = app()->isProduction()
                ? "https://" . $user->domain . ':8443/graphql'
                : "http://" . $user->domain . ':8000/graphql';

            // Initialize client with credentials
            Client::init(
                $url,
                [
                    'Authorization' => "Bearer " . $token,
                    'content-language' => App::getLocale()
                ]
            );

            $response = (new Service())->listServices([ServiceField::ID, ServiceField::CODE, ServiceField::NAME]);

            $services = $response->data['data']['listShippingServicesDropdown'] ?? [];

            return response()->json($services);
        } catch (\Exception $e) {
            Log::error('Services fetch error: ' . $e->getMessage());
            return response()->json([]);
        }
    }

    /**
     * Get zones - Initialize client first
     */
    public function zones(Request $request, $id = null)
    {
        try {
            $userId = $request->query('user_id');
            $token = $request->query('token');

            if (!$userId || !$token) {
                // Fallback to session-based approach for backward compatibility
                $session = $request->get('sallaSession');
                $setting = Setting::where('merchant', $session->merchant)->where('provider_id', $session->provider_id)->first();

                if (!$setting || !$setting->token || !$setting->user_id) {
                    return response()->json([]);
                }

                $userId = $setting->user_id;
                $token = $setting->token;
            }

            $user = User::find($userId);
            if (!$user) {
                return response()->json([]);
            }

            $url = app()->isProduction()
                ? "https://" . $user->domain . ':8443/graphql'
                : "http://" . $user->domain . ':8000/graphql';

            // Initialize client with credentials
            Client::init(
                $url,
                [
                    'Authorization' => "Bearer " . $token,
                    'content-language' => App::getLocale()
                ]
            );

            $filter = new ListZonesFilter(parentId: $id);
            $response = (new Zone())->listZones(
                input: $filter,
                output: [ZoneField::ID, ZoneField::CODE, ZoneField::NAME]
            );

            if (isset($response->data['data']['message'])) {
                return response()->json([]);
            }

            $zones = $response->data['data']['listZonesDropdown'] ?? [];
            return response()->json($zones);
        } catch (\Exception $e) {
            Log::error('Zones fetch error: ' . $e->getMessage());
            return response()->json([]);
        }
    }
}
