<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Download;
use App\Event;
use App\ExecutiveStaff;
use App\Notice;
use App\OfficeStaff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Mapper;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        //return $events;
        $activities = Activity::where('publication_status', 1)->limit(3)->get();
        $notices = Notice::where('publication_status', 1)->limit(4)->get();
        return view('front.home.home-content',[
            'events'=>$events,
            'activities'=>$activities,
            'notices'=>$notices
        ]);
    }
    public function noticeBoard($id){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        $notices = Notice::where('id', $id)->first();
        return view('front.notice.notice',[
            'events'=>$events,
            'noticeDetails'=>$notices
        ]);
    }
    public function sacMembers(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        return view('front.sac.sac-members',[
            'events'=>$events
        ]);
    }
    public function qacMembers(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        return view('front.qac.qac-members',[
            'events'=>$events
        ]);
    }
    public function iqacEventList(){
        $activities = Activity::where('publication_status', 1)->limit(3)->get();
        return view('front.iqac-event.iqac-event-list',[
            'activities'=>$activities
        ]);
    }
    public function poeEventList(){
        $activities = Activity::where('publication_status', 1)->limit(3)->get();
        return view('front.poe-event.poe-event-list',[
            'activities'=>$activities
        ]);
    }
    public function recentActivities(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        return view('front.activities.recent-activities',[
            'events'=>$events
        ]);
    }
    public function gallery(){
        return view('front.gallery.gallery');
    }
    public function executiveStaff(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        $executiveStaffs = ExecutiveStaff::where('publication_status', '1')->get();
        return view('front.staff.executive-staff',[
            'events'=>$events,
            'executiveStaffs'=>$executiveStaffs
        ]);
    }
    public function officeStaff(){
        $officeStaffs = OfficeStaff::where('publication_status', '1')->get();
        return view('front.staff.office-staff',[
            'officeStaffs'=>$officeStaffs
        ]);
    }
    public function manual(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        $files = DB::table('downloads')
            ->where('publication_status', 1)
            ->where('file_type', 1)
            ->orderBY('id', 'DESC')
            ->limit(15)
            ->get();
        return view('front.download.manual',[
            'events'=>$events,
            'files'=>$files
        ]);
    }
    public function documents(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        $files = DB::table('downloads')
            ->where('publication_status', 1)
            ->where('file_type', 2)
            ->orderBY('id', 'DESC')
            ->limit(15)
            ->get();
        return view('front.download.documents',[
            'events'=>$events,
            'files'=>$files
        ]);
    }
    public function contact(){
        Mapper::map(24.919952, 91.831642, ['zoom' => 16, 'markers' => ['title' => 'IQAC-SUST Location', 'animation' => 'DROP'], 'clusters' => ['size' => 10, 'center' => true, 'zoom' => 20]]);
        return view('front.contact.contact');
    }
    public function sendMail(Request $request){
        $this->validate($request, [
            'first_name'=>'required|max:30',
            'last_name'=>'required|max:30',
            'email_address'=>'required|email|max:30',
            'message'=>'required|max:1000'
        ]);

        $data = [
            'full_name' => $request->first_name.' '.$request->last_name,
            'email' => $request->email_address,
            'subject' => 'IQAC Message',
            'bodyMessage' => $request->message
        ];

        Mail::send('front.contact.email', $data, function ($message) use ($data){
            $message->from($data['email']);
            $message->to('iqac-off@sust.edu');
            $message->subject($data['subject']);
        });

        return redirect()->back()->with('success','Congratulation! Email has been send successfully.');

    }
    public function ourMission(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        return view('front.about-us.our-mission',[
            'events'=>$events
        ]);
    }
    public function ourVision(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        return view('front.about-us.our-vision',[
            'events'=>$events
        ]);
    }
    public function ourObjectives(){
        $events = Event::where('publication_status', 1)->limit(3)->get();
        return view('front.about-us.our-objectives',[
            'events'=>$events
        ]);
    }

}
