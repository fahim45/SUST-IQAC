<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEventForm(){
        return view('admin.events.add-events');
    }

    public function saveEventInfo(Request $request){
        $this->validate($request,[
            'department_name'=> 'required',
            'event_title'=> 'required|max:50',
            'event_place'=> 'required',
            'event_date'=> 'required|date',
            'event_time'=> 'required|date_format:H:i',
            'event_description'=> 'required'
        ]);

        $events = new Event();
        $events->department_name = $request->department_name;
        $events->event_title = $request->event_title;
        $events->event_place = $request->event_place;
        $events->event_date = $request->event_date;
        $events->event_time = $request->event_time;
        $events->event_description = $request->event_description;
        $events->publication_status = $request->publication_status;
        $events->save();

        return redirect('events/add-events')->with('message', 'Event Info Added Successfully');
    }

    public function manageEventInfo(){
        $events = Event::orderBy('id', 'DESC')->get();
        return view('admin.events.manage-events',[
            'events'=>$events
        ]);
    }

    public function viewEventInfo($id){
        $eventsById = Event::where('id', $id)->first();
        return view('admin.events.view-events',[
            'event'=>$eventsById
        ]);
    }

    public function publishedEventInfo($id){
        $eventsById = Event::find($id);
        $eventsById->publication_status=1;
        $eventsById->save();
        return redirect('/events/manage-events')->with('message','Event Info Published Successfully.');
    }

    public function unpublishedEventInfo($id){
        $eventsById = Event::find($id);
        $eventsById->publication_status=0;
        $eventsById->save();
        return redirect('/events/manage-events')->with('message','Event Info Unpublished Successfully.');
    }

    public function editEventInfo($id){
        $eventsById = Event::find($id);
        return view('admin.events.edit-events',[
            'event'=>$eventsById
        ]);
    }

    public function updateEventInfo(Request $request){
        $this->validate($request,[
            'department_name'=> 'required',
            'event_title'=> 'required|max:50',
            'event_place'=> 'required',
            'event_date'=> 'required|date',
            'event_time'=> 'required|date_format:H:i',
            'event_description'=> 'required'
        ]);

        $events = Event::find($request->event_id);
        $events->department_name = $request->department_name;
        $events->event_title = $request->event_title;
        $events->event_place = $request->event_place;
        $events->event_date = $request->event_date;
        $events->event_time = $request->event_time;
        $events->event_description = $request->event_description;
        $events->publication_status = $request->publication_status;
        $events->save();

        return redirect('events/manage-events')->with('message', 'Event Info Updated Successfully');
    }

    public function deleteEventInfo($id){
        $eventById = Event::find($id);
        $eventById->delete();
        return redirect('/events/manage-events')->with('message', 'Event Info Deleted Successfully.');
    }
}
