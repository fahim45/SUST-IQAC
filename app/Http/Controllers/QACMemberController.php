<?php

namespace App\Http\Controllers;

use App\QACMember;
use Illuminate\Http\Request;
use Image;
class QACMemberController extends Controller
{
    public function addQACMemberForm(){
        return view('admin.committee.qac.add-qac-member');
    }
    public function saveQACMemberInfo(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'designation'=>'required',
            'office_address'=>'required',
            'mobile_no'=>'required',
            'email'=>'required|email',
            //'details_link'=>'required',
            'picture'=>'required|image',
            'publication_status'=>'required'
        ]);

        $QACPhoto = $request->file('picture');
        $imageExtension =$QACPhoto->getClientOriginalExtension();
        $imageName = $request->name.'.'.$imageExtension;
        $directory = 'qac-images/';
        $imageUrl = $directory.$imageName;
        Image::make($QACPhoto)->resize(300,300)->save($imageUrl);

        $qacMembers = new QACMember();
        $qacMembers->name = $request->name;
        $qacMembers->designation = $request->designation;
        $qacMembers->office_address = $request->office_address;
        $qacMembers->mobile_no = $request->mobile_no;
        $qacMembers->email = $request->email;
        $qacMembers->details_link = $request->details_link;
        $qacMembers->picture = $imageUrl;
        $qacMembers->publication_status = $request->publication_status;
        $qacMembers->save();

        return redirect('committee/qac/add-qac-member')->with('message', 'QAC Member Info Added Successfully');
    }

    public function manageQACMemberInfo(){
        $qacMembers = QACMember::orderBy('id','DESC')->get();
        return view('admin.committee.qac.manage-qac-member',['qacMembers'=>$qacMembers]);
    }

    public function publishedQACMemberInfo($id){
        $publishedById = QACMember::find($id);
        $publishedById->publication_status = 1;
        $publishedById->save();
        return redirect('committee/qac/manage-qac-member')->with('message', 'QAC Member Info Published Successfully');
    }

    public function unpublishedQACMemberInfo($id){
        $unpublishedById = QACMember::find($id);
        $unpublishedById->publication_status = 0;
        $unpublishedById->save();
        return redirect('committee/qac/manage-qac-member')->with('message', 'QAC Member Info Unpublished Successfully');
    }

    public function editQACMemberInfo($id){
        $qacMemberById = QACMember::find($id);
        return view('admin.committee.qac.edit-qac-member',['qacMember'=>$qacMemberById]);
    }

    public function updateQACMemberInfo(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'designation'=>'required',
            'office_address'=>'required',
            'mobile_no'=>'required',
            'email'=>'required|email',
            //'details_link'=>'required',
            'picture'=>'image',
            'publication_status'=>'required'
        ]);
        $imageUrl = $this->imageExistStatus($request);

        $qacMemberInfo = QACMember::find($request->qac_id);
        $qacMemberInfo->name = $request->name;
        $qacMemberInfo->designation = $request->designation;
        $qacMemberInfo->office_address = $request->office_address;
        $qacMemberInfo->mobile_no = $request->mobile_no;
        $qacMemberInfo->email = $request->email;
        $qacMemberInfo->details_link = $request->details_link;
        $qacMemberInfo->picture = $imageUrl;
        $qacMemberInfo->publication_status = $request->publication_status;
        $qacMemberInfo->save();

        return redirect('committee/qac/manage-qac-member')->with('message', 'QAC Member Info Updated Successfully');
    }

    private function imageExistStatus($request){
        $qacMemberInfo = QACMember::where('id', $request->qac_id)->first();
        $qacImage = $request->file('picture');
        if ($qacImage){
            @unlink($qacMemberInfo->picture);

            $imageExtension = $qacImage->getClientOriginalExtension();
            $imageName = $request->name.'.'.$imageExtension;
            $directory= 'qac-images/';
            $imageUrl= $directory.$imageName;
            Image::make($qacImage)->resize(300,300)->save($imageUrl);

        } else {
            $imageUrl = $qacMemberInfo->picture;
        }
        return $imageUrl;

    }

    public function deleteQACMemberInfo($id){
        $qacMemberById = QACMember::find($id);
        @unlink($qacMemberById->picture);
        $qacMemberById->delete();
        return redirect('committee/qac/manage-qac-member')->with('message', 'QAC Member Info Deleted Successfully');
    }
}
