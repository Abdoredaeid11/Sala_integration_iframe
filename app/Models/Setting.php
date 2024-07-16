<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Setting extends Model
{
    use HasFactory;

    public $casts = [
        'expired' => 'boolean'
    ];

    public function token()
    {
        return $this->hasOne(OauthToken::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipments(): ?HasMany
    {
        return $this->hasMany(Shipment::class);
    }
}
