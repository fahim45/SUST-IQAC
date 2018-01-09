<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 08-Jan-18
 * Time: 3:55 PM
 */
?>

@extends('admin.master')

@section('title')
    Add Home Content
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Add Home Content</h1>
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
                <form class="form-horizontal" action="{{ url('/home/content/new-content') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="home_title" class="col-sm-3">Home Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="home_title" id="home_title" class="form-control" required>
                            <span class="text-danger">{{ $errors->has('home_title') ? $errors->first('home_title') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="home_description" class="col-sm-3">Home Description</label>
                        <div class="col-sm-9">
                            <textarea name="home_description" id="home_description" cols="30" rows="10" class="tinymce" style="resize: vertical;"></textarea>
                            <span class="text-danger">{{ $errors->has('home_description') ? $errors->first('home_description') : '' }}</span>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Add Home Content</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection