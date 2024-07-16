<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unique();
            $table->string('shipment_id')->nullable();
            $table->string('code')->nullable();
            $table->string('tracking_url')->nullable();
            $table->float('weight');
            $table->string('status')->nullable();
            $table->integer('total');
            $table->string('address');
            $table->string('name');
            $table->string('phone');
            $table->foreignId('setting_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('merchant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
