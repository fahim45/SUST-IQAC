<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Image;

class ActivityController extends Controller
{
    public function addActivityForm(){
        return view('admin.activities.add-activities');
    }

    public function saveActivityInfo(Request $request){
        $this->validate($request,[
            'department_name'=> 'required',
            'activity_title'=> 'required|max:50',
            'activity_place'=> 'required',
            'activity_date'=> 'required|date',
            'activity_description'=> 'required',
            'image'=> 'required'
        ]);

        $activityImage = $request->file('image');
        $imageExtension = $activityImage->getClientOriginalExtension();
        $imageName = time().'.'.$imageExtension;
        $directory = 'activity-images/';
        $imageUrl = $directory.$imageName;
        Image::make($activityImage)->resize(500,350)->save($imageUrl);

        $activities = new Activity();
        $activities->department_name = $request->department_name;
        $activities->activity_title = $request->activity_title;
        $activities->activity_place = $request->activity_place;
        $activities->activity_date = $request->activity_date;
        $activities->activity_description = $request->activity_description;
        $activities->image = $imageUrl;
        $activities->publication_status = $request->publication_status;
        $activities->save();

        return redirect('activities/add-activities')->with('message', 'Activity Info Added Successfully');
    }

    public function manageActivityInfo(){
        $activities = Activity::orderBy('id', 'DESC')->get();
        return view('admin.activities.manage-activities',[
            'activities'=>$activities
        ]);
    }

    public function viewActivityInfo($id){
        $activityById = Activity::where('id', $id)->first();
        return view('admin.activities.view-activities',[
            'activity'=>$activityById
        ]);
    }

    public function publishedActivityInfo($id){
        $activityById = Activity::find($id);
        $activityById->publication_status=1;
        $activityById->save();
        return redirect('/activities/manage-activities')->with('message','Activity Info Published Successfully.');
    }

    public function unpublishedActivityInfo($id){
        $activityById = Activity::find($id);
        $activityById->publication_status=0;
        $activityById->save();
        return redirect('/activities/manage-activities')->with('message','Activity Info Unpublished Successfully.');
    }

    public function editActivityInfo($id){
        $activityById = Activity::find($id);
        return view('admin.activities.edit-activities',[
            'activity'=>$activityById
        ]);
    }

    public function updateActivityInfo(Request $request){
        $this->validate($request,[
            'department_name'=> 'required',
            'activity_title'=> 'required|max:50',
            'activity_place'=> 'required',
            'activity_date'=> 'required|date',
            'activity_description'=> 'required',
            'image'=> 'image'
        ]);

        $imageUrl = $this->imageExistStatus($request);

        $activities = Activity::find($request->activity_id);
        $activities->department_name = $request->department_name;
        $activities->activity_title = $request->activity_title;
        $activities->activity_place = $request->activity_place;
        $activities->activity_date = $request->activity_date;
        $activities->activity_description = $request->activity_description;
        $activities->image = $imageUrl;
        $activities->publication_status = $request->publication_status;
        $activities->save();

        return redirect('activities/manage-activities')->with('message', 'Activity Info Updated Successfully');
    }

    private function imageExistStatus($request){
        $activity = Activity::where('id', $request->activity_id)->first();
        $activityImage = $request->file('image');
        if ($activityImage){
            @unlink($activity->image);

            $imageExtension = $activityImage->getClientOriginalExtension();
            $imageName = time().'.'.$imageExtension;
            $directory= 'activity-images/';
            $imageUrl= $directory.$imageName;
            Image::make($activityImage)->resize(500,350)->save($imageUrl);

        } else {
            $imageUrl = $activity->image;
        }
        return $imageUrl;

    }

    public function deleteActivityInfo($id){
        $activityById = Activity::find($id);
        @unlink($activityById->image);
        $activityById->delete();
        return redirect('/activities/manage-activities')->with('message', 'Activity Info Deleted Successfully.');
    }
}
