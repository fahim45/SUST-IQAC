@extends('admin.master')

@section('title')
    Manage Departments
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Departments</h1>
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
                        <th>Phase No</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($departments as $department)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $department->department_name }}</td>
                        <td>
                            @if($department->phase_no==1)
                                <span class="btn btn-primary btn-xs">
                                {{ 'First Phase' }}
                                </span>
                                @elseif($department->phase_no==2)
                                <span class="btn btn-info btn-xs">{{ 'Second Phase' }}</span>
                                @elseif($department->phase_no==3)
                                <span class="btn btn-success btn-xs">{{ 'Third Phase' }}</span>
                                @endif
                        </td>
                        <td>{{ $department->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                        <td>
                            @if($department->publication_status == 1)
                                <a href="{{ url('/department/unpublished-department/'.$department->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                            @else
                                <a href="{{ url('/department/published-department/'.$department->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                            @endif
                            <a href="{{ url('/department/edit-department/'.$department->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ url('/department/delete-department/'.$department->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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