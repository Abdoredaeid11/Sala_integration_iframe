<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sessions', function (Blueprint $table) {

            if (!Schema::hasColumn('sessions', 'provider_id')) {
                $table->unsignedBigInteger('provider_id')
                    ->default(0)
                    ->after('merchant');
            }
        });

        Schema::table('sessions', function (Blueprint $table) {

            try {
                $table->dropUnique('sessions_merchant_unique');
            } catch (\Throwable $e) {
                //
            }

            $table->unique(
                ['merchant', 'provider_id'],
                'sessions_merchant_provider_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::table('sessions', function (Blueprint $table) {

            $table->dropUnique('sessions_merchant_provider_unique');

            $table->dropColumn('provider_id');

            $table->unique('merchant');
        });
    }
};
