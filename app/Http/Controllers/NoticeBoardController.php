<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    public function addNoticeBoardForm(){
        return view('admin.notice-board.add-notice');
    }

    public function saveNoticeBoardInfo(Request $request){
        $this->validate($request,[
            'notice_title'=> 'required',
            'notice_description'=> 'required'
        ]);

        $notices = new Notice();
        $notices->notice_title = $request->notice_title;
        $notices->notice_description = $request->notice_description;
        $notices->publication_status = $request->publication_status;
        $notices->save();

        return redirect('notice-board/add-notice-board')->with('message', 'Notice Info Added Successfully');
    }

    public function manageNoticeBoardInfo(){
        $notices = Notice::orderBy('id', 'DESC')->get();
        return view('admin.notice-board.manage-notice',[
            'notices'=>$notices
        ]);
    }

    public function viewNoticeBoardInfo($id){
        $noticeById = Notice::where('id', $id)->first();
        return view('admin.notice-board.view-notice',[
            'notice'=>$noticeById
        ]);
    }

    public function publishedNoticeBoardInfo($id){
        $noticeById = Notice::find($id);
        $noticeById->publication_status=1;
        $noticeById->save();
        return redirect('/notice-board/manage-notice-board')->with('message','Notice Info Published Successfully.');
    }

    public function unpublishedNoticeBoardInfo($id){
        $noticeById = Notice::find($id);
        $noticeById->publication_status=0;
        $noticeById->save();
        return redirect('/notice-board/manage-notice-board')->with('message','Notice Info Unpublished Successfully.');
    }

    public function editNoticeBoardInfo($id){
        $noticeById = Notice::find($id);
        return view('admin.notice-board.edit-notice',[
            'notice'=>$noticeById
        ]);
    }

    public function updateNoticeBoardInfo(Request $request){
        $this->validate($request,[
            'notice_title'=> 'required',
            'notice_description'=> 'required'
        ]);

        $notice = Notice::find($request->notice_id);
        $notice->notice_title = $request->notice_title;
        $notice->notice_description = $request->notice_description;
        $notice->publication_status = $request->publication_status;
        $notice->save();

        return redirect('notice-board/manage-notice-board')->with('message', 'Notice Info Updated Successfully');
    }

    public function deleteNoticeBoardInfo($id){
        $noticeById = Notice::find($id);
        $noticeById->delete();
        return redirect('/notice-board/manage-notice-board')->with('message', 'Notice Info Deleted Successfully.');
    }
}
