<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index'); // This points to resources/views/index.blade.php
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/index', function () {
    return view('pages.index');
})->name('index');
Route::get('/review', function () {
    return view('pages.review');
})->name('review');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/servicessingle', function () {
    return view('pages.servicessingle');
})->name('servicessingle');