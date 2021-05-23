<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('admin.slider', compact('sliders'));
    }

    public function store(Request $request){
        $request->validate([
            'title'       =>'required',
            'subTitle'    =>'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }
        $slider = new Slider;
        $slider-> titleSlider   = request('title');
        $slider-> subTitle      = request('subTitle');
        $slider-> image         = $imageName;
        $slider->save();
        return back()->with('success', 'created successfully.');
    }


    // Edit Slider
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.editSlider', compact('slider'));
    }


    // update Slider
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       =>'required',
            'subTitle'    =>'required',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $sliderImage = Slider::find($id);
            $imageName   = $sliderImage->image;
        }

        $slider = Slider::find($id);
        $slider->titleSlider   = $request->get('title');
        $slider->subTitle = $request->get('subTitle');
        $slider->image         = $imageName;
        $slider->save();
        
        return redirect('admin/slider')->with('success', 'Slider Updated!');
    }


    // Delete Slider
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return back()->with('success', 'Slider Deleted!');
    }

}
