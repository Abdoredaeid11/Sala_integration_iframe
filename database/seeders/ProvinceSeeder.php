<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('provinces')->truncate();
        DB::table('provinces')->insert([
            [
                'id' => 1,
                'country_id' => 1,
                'external_id' => 'RD',
                'name_ar' => 'منطقة الرياض',
                'name_en' => 'Riyadh',
            ],
            [
                'id' => 2,
                'country_id' => 1,
                'external_id' => 'NG',
                'name_ar' => 'منطقة نجران',
                'name_en' => 'Najran',
            ],
            [
                'id' => 3,
                'country_id' => 1,
                'external_id' => 'MQ',
                'name_ar' => 'منطقة مكة المكرمة',
                'name_en' => 'Makkah',
            ],
            [
                'id' => 4,
                'country_id' => 1,
                'external_id' => 'MN',
                'name_ar' => 'منطقة المدينة المنورة',
                'name_en' => 'Madinah',
            ],
            [
                'id' => 5,
                'country_id' => 1,
                'external_id' => 'SQ',
                'name_ar' => 'المنطقة الشرقية',
                'name_en' => 'Eastern Province',
            ],
            [
                'id' => 6,
                'country_id' => 1,
                'external_id' => 'QA',
                'name_ar' => 'منطقة القصيم',
                'name_en' => 'Qassim',
            ],
            [
                'id' => 7,
                'country_id' => 1,
                'external_id' => 'HA',
                'name_ar' => 'منطقة حائل',
                'name_en' => 'Hail',
            ],
            [
                'id' => 8,
                'country_id' => 1,
                'external_id' => 'TB',
                'name_ar' => 'منطقة تبوك',
                'name_en' => 'Tabuk',
            ],
            [
                'id' => 9,
                'country_id' => 1,
                'external_id' => 'SH',
                'name_ar' => 'منطقة الحدود الشمالية',
                'name_en' => 'Northern Borders',
            ],
            [
                'id' => 10,
                'country_id' => 1,
                'external_id' => 'GO',
                'name_ar' => 'منطقة الجوف',
                'name_en' => 'Al Jawf',
            ],
            [
                'id' => 11,
                'country_id' => 1,
                'external_id' => 'GA',
                'name_ar' => 'منطقة جازان',
                'name_en' => 'Jazan',
            ],
            [
                'id' => 12,
                'country_id' => 1,
                'external_id' => 'AS',
                'name_ar' => 'منطقة عسير',
                'name_en' => 'Aseer',
            ],
            [
                'id' => 13,
                'country_id' => 1,
                'external_id' => 'BA',
                'name_ar' => 'منطقة الباحة',
                'name_en' => 'Al Baha',
            ],
        ]);
    }
}
