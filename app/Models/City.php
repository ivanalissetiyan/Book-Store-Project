<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = 
    [
        'name', 
        'province_id'
    ];

    // relation one to many city to province
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
