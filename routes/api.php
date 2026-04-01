<?php

use App\Http\Controllers\Salla\WebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/webhooks', WebhookController::class)->name('webhook');
