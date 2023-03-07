<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Services;
use App\Models\UpcomingEvents;
use App\Models\Team;

class HomeController extends Controller
{
    public function home()
    {
        $collectionslider = Slider::Where([['status',true]])->get();
        $collectionservices = Services::where([['status',true]])->get();
        $collectionevents = UpcomingEvents::Where([['status',true]])->get();
        $collectionteam = Team::Where([['status',true]])->get();
        return view('welcome')->with(compact('collectionslider','collectionservices','collectionevents','collectionteam'));
    }

    public function about()
    {
        $collectionteam = Team::Where([['status',true]])->take(4)->get();
        return view('aboutus')->with(compact('collectionteam'));
    }

    public function contact()
    {
        return view('conatctus');
    }

    public function services()
    {
        $collectionservices = Services::where([['status',true]])->get();
        $collectionevents = UpcomingEvents::Where([['status',true]])->get();
        return view('services')->with(compact('collectionservices','collectionevents'));
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
