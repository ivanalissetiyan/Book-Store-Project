<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = 
    [
        'image', 
        'name', 
        'slug'
    ];

    // Relation one to many categories to product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
