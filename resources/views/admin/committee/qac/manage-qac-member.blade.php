<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 21-Dec-17
 * Time: 12:26 PM
 */
?>
@extends('admin.master')

@section('title')
    Manage QAC Members
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage QAC Members</h1>
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
                    @foreach($qacMembers as $qacMember)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $qacMember->name }}</td>
                            <td>{{ $qacMember->designation }}</td>
                            <td>{{ $qacMember->office_address }}</td>
                            <td>{{ $qacMember->mobile_no }}</td>
                            <td>{{ $qacMember->email }}</td>
                            <td>{{ $qacMember->details_link }}</td>
                            <td><img src="{{ asset($qacMember->picture) }}" alt="{{ $qacMember->name }}" style="height: 80px;"></td>
                            <td>{{ $qacMember->publication_status ? 'Published':'Unpublished' }}</td>
                            <td>
                                @if($qacMember->publication_status == 1)
                                    <a href="{{ url('/committee/qac/unpublished-qac-member/'.$qacMember->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/committee/qac/published-qac-member/'.$qacMember->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/committee/qac/edit-qac-member/'.$qacMember->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/committee/qac/delete-qac-member/'.$qacMember->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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

