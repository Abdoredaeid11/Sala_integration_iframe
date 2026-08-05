<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ZoneController;
use App\Http\Controllers\Salla\SessionController;
use App\Http\Controllers\Salla\SettingController;
use App\Http\Controllers\Salla\ShippingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Salla Auth OAuth routes
Route::get('/{provider}/oauth/redirect', [SessionController::class, 'redirect'])->name('oauth.redirect');
Route::get('/{provider}/oauth/callback', [SessionController::class, 'callback'])->name('oauth.callback');

Route::middleware('salla.auth',)
    ->get('/', function () {
        return view('layouts.salla');
    })->name('home');


// API routes with proper session handling
Route::middleware(['salla.auth',])->prefix('api')->name('api.')->group(function () {
    // Settings API Routes
    Route::get('/users', [SettingController::class, 'listUsers'])->name('users');
    Route::get('/setting/get', [SettingController::class, 'index'])->name('settings.get');
    Route::post('/setting/validate-token', [SettingController::class, 'validateToken'])->name('settings.validate-token');
    Route::post('/setting/save-credentials', [SettingController::class, 'saveCredentials'])->name('settings.save-credentials');
    Route::post('/setting/save-operation', [SettingController::class, 'saveOperation'])->name('settings.save-operation');
    Route::post('/setting/save', [SettingController::class, 'save'])->name('settings.save'); // Keep for backward compatibility
    Route::get('/setting/services', [SettingController::class, 'services'])->name('settings.services');
    Route::get('/setting/zones/{id?}', [SettingController::class, 'zones'])->name('settings.zones');

    // Shipping API Routes
    Route::get('/orders/list', [ShippingController::class, 'listOrders'])->name('orders.list');
    Route::post('/shipping/send', [ShippingController::class, 'sendOrders'])->name('shipping.send');
    Route::get('/shipments/{ids}/print', [ShippingController::class, 'printShipment'])->name('shipments.print');
});


// Administration Application for shipping co. -- DONE
Route::prefix('dashboard')
    ->group(function () {
        Route::middleware('guest')
            ->group(function () {
                Route::get('/login', [AuthController::class, 'create'])->name('login');
                Route::post('/login', [AuthController::class, 'store'])->name('login.store');
            });

        Route::middleware('auth')->group(function () {
            Route::get('/', fn() => redirect(Auth::user()->username == 'admin' ? '/dashboard/clients' : '/dashboard/mappedZones'));
            Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

            Route::get('/profile/edit', [UserController::class, 'edit'])->name('profile.edit');
            Route::post('/profile/edit', [UserController::class, 'update'])->name('profile.update');

            // Admin (CRUD For Clients)
            Route::middleware('check.role')
                ->group(function () {
                    Route::get('/clients', [ClientController::class, 'clients'])->name('clients.get');
                    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
                    Route::put('/clients/{clientId}', [ClientController::class, 'update'])->name('clients.update');
                    Route::delete('/clients/delete/{clientId}', [ClientController::class, 'destroy'])->name('clients.destroy');
                });

            Route::get('/countries', [ZoneController::class, 'countries'])->name('countries');
            Route::get('provinces/{userId?}', [ZoneController::class, 'provinces']);

            // Zone routes with proper constraints
            Route::get('/zones/{userId}', [ZoneController::class, 'zones'])
                ->where('userId', '[0-9]+')->name('zones.top-level');
            Route::get('/zones/{zoneId}/{userId}', [ZoneController::class, 'zones'])
                ->where(['zoneId' => '[0-9]+', 'userId' => '[0-9]+'])->name('zones.subzones');

            // Mapping routes
            Route::get('/mappedZones/{userId?}', [ZoneController::class, 'mappedZones'])
                ->where('userId', '[0-9]+')->name('mappedZones.index');

            Route::post('/mappedZones/bulk-save/{userId?}', [ZoneController::class, 'mappedZonesBulkSave'])
                ->where('userId', '[0-9]+')->name('mappedZones.bulk-save');
        });
    });
