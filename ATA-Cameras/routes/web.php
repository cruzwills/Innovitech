<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('layouts.app');
});
Route::get('partials.header', function () {
    return view('partials.header');
});