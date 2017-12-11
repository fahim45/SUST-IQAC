<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 11-Dec-17
 * Time: 11:10 AM
 */
?>

@extends('admin.master')

@section('title')
    Edit Executive Staff
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit Executive Staff</h1>
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
                <form class="form-horizontal" action="{{ url('/staff/executive/update-executive-staff') }}" method="post" enctype="multipart/form-data" name="editExecutiveForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-sm-3">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="name" value="{{ $exeStaffById->name }}" class="form-control">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            <input type="hidden" name="executive_id" value="{{ $exeStaffById->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="designation" class="col-sm-3">Designation</label>
                        <div class="col-sm-9">
                            <input type="text" name="designation" id="designation" value="{{ $exeStaffById->designation }}" class="form-control">
                            <span class="text-danger">{{ $errors->has('designation') ? $errors->first('designation') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="office_address" class="col-sm-3">Office Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="office_address" id="office_address" value="{{ $exeStaffById->office_address }}" class="form-control">
                            <span class="text-danger">{{ $errors->has('office_address') ? $errors->first('office_address') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mobile_no" class="col-sm-3">Mobile No</label>
                        <div class="col-sm-9">
                            <input type="number" name="mobile_no" id="mobile_no" value="{{ $exeStaffById->mobile_no }}" min="0" class="form-control">
                            <span class="text-danger">{{ $errors->has('mobile_no') ? $errors->first('mobile_no') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" id="email" value="{{ $exeStaffById->email }}" class="form-control">
                            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="details_link" class="col-sm-3">Details Link</label>
                        <div class="col-sm-9">
                            <input type="text" name="details_link" id="details_link" value="{{ $exeStaffById->details_link }}" class="form-control">
                            <span class="text-danger">{{ $errors->has('details_link') ? $errors->first('details_link') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="picture" class="col-sm-3">Profile Picture</label>
                        <div class="col-sm-9">
                            <input type="file" name="picture" id="picture" class="form-control" accept="image/*">
                            <span class="text-danger">{{ $errors->has('picture') ? $errors->first('picture') : '' }}</span>
                            <img src="{{ asset($exeStaffById->picture) }}" alt="{{ $exeStaffById->name }}" style="height: 80px;">
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Executive Staff</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <script>
        document.forms['editExecutiveForm'].elements['publication_status'].value='{{ $exeStaffById->publication_status }}';
    </script>
@endsection

