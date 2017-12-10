@extends('admin.master')

@section('title')
    Manage Activities
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Activities</h1>
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
                        <th>Activity Title</th>
                        <th>Activity Place</th>
                        <th>Activity Date</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($activities as $activity)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $activity->department_name }}</td>
                        <td>{{ $activity->activity_title }}</td>
                        <td>{{ $activity->activity_place }}</td>
                        <td>{{ date('F d, Y', strtotime( $activity->activity_date )) }}</td>
                        <td>{{ $activity->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                        <td>
                            <a href="{{ url('/activities/view-activities/'.$activity->id) }}" class="btn btn-info btn-xs" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                            @if($activity->publication_status == 1)
                                <a href="{{ url('/activities/unpublished-activities/'.$activity->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                            @else
                                <a href="{{ url('/activities/published-activities/'.$activity->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                            @endif
                            <a href="{{ url('/activities/edit-activities/'.$activity->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ url('/activities/delete-activities/'.$activity->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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