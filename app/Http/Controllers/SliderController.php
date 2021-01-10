<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('layout.marque.marque');
    }
    public function storeSlider(Request $request)
    {

        $title	 = $request->title;
        $etat	 = $request->etat;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images/Slider/'),$imageName);
        $slider = new Slider();
        $slider->title = $title;
        $slider->sliderimage = $imageName;
        $slider->etat= $etat;

        $slider->save();
        return back()->with('student_added','student record ');


    }
    public function Slider()
    {
        $sliders = Slider::paginate(6);
        return view('layout.slider.slider',compact('sliders'));
    }

    public function editSlider($id)
    {
        $slider = Slider::find($id);

        return view('layout.slider.edit-slider',compact('slider'));
    }
    public function deleteSlider(Request $request)
    {

        $sliders =Slider::find($request->sliderId);
        unlink(public_path('images/Slider').'/'.$sliders->sliderimage);
        $sliders->delete();
        toastr()->success('Success Message');

        return  redirect('/Slider-list');
    }
    public function updateSlider(Request $request)
    {

        $title	 = $request->title;
        $etat	 = $request->etat;
        if($request->file('file')){
            $image = $request->file('file');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images/Slider/'),$imageName);
            $slider =Slider::find($request->id);
            $slider->title = $title;
            $slider->etat = $etat;

            $slider->sliderimage = $imageName;
        }else{
            $slider =Slider::find($request->id);
             $slider->title = $title;
            $slider->etat = $etat;

        }



        $slider->save();
        toastr()->success('Success Message');

        return redirect('/Slider-list');

    }
}
