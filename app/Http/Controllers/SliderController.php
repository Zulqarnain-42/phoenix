<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    public function index()
    {
        return view('backend.slider.index');
    }

    public function create()
    {
        return view('backend.slider.form');
    }

    public function store(SliderRequest $request)
    {

        $request->validate([
            'sliderimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imagename = $request->file('sliderimage')->getClientOriginalName();
        $request->file('sliderimage')->store('slider/');

        $newslider = new Slider();

        $newslider->slidertext1 = $request->slidertext;
        $newslider->slidertext2 = $request->slidertext2;
        $newslider->sliderimg = $imagename;
        $newslider->status = $request->status;
        $newslider->userid = Auth()->user()->id;
        $newslider->save();

        return redirect()->route('slider.index');
    }

    public function edit(Slider $slider)
    {
        return view('backend.slider.form')->with(compact('slider'));
    }

    public function update(SliderRequest $request,Slider $slider)
    {
        $request->validate([

        ]);

        $slider->slidertext1 = $request->slidertext;
        $slider->slidertext2 = $request->slidertext2;
        $slider->sliderimg = $request->img;
        $slider->status = $request->status;
        $slider->userid = Auth()->user()->id;

        $slider->update();

        return redirect()->route('team.index');
    }

    public function destroy(Slider $slider)
    {
        $res=Slider::where('id',$slider->id)->delete();
        if($res){

        }else{

        }
    }
}
