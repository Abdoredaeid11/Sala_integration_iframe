<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('shipments', function (Blueprint $table) {
            $table->renameColumn('session_id', 'merchant');
        });

        DB::statement('update shipments s set merchant = (select merchant from sessions s2 where s2.id = s.merchant );');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipments', function (Blueprint $table) {
            $table->renameColumn('merchant', 'session_id');
        });

        DB::statement('update shipments s set session_id = (select id from sessions s2 where s2.merchant = s.session_id );');
    }
};
