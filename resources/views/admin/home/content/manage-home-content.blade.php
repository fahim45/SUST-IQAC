<?php
/**
 * Created by PhpStorm.
 * User: fahim_foysal_kamal
 * Date: 08-Jan-18
 * Time: 6:07 PM
 */
?>
@extends('admin.master')

@section('title')
    Manage Home Content
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Home Content</h1>
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
                        <th>Home Title</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($homeContents as $homeContent)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $homeContent->home_title }}</td>
                            <td>{{ $homeContent->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                            <td>
                                <a href="{{ url('/home/content/view-content/'.$homeContent->id) }}" class="btn btn-info btn-xs" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                @if($homeContent->publication_status == 1)
                                    <a href="{{ url('/home/content/unpublished-content/'.$homeContent->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/home/content/published-content/'.$homeContent->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/home/content/edit-content/'.$homeContent->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/home/content/delete-content/'.$homeContent->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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
