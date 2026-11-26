<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/adopsi', [PetController::class, 'index'])
    ->name('adoption');

Route::get('/adopsi/{pet}', [PetController::class, 'show'])
    ->name('pet.detail');

Route::view('/layanan', 'pages.services')
    ->name('services');

Route::view('/tentang', 'pages.about')
    ->name('about');

Route::view('/login', 'auth.login')
    ->name('login');

Route::view('/register', 'auth.register')
    ->name('register');
