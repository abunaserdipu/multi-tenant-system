<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'month',
        'category',
        'amount',
        'status',
        'optional_note',
        'tenant_id',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function month()
    {
        return $this->belongsTo(Month::class, 'month');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
