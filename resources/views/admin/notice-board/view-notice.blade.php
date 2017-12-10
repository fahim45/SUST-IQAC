@extends('admin.master')

@section('title')
    View Notice
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In View Notice</h1>
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
                        <td>{{ $notice->id }}</td>
                    </tr>
                    <tr>
                        <th>Notice Title</th>
                        <td>{{ $notice->notice_title }}</td>
                    </tr>
                    <tr>
                        <th>Publication Date</th>
                        <td>{{ date('d F, Y', strtotime( $notice->created_at )) }}</td>
                    </tr>
                    <tr>
                        <th>Notice Details</th>
                        <td>{!! $notice->notice_description !!}</td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>{{ $notice->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection