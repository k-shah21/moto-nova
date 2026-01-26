<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});