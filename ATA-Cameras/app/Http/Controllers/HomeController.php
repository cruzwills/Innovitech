<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function app()
    {
        return view('layouts.app'); // This returns the home.blade.php view
    }

    public function header()
    {
        return view('partials.header'); // This returns the home.blade.php view
    }
   
}

