@extends('admin.master')

@section('title')
    Manage Notice
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Notice</h1>
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
                        <th>Notice Title</th>
                        <th>Publication Date</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($notices as $notice)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $notice->notice_title }}</td>
                        <td>{{ date('F d, Y', strtotime( $notice->created_at )) }}</td>
                        <td>{{ $notice->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                        <td>
                            <a href="{{ url('/notice-board/view-notice-board/'.$notice->id) }}" class="btn btn-info btn-xs" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                            @if($notice->publication_status == 1)
                                <a href="{{ url('/notice-board/unpublished-notice-board/'.$notice->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                            @else
                                <a href="{{ url('/notice-board/published-notice-board/'.$notice->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                            @endif
                            <a href="{{ url('notice-board/edit-notice-board/'.$notice->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{ url('/notice-board/delete-notice-board/'.$notice->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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