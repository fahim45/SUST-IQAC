@extends('admin.master')

@section('title')
    View Activity
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In View Activity</h1>
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
                        <td>{{ $activity->id }}</td>
                    </tr>
                    <tr>
                        <th>Dept. Name</th>
                        <td>{{ $activity->department_name }}</td>
                    </tr>
                    <tr>
                        <th>Activity Title</th>
                        <td>{{ $activity->activity_title }}</td>
                    </tr>
                    <tr>
                        <th>Activity Place</th>
                        <td>{{ $activity->activity_place }}</td>
                    </tr>
                    <tr>
                        <th>Activity Date</th>
                        <td>{{ date('F d, Y', strtotime( $activity->activity_date )) }}</td>
                    </tr>
                    <tr>
                        <th>Activity Description</th>
                        <td>{!! $activity->activity_description !!}</td>
                    </tr>
                    <tr>
                        <th>Activity Image</th>
                        <td><img src="{{ asset($activity->image) }}" alt="{{ $activity->activity_title }}" style="height: 150px;width: 300px;"></td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>{{ $activity->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection