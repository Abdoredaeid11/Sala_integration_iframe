<?php

use App\Http\Controllers\Salla\WebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/{provider}/webhooks', WebhookController::class)->name('webhook');
