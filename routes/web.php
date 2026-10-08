<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel dari nim 1234567890';
});

Route::get('/profile', function () {
    return view('pages.profile');
});
    
Route::get('/home', function () {
    return 'Selamat Pagi Dunia, 707082400116';
});

