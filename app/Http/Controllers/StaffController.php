<?php

namespace App\Http\Controllers;

use App\ExecutiveStaff;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StaffController extends Controller
{
    public function addExecutiveStaffForm(){
        return view('admin.staff.executive.add-executive-staff');
    }
    public function saveExecutiveStaffInfo(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'designation'=>'required',
            'office_address'=>'required',
            'mobile_no'=>'required|regex:/(01)[5-9][0-9]{8}/',
            'email'=>'required|email',
            //'details_link'=>'required',
            'picture'=>'required|image',
            'publication_status'=>'required'
        ]);

        $profilePhoto = $request->file('picture');
        $imageExtension =$profilePhoto->getClientOriginalExtension();
        $imageName = $request->name.'.'.$imageExtension;
        $directory = 'staff-images/';
        $imageUrl = $directory.$imageName;
        Image::make($profilePhoto)->save($imageUrl);

        $executiveStaff = new ExecutiveStaff();
        $executiveStaff->name = $request->name;
        $executiveStaff->designation = $request->designation;
        $executiveStaff->office_address = $request->office_address;
        $executiveStaff->mobile_no = $request->mobile_no;
        $executiveStaff->email = $request->email;
        $executiveStaff->details_link = $request->details_link;
        $executiveStaff->picture = $imageUrl;
        $executiveStaff->publication_status = $request->publication_status;
        $executiveStaff->save();

        return redirect('staff/executive/add-executive-staff')->with('message', 'Executive Staffs Info Added Successfully');
    }
}
