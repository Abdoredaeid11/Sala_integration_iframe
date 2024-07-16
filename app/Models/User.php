<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $admins = ['admin'];

    protected $guarded = ['id'];

    protected $hidden = ['password'];

    public function getIsAdminAttribute()
    {
        return in_array($this->username, $this->admins);
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_code', 'code');
    }

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}
