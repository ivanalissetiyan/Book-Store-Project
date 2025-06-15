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

    // relation one to many transaction to transaction detail
    public function TransactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    // relation one to many transaction to shipping
    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }

    // relation one to many transaction to customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // relation one to many transaction to province
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    // relation one to many transaction to city
     public function city()
    {
        return $this->belongsTo(City::class);
    }
}
