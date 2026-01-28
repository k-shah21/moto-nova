<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});