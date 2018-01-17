<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 09-Jan-18
 * Time: 11:49 AM
 */
?>

@extends('admin.master')

@section('title')
    Manage Slider
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Slider</h1>
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
                        <th>Slider Title</th>
                        <th>Slider Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $slider->photo_title }}</td>
                            <td><img src="{{ asset($slider->slider_photo) }}" alt="{{ $slider->photo_title }}" style="width: 180px;"></td>
                            <td>{{ $slider->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                            <td>
                                <a href="{{ asset($slider->slider_photo) }}" class="btn btn-info btn-xs" target="_blank" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                @if($slider->publication_status == 1)
                                    <a href="{{ url('/home/slider/unpublished-slider/'.$slider->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/home/slider/published-slider/'.$slider->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/home/slider/edit-slider/'.$slider->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/home/slider/delete-slider/'.$slider->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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

