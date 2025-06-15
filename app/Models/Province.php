<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = 
    [
        'name'
    ];

    // relation one to many province to city
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
