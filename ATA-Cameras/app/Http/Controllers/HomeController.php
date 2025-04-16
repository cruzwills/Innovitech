<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function app()
    {
        return view('layouts.app'); // This returns the home.blade.php view
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function index()
    {
        return view('pages.index');
    }
    public function howitworks()
    {
        return view('pages.how-it-works');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
    public function awards()
    {
        return view('pages.awards');
    }
    public function review()
    {
        return view('pages.review');
    }
    public function location()
    {
        return view('pages.location');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function industries()
    {
        return view('pages.industries');
    }
    public function industriessingle()
    {
        return view('pages.industriessingle');
    }
    public function servicessingle()
    {
        return view('pages.servicessingle');
    }
  
  
  
   

}

