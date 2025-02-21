<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/syarikat', function () {
    return view('syarikat');
});

