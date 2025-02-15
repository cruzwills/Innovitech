<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index'); // This points to resources/views/index.blade.php
});