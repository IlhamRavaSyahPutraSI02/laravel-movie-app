<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/movies', function () {
    return view('movies/index');
});

Route::get('/genre', function () {
    return view('genre/index');
});

Route::get('/review', function () {
    return view('review/index');
});

// Route::get('/si02', function () {
//     return "belajar laravel";
// });
