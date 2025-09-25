<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    protected $fillable = [
        'flat_number',
        'building_id',
        'building_owner_id',
        'tenant_id',
    ];

    public function building()
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
