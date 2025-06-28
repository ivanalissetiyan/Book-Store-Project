<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;

// Route Register
Route::get('/register', Auth\Register::class)->name('register');

// Route Login
Route::get('/login', Auth\Login::class)->name('login');