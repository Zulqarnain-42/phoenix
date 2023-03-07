<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\TeamMemberRequest;

class TeamMemberController extends Controller
{
    public function index()
    {
        return view('backend.team.index');
    }

    public function create()
    {
        return view('backend.team.form');
    }

    public function store(TeamMemberRequest $request)
    {
        $request->validate([
            'userimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imagename = $request->file('userimage')->getClientOriginalName();
        $request->file('userimage')->store('slider/');

        $newtem = new Team();

        $newtem->username = $request->fullname;
        $newtem->designation = $request->designation;
        $newtem->userimage = $imagename;
        $newtem->details = $request->details;
        $newtem->twitterlink = $request->twitterlink;
        $newtem->facebooklink = $request->facebooklink;
        $newtem->linkedinlink = $request->linkedinlink;
        $newtem->instagramlink = $request->instagramlink;
        $newtem->userid = Auth()->user()->id;
        $newtem->status = $request->memberstatus;

        $newtem->save();

        return redirect()->route('team.index');
    }

    public function edit(Team $team)
    {
        return view('backend.team.form')->with(compact('team'));
    }

    public function update(TeamMemberRequest $request,Team $team)
    {
        $request->validate([

        ]);

        $team->fullname = $request->fullname;
        $team->designation = $request->designation;
        $team->userimage = $request->userimage;
        $team->details = $request->details;
        $team->twitterlink = $request->twitterlink;
        $team->facebooklink = $request->facebooklink;
        $team->linkedinlink = $request->linkedinlink;
        $team->instagramlink = $request->instagramlink;
        $team->userid = Auth()->user()->id;
        $team->status = $request->status;

        $team->update();

        return redirect()->route('team.index');
    }

    public function destroy(Team $team)
    {
        $res = Team::where('id',$team->id)->delete();
        if($res){

        }
        else
        {

        }
    }
}
