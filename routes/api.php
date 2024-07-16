<?php

use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

// Salla webhook
Route::post('/webhooks', WebhookController::class)->name('webhook');
