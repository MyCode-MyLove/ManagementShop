<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bookdetail', function () {
    return view('bookdetail');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/banner', function () {
    return view('banner');
});
