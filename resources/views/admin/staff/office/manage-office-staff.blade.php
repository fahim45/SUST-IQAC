<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 10-Dec-17
 * Time: 6:19 PM
 */
?>
@extends('admin.master')

@section('title')
    Manage Office Staff
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Office Staff</h1>
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
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Role</th>
                        <th>Office Address</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Profile Picture</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($officeStaffs as $officeStaff)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $officeStaff->name }}</td>
                            <td>{{ $officeStaff->designation }}</td>
                            <td>{{ $officeStaff->role ? 'Officer':'Staff' }}</td>
                            <td>{{ $officeStaff->office_address }}</td>
                            <td>{{ $officeStaff->mobile_no }}</td>
                            <td>{{ $officeStaff->email }}</td>
                            <td><img src="{{ asset($officeStaff->picture) }}" alt="{{ $officeStaff->name }}" style="height: 80px;width: 80px;"></td>
                            <td>{{ $officeStaff->publication_status ? 'Published':'Unpublished' }}</td>
                            <td>
                                @if($officeStaff->publication_status == 1)
                                    <a href="{{ url('/staff/office/unpublished-office-staff/'.$officeStaff->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/staff/office/published-office-staff/'.$officeStaff->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/staff/office/edit-office-staff/'.$officeStaff->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/staff/office/delete-office-staff/'.$officeStaff->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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
