<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')
            ->insert([
                'id' => 1,
                'name_ar' => 'السعودية',
                'name_en' => 'Saudi Arabia',
                'external_id' => '1473353380',
            ]);
    }
}
