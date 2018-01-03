<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartmentForm(){
        return view('admin.department.add-department');
    }
    public function saveDepartmentInfo(Request $request){
        $this->validate($request,[
            'department_name'=> 'required',
            'phase_no'=> 'required',
            'publication_status'=> 'required'
        ]);

        $departments = new Department();
        $departments->department_name = $request->department_name;
        $departments->phase_no = $request->phase_no;
        $departments->publication_status = $request->publication_status;
        $departments->save();
        return redirect('department/add-department')->with('message', 'Department Info Added Successfully');
    }
    public function manageDepartmentInfo(){
        $departments = Department::orderBy('id', 'DESC')->get();
        return view('admin.department.manage-department',[ 'departments'=>$departments]);
    }
    public function publishedDepartmentInfo($id){
        $departmentById = Department::find($id);
        $departmentById->publication_status=1;
        $departmentById->save();
        return redirect('department/manage-department')->with('message', 'Department Info Published Successfully');
    }
    public function unpublishedDepartmentInfo($id){
        $departmentById = Department::find($id);
        $departmentById->publication_status=0;
        $departmentById->save();
        return redirect('/department/manage-department')->with('message', 'Department Info Unpublished Successfully');
    }
    public function editDepartmentInfo($id){
        $departmentById = Department::find($id);
        return view('admin.department.edit-department',['department'=>$departmentById]);
    }
    public function updateDepartmentInfo(Request $request){
        $this->validate($request,[
            'department_name'=> 'required',
            'phase_no'=> 'required',
            'publication_status'=> 'required'
        ]);
        $departments = Department::find($request->dept_id);
        $departments->department_name=$request->department_name;
        $departments->phase_no=$request->phase_no;
        $departments->publication_status=$request->publication_status;
        $departments->save();
        return redirect('/department/manage-department')->with('message','Department Info Updated Successfully');
    }
    public function deleteDepartmentInfo($id){
        $departmentById = Department::find($id);
        $departmentById->delete();
        return redirect('/department/manage-department')->with('message','Department Info Deleted Successfully');
    }
}
