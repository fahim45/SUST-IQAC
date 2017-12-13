<?php

namespace App\Http\Controllers;

use App\ExecutiveStaff;
use App\OfficeStaff;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StaffController extends Controller
{
    /************************************* FOR OFFICE STAFF***********************************/

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

    public function manageExecutiveStaffInfo(){
        $executiveStaffs = ExecutiveStaff::orderBy('id','DESC')->get();
        return view('admin.staff.executive.manage-executive-staff',['executiveStaffs'=>$executiveStaffs]);
    }

    public function publishedExecutiveStaffInfo($id){
        $publishedById = ExecutiveStaff::find($id);
        $publishedById->publication_status = 1;
        $publishedById->save();
        return redirect('staff/executive/manage-executive-staff')->with('message', 'Executive Staffs Info Published Successfully');
    }

    public function unpublishedExecutiveStaffInfo($id){
        $unpublishedById = ExecutiveStaff::find($id);
        $unpublishedById->publication_status = 0;
        $unpublishedById->save();
        return redirect('staff/executive/manage-executive-staff')->with('message', 'Executive Staffs Info Unpublished Successfully');
    }

    public function editExecutiveStaffInfo($id){
        $exeStaffById = ExecutiveStaff::find($id);
        return view('admin.staff.executive.edit-executive-staff',['exeStaffById'=>$exeStaffById]);
    }

    public function updateExecutiveStaffInfo(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'designation'=>'required',
            'office_address'=>'required',
            'mobile_no'=>'required|regex:/(01)[5-9][0-9]{8}/',
            'email'=>'required|email',
            //'details_link'=>'required',
            'picture'=>'image',
            'publication_status'=>'required'
        ]);
        $imageUrl = $this->imageExistStatus($request);

        $executiveStaff = ExecutiveStaff::find($request->executive_id);
        $executiveStaff->name = $request->name;
        $executiveStaff->designation = $request->designation;
        $executiveStaff->office_address = $request->office_address;
        $executiveStaff->mobile_no = $request->mobile_no;
        $executiveStaff->email = $request->email;
        $executiveStaff->details_link = $request->details_link;
        $executiveStaff->picture = $imageUrl;
        $executiveStaff->publication_status = $request->publication_status;
        $executiveStaff->save();

        return redirect('staff/executive/manage-executive-staff')->with('message', 'Executive Staffs Info Updated Successfully');
    }

    private function imageExistStatus($request){
        $executiveStaff = ExecutiveStaff::where('id', $request->executive_id)->first();
        $executiveImage = $request->file('picture');
        if ($executiveImage){
            @unlink($executiveStaff->picture);

            $imageExtension = $executiveImage->getClientOriginalExtension();
            $imageName = $request->name.'.'.$imageExtension;
            $directory= 'staff-images/';
            $imageUrl= $directory.$imageName;
            Image::make($executiveImage)->save($imageUrl);

        } else {
            $imageUrl = $executiveStaff->picture;
        }
        return $imageUrl;

    }

    public function deleteExecutiveStaffInfo($id){
        $exeStaffById = ExecutiveStaff::find($id);
        @unlink($exeStaffById->picture);
        $exeStaffById->delete();
        return redirect('staff/executive/manage-executive-staff')->with('message', 'Executive Staffs Info Deleted Successfully');
    }



    /************************************* FOR OFFICE STAFF***********************************/

    public function addOfficeStaffForm(){
        return view('admin.staff.office.add-office-staff');
    }

    public function saveOfficeStaffInfo(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'designation'=>'required',
            'office_address'=>'required',
            'mobile_no'=>'required|regex:/(01)[5-9][0-9]{8}/',
            'email'=>'required|email',
            'picture'=>'required|image',
            'publication_status'=>'required'
        ]);

        $profilePhoto = $request->file('picture');
        $imageExtension =$profilePhoto->getClientOriginalExtension();
        $imageName = $request->name.'.'.$imageExtension;
        $directory = 'staff-images/';
        $imageUrl = $directory.$imageName;
        Image::make($profilePhoto)->save($imageUrl);

        $officeStaff = new OfficeStaff();
        $officeStaff->name = $request->name;
        $officeStaff->designation = $request->designation;
        $officeStaff->office_address = $request->office_address;
        $officeStaff->mobile_no = $request->mobile_no;
        $officeStaff->email = $request->email;
        $officeStaff->picture = $imageUrl;
        $officeStaff->publication_status = $request->publication_status;
        $officeStaff->save();

        return redirect('staff/office/add-office-staff')->with('message', 'Office Staffs Info Added Successfully');
    }

    public function manageOfficeStaffInfo(){
        $officeStaffs = OfficeStaff::orderBy('id','DESC')->get();
        return view('admin.staff.office.manage-office-staff',['officeStaffs'=>$officeStaffs]);
    }

    public function publishedOfficeStaffInfo($id){
        $publishedById = OfficeStaff::find($id);
        $publishedById->publication_status = 1;
        $publishedById->save();
        return redirect('staff/office/manage-office-staff')->with('message', 'Office Staffs Info Published Successfully');
    }

    public function unpublishedOfficeStaffInfo($id){
        $unpublishedById = OfficeStaff::find($id);
        $unpublishedById->publication_status = 0;
        $unpublishedById->save();
        return redirect('staff/office/manage-office-staff')->with('message', 'Office Staffs Info Unpublished Successfully');
    }

    public function editOfficeStaffInfo($id){
        $offStaffById = OfficeStaff::find($id);
        return view('admin.staff.office.edit-office-staff',['offStaffById'=>$offStaffById]);
    }

    public function updateOfficeStaffInfo(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'designation'=>'required',
            'office_address'=>'required',
            'mobile_no'=>'required|regex:/(01)[5-9][0-9]{8}/',
            'email'=>'required|email',
            'picture'=>'image',
            'publication_status'=>'required'
        ]);
        $officeImageUrl = $this->imageExistStatusForOfficeStaffs($request);

        $executiveStaff = OfficeStaff::find($request->office_id);
        $executiveStaff->name = $request->name;
        $executiveStaff->designation = $request->designation;
        $executiveStaff->office_address = $request->office_address;
        $executiveStaff->mobile_no = $request->mobile_no;
        $executiveStaff->email = $request->email;
        $executiveStaff->picture = $officeImageUrl;
        $executiveStaff->publication_status = $request->publication_status;
        $executiveStaff->save();

        return redirect('staff/office/manage-office-staff')->with('message', 'Office Staffs Info Updated Successfully');
    }

    private function imageExistStatusForOfficeStaffs($request){
        $officeStaff = OfficeStaff::where('id', $request->office_id)->first();
        //return $officeStaff;
        $officeStaffImage = $request->file('picture');
        if ($officeStaffImage){
            @unlink($officeStaff->picture);

            $imageExtension = $officeStaffImage->getClientOriginalExtension();
            $imageName = $request->name.'.'.$imageExtension;
            $directory= 'staff-images/';
            $officeImageUrl= $directory.$imageName;
            Image::make($officeStaffImage)->save($officeImageUrl);

        } else {
            $officeImageUrl = $officeStaff->picture;
        }
        return $officeImageUrl;

    }

    public function deleteOfficeStaffInfo($id){
        $offStaffById = OfficeStaff::find($id);
        @unlink($offStaffById->picture);
        $offStaffById->delete();
        return redirect('staff/office/manage-office-staff')->with('message', 'Office Staffs Info Deleted Successfully');
    }
}
