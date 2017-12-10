@extends('admin.master')

@section('title')
    Manage Events
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Events</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            @if($message = Session::get('message'))
                <div class="alert alert-success">
                    <h2 class="text-center text-success">{{$message}}</h2>
                </div>
            @endif
            <div class="well">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Dept. Name</th>
                        <th>Event Title</th>
                        <th>Event Place</th>
                        <th>Event Date</th>
                        <th>Event Time</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $event->department_name }}</td>
                        <td>{{ $event->event_title }}</td>
                        <td>{{ $event->event_place }}</td>
                        <td>{{ date('F d, Y', strtotime( $event->event_date )) }}</td>
                        <td>{{ date('H:i A', strtotime( $event->event_time )) }}</td>
                        <td>{{ $event->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                        <td>
                            <a href="{{ url('/events/view-events/'.$event->id) }}" class="btn btn-info btn-xs" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                            @if($event->publication_status == 1)
                                <a href="{{ url('/events/unpublished-events/'.$event->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                            @else
                                <a href="{{ url('/events/published-events/'.$event->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                            @endif
                            <a href="{{ url('/events/edit-events/'.$event->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ url('/events/delete-events/'.$event->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                        @endforeach
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection