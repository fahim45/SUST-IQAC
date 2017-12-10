<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 04-Dec-17
 * Time: 10:44 AM
 */
?>
@extends('admin.master')

@section('title')
    Manage File
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage File</h1>
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
                        <th>File Name</th>
                        <th>File Type</th>
                        <th>Upload Date</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($files as $file)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $file->file_name }}</td>
                            <td>{{ $file->file_type==1?'Manual':'Document' }}</td>
                            <td>{{ $file->uploaded_file }}</td>
                            <td>{{ $file->publication_status==1?'Published':'Unpublished' }}</td>
                            <td>
                                <a href="{{ asset($file->uploaded_file) }}" target="_blank" class="btn btn-info btn-xs" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                @if($file->publication_status == 1)
                                    <a href="{{ url('/download/unpublished-file/'.$file->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/download/published-file/'.$file->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/download/edit-file/'.$file->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/download/delete-file/'.$file->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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
