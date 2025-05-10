<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route ke halaman about
Route::get('/about', function () {
    return view('about');
});