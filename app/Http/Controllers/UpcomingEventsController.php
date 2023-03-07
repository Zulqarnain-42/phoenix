<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpcomingEventRequest;
use App\Models\UpcomingEvents;
use Illuminate\Support\Facades\Auth;

class UpcomingEventsController extends Controller
{
    public function index()
    {
        return view('backend.events.index');
    }

        public function create()
    {
        return view('backend.events.form');
    }

    public function store(UpcomingEventRequest $request)
    {

        $request->validate([
            'eventimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imagename = $request->file('eventimage')->getClientOriginalName();
        $request->file('eventimage')->store('slider/');

        $newupcomingevents = new UpcomingEvents();

        $newupcomingevents->eventname = $request->eventname;
        $newupcomingevents->address = $request->eventaddress;
        $newupcomingevents->eventimg = $imagename;
        $newupcomingevents->datetime = $request->eventdate;
        $newupcomingevents->status = $request->eventstatus;
        $newupcomingevents->userid = Auth()->user()->id;

        $newupcomingevents->save();

        return redirect()->route('upcomingevents.index');
    }

    public function edit(UpcomingEvents $upcomingevents)
    {
        return view('backend.events.form')->with(compact('upcomingevents'));
    }

    public function update(UpcomingEventRequest $request,UpcomingEvents $upcomingevents)
    {
        $request->validate([

        ]);

        $imagename = $request->file('eventimage')->getClientOriginalName();
        $request->file('eventimage')->store('slider/');

        $upcomingevents->eventname = $request->eventname;
        $upcomingevents->address = $request->eventaddress;
        $upcomingevents->eventimg = $imagename;
        $upcomingevents->datetime = $request->eventdate;
        $upcomingevents->status = $request->eventstatus;
        $upcomingevents->userid = Auth()->user()->id;

        $upcomingevents->update();

        return redirect()->route('upcomingevents.index');
    }

    public function destroy(UpcomingEvents $upcomingevents)
    {
        $res=UpcomingEvents::where('id',$upcomingevents->id)->delete();
        if($res){

        }else{

        }
    }
}
