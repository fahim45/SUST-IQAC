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
    Manage SAC Members
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In Manage SAC Members</h1>
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
                        <th>Phase</th>
                        <th>Department</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($sacMembers as $sacMember)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $sacMember->phase_no }}</td>
                            <td>{{ $sacMember->department_name }}</td>
                            <td>{{ $sacMember->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                            <td>
                                <a href="{{ url('/committee/sac/view-sac-member/'.$sacMember->id) }}" class="btn btn-info btn-xs" title="View"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                @if($sacMember->publication_status == 1)
                                    <a href="{{ url('/committee/sac/unpublished-sac-member/'.$sacMember->id) }}" class="btn btn-success btn-xs" title="Published"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @else
                                    <a href="{{ url('/committee/sac/published-sac-member/'.$sacMember->id) }}" class="btn btn-warning btn-xs" title="Unpublished"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @endif
                                <a href="{{ url('/committee/sac/edit-sac-member/'.$sacMember->id) }}" class="btn btn-primary btn-xs" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ url('/committee/sac/delete-sac-member/'.$sacMember->id) }}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are You Sure To Delete This?');"><span class="glyphicon glyphicon-trash"></span></a>
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

