<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

Route::get('/produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
});