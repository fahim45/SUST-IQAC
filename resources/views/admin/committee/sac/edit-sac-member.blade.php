<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 31-Dec-17
 * Time: 12:36 PM
 */
?>
@extends('admin.master')

@section('title')
    Edit SAC Member
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit SAC Member</h1>
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
                <form class="form-horizontal" action="{{ url('/committee/sac/update-sac-member') }}" method="post" name="editSACMemberForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="phase_no" class="col-sm-2">Phase No</label>
                        <div class="col-sm-10">
                            <select name="phase_no" id="phase_no" class="form-control" required>
                                <option value="">Select Phase No</option>
                                <option value="1">First Phase</option>
                                <option value="2">Second Phase</option>
                                <option value="3">Third Phase</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('phase_no') ? $errors->first('phase_no') : '' }}</span>
                            <input type="hidden" name="sacmember_id" value="{{ $membersById->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department_name" class="col-sm-2">Department Name</label>
                        <div class="col-sm-10">
                            <select name="department_id" id="department_name" class="form-control" required>
                                <option value="">Select Department Name</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('department_name') ? $errors->first('department_name') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">SAC Member One (Head)</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3" style="padding-left: 0;">
                                <input type="text" name="sac_one_name" class="form-control" value="{{ $membersById->sac_one_name }}">
                                <span class="text-danger">{{ $errors->has('sac_one_name') ? $errors->first('sac_one_name') : '' }}</span>
                            </div>
                            <div class="col-sm-3">
                                <select name="sac_one_role" class="form-control" required>
                                    <option value="">Select Role</option>
                                    <option value="1">Head</option>
                                    <option value="0">Member</option>
                                </select>
                                <span class="text-danger">{{ $errors->has('sac_one_role') ? $errors->first('sac_one_role') : '' }}</span>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="sac_one_mobile" class="form-control" value="{{ $membersById->sac_one_mobile }}">
                                <span class="text-danger">{{ $errors->has('sac_one_mobile') ? $errors->first('sac_one_mobile') : '' }}</span>
                            </div>
                            <div class="col-sm-3" style="padding-right: 0;">
                                <input type="text" name="sac_one_email" class="form-control" value="{{ $membersById->sac_one_email }}">
                                <span class="text-danger">{{ $errors->has('sac_one_email') ? $errors->first('sac_one_email') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="head" class="col-sm-2">SAC Member Two</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3" style="padding-left: 0;">
                                <input type="text" name="sac_two_name" class="form-control" value="{{ $membersById->sac_two_name }}">
                                <span class="text-danger">{{ $errors->has('sac_two_name') ? $errors->first('sac_two_name') : '' }}</span>
                            </div>
                            <div class="col-sm-3">
                                <select name="sac_two_role" class="form-control" required>
                                    <option value="">Select Role</option>
                                    <option value="1">Head</option>
                                    <option value="0">Member</option>
                                </select>
                                <span class="text-danger">{{ $errors->has('sac_two_role') ? $errors->first('sac_two_role') : '' }}</span>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="sac_two_mobile" class="form-control" value="{{ $membersById->sac_two_mobile }}">
                                <span class="text-danger">{{ $errors->has('sac_two_mobile') ? $errors->first('sac_two_mobile') : '' }}</span>
                            </div>
                            <div class="col-sm-3" style="padding-right: 0;">
                                <input type="text" name="sac_two_email" class="form-control" value="{{ $membersById->sac_two_email }}">
                                <span class="text-danger">{{ $errors->has('sac_two_email') ? $errors->first('sac_two_email') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="head" class="col-sm-2">SAC Member Three</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3" style="padding-left: 0;">
                                <input type="text" name="sac_three_name" class="form-control" value="{{ $membersById->sac_three_name }}">
                                <span class="text-danger">{{ $errors->has('sac_three_name') ? $errors->first('sac_three_name') : '' }}</span>
                            </div>
                            <div class="col-sm-3">
                                <select name="sac_three_role" class="form-control" required>
                                    <option value="">Select Role</option>
                                    <option value="1">Head</option>
                                    <option value="0">Member</option>
                                </select>
                                <span class="text-danger">{{ $errors->has('sac_three_role') ? $errors->first('sac_three_role') : '' }}</span>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="sac_three_mobile" class="form-control" value="{{ $membersById->sac_three_mobile }}">
                                <span class="text-danger">{{ $errors->has('sac_three_mobile') ? $errors->first('sac_three_mobile') : '' }}</span>
                            </div>
                            <div class="col-sm-3" style="padding-right: 0;">
                                <input type="text" name="sac_three_email" class="form-control" value="{{ $membersById->sac_three_email }}">
                                <span class="text-danger">{{ $errors->has('sac_three_email') ? $errors->first('sac_three_email') : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="publication_status" class="col-sm-2">Publication Status</label>
                        <div class="col-sm-10">
                            <select name="publication_status" id="publication_status" class="form-control" required>
                                <option value="">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update SAC Member</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script>
        document.forms['editSACMemberForm'].elements['phase_no'].value='{{ $membersById->phase_no }}';
        document.forms['editSACMemberForm'].elements['department_id'].value='{{ $membersById->department_id }}';
        document.forms['editSACMemberForm'].elements['sac_one_role'].value='{{ $membersById->sac_one_role }}';
        document.forms['editSACMemberForm'].elements['sac_two_role'].value='{{ $membersById->sac_two_role }}';
        document.forms['editSACMemberForm'].elements['sac_three_role'].value='{{ $membersById->sac_three_role }}';
        document.forms['editSACMemberForm'].elements['publication_status'].value='{{ $membersById->publication_status }}';
    </script>

@endsection


