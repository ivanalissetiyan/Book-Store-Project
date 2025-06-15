<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = 
    [
        'customer_id', 
        'product_id', 
        'qty'
    ];

    // relation one to many cart to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // relation one to many cart to customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
