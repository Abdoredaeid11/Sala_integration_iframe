<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 *@method static Builder fulfilled()
 */
class Shipment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }

    public function scopeFulfilled($query)
    {
        return $query->whereNotNull('code');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
