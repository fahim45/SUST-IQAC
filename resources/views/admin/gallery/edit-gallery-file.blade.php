<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 19-Dec-17
 * Time: 10:25 AM
 */
?>
@extends('admin.master')

@section('title')
    Edit Gallery File
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit Gallery File</h1>
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
                <form class="form-horizontal" action="{{ url('/gallery/update-gallery-file') }}" method="post" enctype="multipart/form-data" name="editGalleryForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="image_title" class="col-sm-3">Image Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="image_title" value="{{ $galleryById->image_title }}" id="image_title" class="form-control" required>
                            <span class="text-danger">{{ $errors->has('image_title') ? $errors->first('image_title') : '' }}</span>
                            <input type="hidden" name="image_id" value="{{ $galleryById->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image_type" class="col-sm-3">Image Type</label>
                        <div class="col-sm-9">
                            <select name="image_type" id="image_type" class="form-control" required>
                                <option value="">Select Image Type</option>
                                <option value="1">Workshop/Seminar</option>
                                <option value="2">Training</option>
                                <option value="3">Meeting</option>
                                <option value="4">Others</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('image_type') ? $errors->first('image_type') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="uploaded_image" class="col-sm-3">Uploaded Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="uploaded_image" id="uploaded_image" class="form-control" accept="image/*">
                            <img src="{{ asset($galleryById->uploaded_image) }}" alt="{{ $galleryById->image_title }}" width="80">
                            <span class="text-danger">{{ $errors->has('uploaded_image') ? $errors->first('uploaded_image') : '' }}</span>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Image</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script>
        document.forms['editGalleryForm'].elements['image_type'].value='{{ $galleryById->image_type }}';
        document.forms['editGalleryForm'].elements['publication_status'].value='{{ $galleryById->publication_status }}';
    </script>
@endsection
