<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder forCurrentShop() @param int $merchant
 */
class OauthToken extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function hasExpired()
    {
        return now()->timestamp > $this->expires_in;
    }

    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }

    function scopeForCurrentShop($query, $merchant)
    {
        $query->where('merchant', $merchant);
    }
}
