<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index'); // This points to resources/views/index.blade.php
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/howitworks', function () {
    return view('pages.how-it-works');
})->name('howitworks');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/awards', function () {
    return view('pages.awards');
})->name('awards');

Route::get('/review', function () {
    return view('pages.review');
})->name('review');

Route::get('/location', function () {
    return view('pages.location');
})->name('location');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');