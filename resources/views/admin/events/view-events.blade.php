@extends('admin.master')

@section('title')
    View Events
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In View Events</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>ID</th>
                        <td>{{ $event->id }}</td>
                    </tr>
                    <tr>
                        <th>Dept. Name</th>
                        <td>{{ $event->department_name }}</td>
                    </tr>
                    <tr>
                        <th>Event Title</th>
                        <td>{{ $event->event_title }}</td>
                    </tr>
                    <tr>
                        <th>Event Place</th>
                        <td>{{ $event->event_place }}</td>
                    </tr>
                    <tr>
                        <th>Event Date</th>
                        <td>{{ date('F d, Y', strtotime( $event->event_date )) }}</td>
                    </tr>
                    <tr>
                        <th>Event Time</th>
                        <td>{{ date('H:i A', strtotime( $event->event_time )) }}</td>
                    </tr>
                    <tr>
                        <th>Event Description</th>
                        <td>{!! $event->event_description !!}</td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>{{ $event->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection