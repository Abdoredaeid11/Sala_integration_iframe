<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    function province()
    {
        return $this->belongsTo(Province::class, 'mapped_zone_id', 'id');
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
