<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Country extends Model
{

    public static function getForDropdown($lang = null)
    {
        $lang = $lang ?: app()->getLocale();

        $nameField = $lang === 'ar' ? 'name_ar' : 'name_en';

        $query = static::select("{$nameField} as name", 'id');

        return $query->orderBy($nameField)
            ->get()
            ->map(function ($country) {
                return [
                    'id' => $country->id,
                    'name' => $country->name
                ];
            });
    }

    public function getProvincesDropdown($lang = null, $countryId = null, int $perPage = 15, int $page = 1)
    {
        $lang = $lang ?: app()->getLocale();
        $nameField = $lang === 'ar' ? 'name_ar' : 'name_en';
        $countryId = $countryId ?: $this->id;

        $query = DB::table('provinces')
            ->select("{$nameField} as name", 'id')
            ->where('country_id', $countryId);

        return $query->orderBy('id')
            ->paginate($perPage, page: $page)
            ->through(function ($province) {
                return [
                    'id' => $province->id,
                    'name' => $province->name
                ];
            });
    }
}
