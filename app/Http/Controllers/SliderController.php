<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSliderInfo(){
        return view('admin.home.slider.add-slider');
    }
    public function saveSliderInfo(Request $request){
        
    }
    public function manageSliderInfo(){}
    public function viewSliderInfo($id){}
    public function publishedSliderInfo($id){}
    public function unpublishedSliderInfo($id){}
    public function editSliderInfo($id){}
    public function updateSliderInfo(){}
    public function deleteSliderInfo($id){}
}
