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
    Manage Activities
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage Activities</h1>
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
                        <th>Office Address</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Details Link</th>
                        <th>Profile Picture</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($executiveStaffs as $executiveStaff)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $executiveStaff->name }}</td>
                            <td>{{ $executiveStaff->designation }}</td>
                            <td>{{ $executiveStaff->office_address }}</td>
                            <td>{{ $executiveStaff->mobile_no }}</td>
                            <td>{{ $executiveStaff->email }}</td>
                            <td>{{ $executiveStaff->details_link }}</td>
                            <td><img src="{{ asset($executiveStaff->picture) }}" alt="{{ $executiveStaff->name }}" style="height: 80px;"></td>
                            <td>{{ $executiveStaff->publication_status ? 'Published':'Unpublished' }}</td>
                            <td>
                                @if($executiveStaff->publication_status == 1)
                                    <a href="{{ url('/staff/executive/unpublished-executive-staff/'.$executiveStaff->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/staff/executive/published-executive-staff/'.$executiveStaff->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/staff/executive/edit-executive-staff/'.$executiveStaff->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/staff/executive/delete-executive-staff/'.$executiveStaff->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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
