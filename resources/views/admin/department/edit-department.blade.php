<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 31-Dec-17
 * Time: 10:21 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 04-Dec-17
 * Time: 8:22 AM
 */
?>
@extends('admin.master')

@section('title')
    Edit Department
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Edit Department</h1>
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
                <form class="form-horizontal" action="{{ url('/department/update-department') }}" method="post" name="editDeptForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="department_name" class="col-sm-3">Department Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="department_name" value="{{ $department->department_name }}" id="department_name" class="form-control" required>
                            <span class="text-danger">{{ $errors->has('department_name') ? $errors->first('department_name') : '' }}</span>
                            <input type="hidden" name="dept_id" value="{{ $department->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phase_no" class="col-sm-3">Phase No</label>
                        <div class="col-sm-9">
                            <select name="phase_no" id="phase_no" class="form-control" required>
                                <option value="">Select Phase No</option>
                                <option value="1">First Phase</option>
                                <option value="2">Second Phase</option>
                                <option value="3">Third Phase</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('phase_no') ? $errors->first('phase_no') : '' }}</span>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Department</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <script>
        document.forms['editDeptForm'].elements['phase_no'].value='{{$department->phase_no}}';
        document.forms['editDeptForm'].elements['publication_status'].value='{{$department->publication_status}}';
    </script>

@endsection
