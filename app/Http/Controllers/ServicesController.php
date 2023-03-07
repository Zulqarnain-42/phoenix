<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Http\Requests\ServicesRequest;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    public function index()
    {
        return view('backend.services.index');
    }

    public function create()
    {
        return view('backend.services.form');
    }

    public function store(ServicesRequest $request)
    {

        $request->validate([
            'servicesimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imagename = $request->file('servicesimg')->getClientOriginalName();
        $request->file('servicesimg')->store('slider/');

        $newservice = new Services();

        $newservice->servicename = $request->servicename;
        $newservice->details = $request->servicesdetails;
        $newservice->serviceimg = $imagename;
        $newservice->userid = Auth::id();
        $newservice->status = $request->servicesstatus;

        $newservice->save();

        return redirect()->route('ourservices.index');
    }

    public function edit(Services $services)
    {
        return view('backend.services.form')->with(compact('services'));
    }

    public function update(ServicesRequest $request,Services $services)
    {
        $request->validate([

        ]);

        $imagename = $request->file('servicesimg')->getClientOriginalName();
        $request->file('servicesimg')->store('slider/');
        $services->servicename = $request->servicename;
        $services->details = $request->servicesdetails;
        $services->serviceimg = $imagename;
        $services->status = $request->servicesstatus;

        $services->update();

        return redirect()->route('team.index');
    }

    public function destroy(Services $services)
    {
        $res=Services::where('id',$services->id)->delete();
        if($res){

        }else{

        }
    }
}
