<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder forCurrentShop() @param int $sessionId
 */
class Setting extends Model
{
    public $casts = [
        'expired' => 'boolean'
    ];

    const OPENABLE_CODE = [
        'Y' => 'Y',
        'N' => 'N',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function scopeForCurrentShop($query, $sessionId)
    {
        $query->where('session_id', $sessionId);
    }
}
