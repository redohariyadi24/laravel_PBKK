<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini akan dimuat oleh RouteServiceProvider dalam sebuah grup yang
| berisi middleware grup "web". Sekarang buatlah sesuatu yang hebat!
|
*/

Route::get('/', function () {
    return view('welcome'); // Mengembalikan view 'welcome' saat URL root ('/') diakses.
});

Route::get('/home', function () {
    return view('home'); // Mengembalikan view 'home' saat URL '/home' diakses.
});

Route::get('/login', function () {
    return view('login'); // Mengembalikan view 'login' saat URL '/login' diakses.
});

Route::get('/registration', function () {
    return view('registration'); // Mengembalikan view 'registration' saat URL '/registration' diakses.
});