<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('users')->where('username', 'admin')->first())
            DB::table('users')->insert([
                'name'              => 'Admin',
                'username'          => 'admin',
                'password'          => '$2y$12$PXa3etZfiXnadvlvQ0E5qOjSIlyfl1/5CCgNVOAIbgyHrDWCDhsmu',
                'domain'            => 'accurate.lg.accuratess.com',
                'country_id'        => 1,
                'active'            => 1,
                'created_at'        => '2024-06-11 09:58:15',
                'updated_at'        => '2025-09-06 14:29:45',
            ]);
    }
}

