<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 09-Jan-18
 * Time: 11:42 AM
 */
?>

@extends('admin.master')

@section('title')
    Edit Slider
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit Slider</h1>
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
                <form class="form-horizontal" action="{{ url('/home/slider/update-slider') }}" name="editSlider" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="photo_title" class="col-sm-3">Photo Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="photo_title" value="{{ $slider->photo_title }}" id="photo_title" class="form-control" required>
                            <span class="text-danger">{{ $errors->has('photo_title') ? $errors->first('photo_title') : '' }}</span>
                            <input type="hidden" name="slider_id" value="{{ $slider->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="slider_photo" class="col-sm-3">Slider Photo</label>
                        <div class="col-sm-9">
                            <input type="file" name="slider_photo" id="slider_photo" class="form-control">
                            <span class="text-danger">{{ $errors->has('slider_photo') ? $errors->first('slider_photo') : '' }}</span>
                            <br>
                            <img src="{{ asset($slider->slider_photo) }}" alt="{{ $slider->photo_title }}" style="width: 80px; height: 50px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="publication_status" class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select name="publication_status" id="publication_status" class="form-control" required>
                                <option value="">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Slider Photo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script>
        document.forms['editSlider'].elements['publication_status'].value='{{ $slider->publication_status }}';
    </script>
@endsection
