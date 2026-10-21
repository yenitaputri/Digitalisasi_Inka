
<?php

use Illuminate\Support\Facades\Route;

// Halaman utama Digitalisasi HSE INKA
Route::get('/', function () {
    return view('auth.login');
})->name('home');

// Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/', function () {
    return view('landingpage.index');
})->name('home');

