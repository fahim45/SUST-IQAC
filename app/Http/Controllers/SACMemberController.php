<?php

namespace App\Http\Controllers;

use App\Department;
use App\SACMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SACMemberController extends Controller
{
    public function addSACMemberForm(){
        $departments = Department::where('publication_status',1)->get();
        return view('admin.committee.sac.add-sac-member',['departments'=>$departments]);
    }
    public function saveSACMemberInfo(Request $request){
        $this->validate($request,[
            'phase_no'=>'required',
            'department_name'=>'required',
            'sac_one_name'=>'required',
            'sac_one_role'=>'required',
            'sac_one_mobile'=>'required|numeric',
            'sac_one_email'=>'required|email',
            'sac_two_name'=>'required',
            'sac_two_role'=>'required',
            'sac_two_mobile'=>'required|numeric',
            'sac_two_email'=>'required|email',
            'sac_three_name'=>'required',
            'sac_three_role'=>'required',
            'sac_three_mobile'=>'required|numeric',
            'sac_three_email'=>'required|email',
            'publication_status'=>'required'
        ]);
        $sacMembers = new SACMember();
        $sacMembers->phase_no = $request->phase_no;
        $sacMembers->department_name = $request->department_name;
        $sacMembers->sac_one_name = $request->sac_one_name;
        $sacMembers->sac_one_role = $request->sac_one_role;
        $sacMembers->sac_one_mobile = $request->sac_one_mobile;
        $sacMembers->sac_one_email = $request->sac_one_email;
        $sacMembers->sac_two_name = $request->sac_two_name;
        $sacMembers->sac_two_role = $request->sac_two_role;
        $sacMembers->sac_two_mobile = $request->sac_two_mobile;
        $sacMembers->sac_two_email = $request->sac_two_email;
        $sacMembers->sac_three_name = $request->sac_three_name;
        $sacMembers->sac_three_role = $request->sac_three_role;
        $sacMembers->sac_three_mobile = $request->sac_three_mobile;
        $sacMembers->sac_three_email = $request->sac_three_email;
        $sacMembers->publication_status = $request->publication_status;
        $sacMembers->save();
        return redirect('committee/sac/add-sac-member')->with('message', 'SAC Members Info Added Successfully');
    }
    public function manageSACMemberInfo(){
        $sacMembers = DB::table('s_a_c_members')
            ->join('departments', 's_a_c_members.id', '=', 'departments.id')
            ->select('s_a_c_members.id','s_a_c_members.phase_no','s_a_c_members.publication_status', 'departments.department_name')
            ->get();
        //return $sacMembers->all();
        return view('admin.committee.sac.manage-sac-member',[
            'sacMembers'=>$sacMembers
        ]);
    }
    public function viewSACMemberInfo($id){
        $sacMembers = DB::table('s_a_c_members')
            ->join('departments', 's_a_c_members.id', '=', 'departments.id')
            ->select('s_a_c_members.*', 'departments.department_name')
            ->where('s_a_c_members.id', $id)
            ->first();
        //return $sacMembers->all();
        return view('admin.committee.sac.view-sac-member',[
            'sacMembers'=>$sacMembers
        ]);
    }
    public function publishedSACMemberInfo($id){
        $membersById = SACMember::find($id);
        $membersById->publication_status=1;
        $membersById->save();
        return redirect('committee/sac/manage-sac-member')->with('message', 'SAC Members Info Published Successfully');
    }
    public function unpublishedSACMemberInfo($id){
        $membersById = SACMember::find($id);
        $membersById->publication_status=0;
        $membersById->save();
        return redirect('committee/sac/manage-sac-member')->with('message', 'SAC Members Info Unpublished Successfully');
    }
    public function editSACMemberInfo($id){
        $membersById =DB::table('s_a_c_members')
            ->join('departments','s_a_c_members.department_name','=','departments.id')
            ->select('s_a_c_members.*','departments.department_name')
            ->where('s_a_c_members.id','=', $id)
            ->first();
        $departments = Department::where('publication_status',1)->get();
        //$membersById = SACMember::find($id);
        //return dd($membersById);
        return view('admin.committee.sac.edit-sac-member',['departments'=>$departments, 'membersById'=>$membersById]);
    }
    public function updateSACMemberInfo(){

    }
    public function deleteSACMemberInfo($id){
        $membersById = SACMember::find($id);
        $membersById->delete();
        return redirect('/committee/sac/manage-sac-member')->with('message', 'SAC Members Info Deleted Successfully');
    }
}
