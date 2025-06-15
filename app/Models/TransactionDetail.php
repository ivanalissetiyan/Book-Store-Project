<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = 
    [
        'transaction_id',
        'product_id',
        'qty',
        'price',
    ];

    // relation one to many transaction detail to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
