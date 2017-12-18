<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 18-Dec-17
 * Time: 4:40 PM
 */
?>
@extends('admin.master')

@section('title')
    Manage Gallery
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Gallery</h1>
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
                        <th>Image Title</th>
                        <th>Image Type</th>
                        <th>Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($images as $image)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $image->image_title }}</td>
                            <td>
                                @if($image->image_type==1)
                                    {{ 'Workshop/Seminar' }}
                                    @elseif($image->image_type==2)
                                        {{ 'Training' }}
                                        @elseif($image->image_type==3)
                                            {{ 'Meeting' }}
                                            @elseif($image->image_type==4)
                                                {{ 'Others' }}
                                @endif
                            </td>
                            <td><img src="{{ asset($image->uploaded_image) }}" alt="" style="width: 80px;"></td>
                            <td>{{ $image->publication_status==1?'Published':'Unpublished' }}</td>
                            <td>
                                <a href="{{ asset($image->uploaded_image) }}" target="_blank" class="btn btn-info btn-xs" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                @if($image->publication_status == 1)
                                    <a href="{{ url('/gallery/unpublished-gallery-file/'.$image->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/gallery/published-gallery-file/'.$image->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/gallery/edit-gallery-file/'.$image->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/gallery/delete-gallery-file/'.$image->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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
