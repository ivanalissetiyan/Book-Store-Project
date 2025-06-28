<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = 
    [
        'image', 
        'name', 
        'email', 
        'password'
    ];

    protected $hidden = [
        'password',
    ];
}
