<?php

namespace App\Http\Controllers;

use App\HomeContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function addHomeContent(){
        return view('admin.home.content.add-home-content');
    }
    public function saveHomeContent(Request $request){
        $this->validate($request,[
            'home_title'=>'required',
            'home_description'=>'required',
            'publication_status'=>'required',
        ]);
        $homeContents = new HomeContent();
        $homeContents->home_title = $request->home_title;
        $homeContents->home_description = $request->home_description;
        $homeContents->publication_status = $request->publication_status;
        $homeContents->save();
        return redirect('home/content/add-content')->with('message','Home Content Added Successfully');

    }
    public function manageHomeContent(){
        $homeContents = HomeContent::orderBy('id','DESC')->get();
        return view('admin.home.content.manage-home-content',['homeContents'=>$homeContents]);
    }
    public function viewHomeContent($id){
        $viewContents = HomeContent::where('id',$id)->first();
        return view('admin.home.content.view-home-content',['viewContent'=>$viewContents]);
    }
    public function publishedHomeContent($id){
        $contentById = HomeContent::find($id);
        $contentById->publication_status=1;
        $contentById->save();
        return redirect('home/content/manage-content')->with('message','Home Content Published Successfully');
    }
    public function unpublishedHomeContent($id){
        $contentById = HomeContent::find($id);
        $contentById->publication_status=0;
        $contentById->save();
        return redirect('home/content/manage-content')->with('message','Home Content Unpublished Successfully');
    }
    public function editHomeContent($id){
        $contentById = HomeContent::find($id);
        return view('admin.home.content.edit-home-content',['contentById'=>$contentById]);
    }
    public function updateHomeContent(Request $request){
        $this->validate($request,[
            'home_title'=>'required',
            'home_description'=>'required',
            'publication_status'=>'required',
        ]);
        $homeContents = HomeContent::find($request->content_id);
        $homeContents->home_title = $request->home_title;
        $homeContents->home_description = $request->home_description;
        $homeContents->publication_status = $request->publication_status;
        $homeContents->save();
        return redirect('home/content/manage-content')->with('message','Home Content Updated Successfully');
    }
    public function deleteHomeContent($id){
        $contentById = HomeContent::find($id);
        $contentById->delete();
        return redirect('home/content/manage-content')->with('message','Home Content Deleted Successfully');

    }
}
