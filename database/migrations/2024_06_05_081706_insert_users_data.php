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
        $sql = 'INSERT INTO users (id, name, username, password, domain, country_code, created_at) VALUES(1, "Admin" ,"admin", "$2y$10$ussR0xSVl8rYip/TKa.fIud/nM9KcCdZmwciyE.xAnKLKZk/kWb4a", "192.168.1.100", "SA", "2024-6-5 08:07:53")';

        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
