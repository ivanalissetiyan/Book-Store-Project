<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = 
    [
        'customer_id',
        'province_id',
        'city_id',
        'invoice',
        'weight',
        'address',
        'total',
        'status',
        'snap_token',
    ];
}
