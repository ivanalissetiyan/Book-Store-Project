<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = 
    [
        'category_id',
        'image',
        'title',
        'slug',
        'description',
        'price',
        'weight'
    ];

    // relation many to many product to categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relation one to many product to rating
     public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
