<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shipments', function (Blueprint $table) {

            if (!Schema::hasColumn('shipments', 'provider_id')) {
                $table->unsignedBigInteger('provider_id')
                    ->default(0)
                    ->after('merchant');
            }
        });

        Schema::table('shipments', function (Blueprint $table) {

            $table->unique(
                ['merchant', 'provider_id', 'order_id'],
                'shipments_merchant_provider_order_unique'
            );

            $table->unique(
                ['merchant', 'provider_id', 'shipment_id'],
                'shipments_merchant_provider_shipment_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::table('shipments', function (Blueprint $table) {

            $table->dropUnique(
                'shipments_merchant_provider_order_unique'
            );

            $table->dropUnique(
                'shipments_merchant_provider_shipment_unique'
            );

            $table->dropColumn('provider_id');
        });
    }
};
