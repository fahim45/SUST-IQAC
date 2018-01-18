<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Download;
use App\Event;
use App\ExecutiveStaff;
use App\Gallery;
use App\HomeContent;
use App\Notice;
use App\OfficeStaff;
use App\QACMember;
use App\SACMember;
use App\SliderPhoto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Mapper;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $sliders= SliderPhoto::where('publication_status', 1)->limit(5)->orderBy('id', 'DESC')->get();
        $contents = HomeContent::where('publication_status', 1)->orderBy('id', 'DESC')->get();
        $activities = Activity::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $notices = Notice::where('publication_status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('front.home.home-content',[
            'sliders'=>$sliders,
            'contents'=>$contents,
            'events'=>$events,
            'activities'=>$activities,
            'notices'=>$notices,
            'galleries'=>$galleries
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
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $sacOneMembers = DB::table('s_a_c_members')
            ->join('departments', 's_a_c_members.department_id','=','departments.id')
            ->select('s_a_c_members.*', 'departments.department_name')
            ->where('s_a_c_members.phase_no', 1)
            ->where('s_a_c_members.publication_status', 1)
            ->get();
        $sacTwoMembers = DB::table('s_a_c_members')
            ->join('departments', 's_a_c_members.department_id','=','departments.id')
            ->select('s_a_c_members.*', 'departments.department_name')
            ->where('s_a_c_members.phase_no', 2)
            ->where('s_a_c_members.publication_status', 1)
            ->get();
        $sacThreeMembers = DB::table('s_a_c_members')
            ->join('departments', 's_a_c_members.department_id','=','departments.id')
            ->select('s_a_c_members.*', 'departments.department_name')
            ->where('s_a_c_members.phase_no', 3)
            ->where('s_a_c_members.publication_status', 1)
            ->get();
        return view('front.sac.sac-members',[
            'events'=>$events,
            'galleries'=>$galleries,
            'sacOneMembers'=>$sacOneMembers,
            'sacTwoMembers'=>$sacTwoMembers,
            'sacThreeMembers'=>$sacThreeMembers
        ]);
    }
    public function qacMembers(){
        $qacMembers = QACMember::where('publication_status', 1)->orderBy('id', 'ASC')->get();
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('front.qac.qac-members',[
            'qacMembers'=>$qacMembers,
            'events'=>$events,
            'galleries'=>$galleries
        ]);
    }
    public function iqacEventList(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->get();
        $activities = Activity::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('front.iqac-event.iqac-event-list',[
            'events'=>$events,
            'activities'=>$activities,
            'galleries'=>$galleries
        ]);
    }
    public function poeEventList(){
        $activities = Activity::where('publication_status', 1)->limit(3)->get();
        return view('front.poe-event.poe-event-list',[
            'activities'=>$activities
        ]);
    }
    public function recentActivities(){
        $activities = Activity::where('publication_status', 1)->orderBy('id', 'DESC')->get();
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('front.activities.recent-activities',[
            'activities'=>$activities,
            'events'=>$events,
            'galleries'=>$galleries
        ]);
    }
    public function gallery(){
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->get();
        return view('front.gallery.gallery',[
            'galleries'=>$galleries
        ]);
    }
    public function executiveStaff(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $executiveStaffs = ExecutiveStaff::where('publication_status', '1')->orderBy('id', 'ASC')->get();
        return view('front.staff.executive-staff',[
            'events'=>$events,
            'galleries'=>$galleries,
            'executiveStaffs'=>$executiveStaffs
        ]);
    }
    public function officeStaff(){
        $officeStaffs = OfficeStaff::where('publication_status', '1')->orderBy('id', 'ASC')->get();
        return view('front.staff.office-staff',[
            'officeStaffs'=>$officeStaffs
        ]);
    }
    public function manual(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $files = DB::table('downloads')
            ->where('publication_status', 1)
            ->where('file_type', 1)
            ->orderBY('id', 'DESC')
            ->limit(15)
            ->get();
        return view('front.download.manual',[
            'events'=>$events,
            'galleries'=>$galleries,
            'files'=>$files
        ]);
    }
    public function documents(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        $files = DB::table('downloads')
            ->where('publication_status', 1)
            ->where('file_type', 2)
            ->orderBY('id', 'DESC')
            ->limit(15)
            ->get();
        return view('front.download.documents',[
            'events'=>$events,
            'galleries'=>$galleries,
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
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('front.about-us.our-mission',[
            'events'=>$events,
            'galleries'=>$galleries
        ]);
    }
    public function ourVision(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('front.about-us.our-vision',[
            'events'=>$events,
            'galleries'=>$galleries
        ]);
    }
    public function ourObjectives(){
        $events = Event::where('publication_status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $galleries = Gallery::where('publication_status', 1)->orderBy('id', 'DESC')->limit(8)->get();
        return view('front.about-us.our-objectives',[
            'events'=>$events,
            'galleries'=>$galleries
        ]);
    }

}
