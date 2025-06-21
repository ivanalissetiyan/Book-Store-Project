<?php

namespace App\Models;
use Illuminate\Support\Str;
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

    // Confirm Slug
    protected static function boot()
    {
        parent::boot();

        // Generate slug before saving
        static::saving(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }
}
