<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('aboutus');
    }

    public function contact()
    {
        return view('conatctus');
    }

    public function services()
    {
        return view('services');
    }

    public function terms()
    {
        return view('termsofuse');
    }

    public function privacy()
    {
        return view('privacypolicy');
    }
}
