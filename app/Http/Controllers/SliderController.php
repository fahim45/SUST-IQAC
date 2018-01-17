<?php

namespace App\Http\Controllers;

use App\SliderPhoto;
use Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSliderInfo(){
        return view('admin.home.slider.add-slider');
    }
    public function saveSliderInfo(Request $request){
        $this->validate($request,[
            'photo_title'=>'required',
            'slider_photo'=>'required|image',
            'publication_status'=>'required'
        ]);
        $sliderImage = $request->file('slider_photo');
        $imageExtension = $sliderImage->getClientOriginalExtension();
        $imageName = time().'.'.$imageExtension;
        $directory = 'slider-images/';
        $imageUrl = $directory.$imageName;
        Image::make($sliderImage)->resize(815, 400)->save($imageUrl);

        $sliders = new SliderPhoto();
        $sliders->photo_title = $request->photo_title;
        $sliders->slider_photo = $imageUrl;
        $sliders->publication_status = $request->publication_status;
        $sliders->save();

        return redirect('/home/slider/add-slider')->with('message', 'Slider Image Added Successfully');
    }
    public function manageSliderInfo(){
        $sliders = SliderPhoto::orderBy('id', 'DESC')->get();
        return view('admin.home.slider.manage-slider',['sliders'=>$sliders]);
    }
    public function viewSliderInfo($id){}
    public function publishedSliderInfo($id){
        $sliderById = SliderPhoto::find($id);
        $sliderById->publication_status=1;
        $sliderById->save();
        return redirect('/home/slider/manage-slider')->with('message','Slider Info Published Successfully.');
    }
    public function unpublishedSliderInfo($id){
        $sliderById = SliderPhoto::find($id);
        $sliderById->publication_status=0;
        $sliderById->save();
        return redirect('/home/slider/manage-slider')->with('message','Slider Info Unpublished Successfully.');
    }
    public function editSliderInfo($id){
        $sliderById = SliderPhoto::find($id);
        return view('admin.home.slider.edit-slider',['slider'=>$sliderById]);
    }
    public function updateSliderInfo(Request $request){
        $this->validate($request,[
            'photo_title'=>'required',
            'slider_photo'=>'image',
            'publication_status'=>'required'
        ]);

        $imageUrl = $this->imageExistStatus($request);
        //return $imageUrl;

        $sliders = SliderPhoto::find($request->slider_id);
        $sliders->photo_title = $request->photo_title;
        $sliders->slider_photo = $imageUrl;
        $sliders->publication_status = $request->publication_status;
        $sliders->save();

        return redirect('/home/slider/manage-slider')->with('message', 'Slider Info Updated Successfully');
    }
    private function imageExistStatus($request){
        $slider = SliderPhoto::where('id', $request->slider_id)->first();
        $sliderImage = $request->file('slider_photo');

        if ($sliderImage){
            @unlink($slider->slider_photo);

            $imageExtension = $sliderImage->getClientOriginalExtension();
            $imageName = time().'.'.$imageExtension;
            $directory = 'slider-images/';
            $imageUrl = $directory.$imageName;
            Image::make($sliderImage)->resize(815, 400)->save($imageUrl);
        } else{
            $imageUrl = $slider->slider_photo;
        }
        return $imageUrl;
    }
    public function deleteSliderInfo($id){
        $sliderById = SliderPhoto::find($id);
        @unlink($sliderById->slider_photo);
        $sliderById->delete();
        return redirect('/home/slider/manage-slider')->with('message', 'Slider Image Deleted Successfully.');
    }
}
