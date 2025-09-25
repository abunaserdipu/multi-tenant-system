<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name',
        'contact',
        'email',
        'flat_id',
    ];

    public function flat()
    {
        return $this->belongsTo(Flat::class, 'flat_id');
    }

    public function bills()
    {
        return $this->hasMany(Bill::class, 'tenant_id');
    }
}
