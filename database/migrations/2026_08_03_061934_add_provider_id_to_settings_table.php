<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {

            if (!Schema::hasColumn('settings', 'provider_id')) {
                $table->unsignedBigInteger('provider_id')
                    ->default(0)
                    ->after('merchant');
            }

            $table->unique(
                ['merchant', 'provider_id'],
                'settings_merchant_provider_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {

            $table->dropUnique('settings_merchant_provider_unique');

            $table->dropColumn('provider_id');
        });
    }
};
