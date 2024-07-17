<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

// Application Salla

Route::get('/', function() {
    return view('settings.redirect');
});

// Salla Auth OAuth routes
Route::get('/oauth/redirect', [OAuthController::class, 'redirect'])->name('oauth.redirect');
Route::get('/oauth/callback', [OAuthController::class, 'callback'])->name('oauth.callback');

// Save Token

Route::get('/settings/token', [SettingController::class, 'index'])->name('settings.token');
Route::post('/settings/token/save', [SettingController::class, 'tokenSettingsSave'])->name('settings.token.save');
Route::get('/shipping/{setting}', DashboardController::class)->name('dashboard');
Route::get('/settings', [SettingController::class, 'settingIndex'])->name('settings');
Route::post('/settings/save', [SettingController::class, 'save'])->name('settings.save');

Route::get('/settings/login', [LoginController::class, 'loginForm'])->name('shipping.login');
Route::post('/settings/login', [LoginController::class, 'login'])->name('settings.login');

// Get Service and Zone and subzones
Route::get('/services/{setting}', ServiceController::class);
Route::get('/zones/get/{serviceId}/{setting}/{parent?}', [ZoneController::class, 'getZones']);

Route::post('shipments/store', [ShipmentController::class, 'store'])->name('shipment.store');




// Adminstration Application for shipping co. -- DONE
Route::group(['prefix' => '/dashboard'], function(){
    Route::get('/login', [DashboardController::class, 'loginView'])->middleware('guest')->name('login');
    Route::post('/login', [DashboardController::class, 'login'])->name('dashboard.login');
    Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function() {
        // Admin (CRUD For Clients)
        Route::middleware('check.role')->group(function () {
            Route::get('/clients', [ClientController::class, 'clients'])->name('clients');
            Route::post('clients/{clientId?}', [ClientController::class, 'store'])->name('clients.store');
            Route::delete('clients/delete/{clientId}', [ClientController::class, 'destroy'])->name('clients.destroy');
        });

        // Mapped Zones with zones and provinces
        Route::get('zones/{zoneId?}/{userId?}', [DashboardController::class, 'zones'])->name('zones.get');
        Route::get('provinces/{userId?}', [DashboardController::class, 'provinces']);
        Route::get('mappedZones/{userId?}', [DashboardController::class, 'mappedZones'])->middleware('auth')->name('mappedZones');
        Route::post('mappedZones/save/{userId?}', [DashboardController::class, 'mappedZonesSave'])->middleware('auth');

        // Edit Profile
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    });
});
