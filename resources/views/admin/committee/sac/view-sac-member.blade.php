<?php
/**
 * Created by PhpStorm.
 * User: IQAC_SUST
 * Date: 01-Jan-18
 * Time: 11:36 AM
 */
?>
@extends('admin.master')

@section('title')
    View SAC Members
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In View SAC Members</h1>
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
                        <th>ID</th>
                        <td>{{ $sacMembers->id }}</td>
                    </tr>
                    <tr>
                        <th>Phase</th>
                        <td>{{ $sacMembers->phase_no }}</td>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <td><span style="font-weight: bold;">{{ $sacMembers->department_name }}</span></td>
                    </tr>
                    <tr class="bg-primary">
                        <th>SAC Member One (Name)</th>
                        <td>{{ $sacMembers->sac_one_name }}</td>
                    </tr>
                    <tr class="bg-primary">
                        <th>SAC Member One (Role)</th>
                        <td>{{ $sacMembers->sac_one_role==1? 'Head':'Member' }}</td>
                    </tr>
                    <tr class="bg-primary">
                        <th>SAC Member One (Phone)</th>
                        <td>{{ $sacMembers->sac_one_mobile }}</td>
                    </tr>
                    <tr class="bg-primary">
                        <th>SAC Member One (Email)</th>
                        <td>{{ $sacMembers->sac_one_email }}</td>
                    </tr>
                    <tr class="bg-success">
                        <th>SAC Member Two (Name)</th>
                        <td>{{ $sacMembers->sac_two_name }}</td>
                    </tr>
                    <tr class="bg-success">
                        <th>SAC Member Two (Role)</th>
                        <td>{{ $sacMembers->sac_two_role==1? 'Head':'Member' }}</td>
                    </tr>
                    <tr class="bg-success">
                        <th>SAC Member Two (Phone)</th>
                        <td>{{ $sacMembers->sac_two_mobile }}</td>
                    </tr>
                    <tr class="bg-success">
                        <th>SAC Member Two (Email)</th>
                        <td>{{ $sacMembers->sac_two_email }}</td>
                    </tr>
                    <tr class="bg-info">
                        <th>SAC Member Three (Name)</th>
                        <td>{{ $sacMembers->sac_three_name }}</td>
                    </tr>
                    <tr class="bg-info">
                        <th>SAC Member Three (Role)</th>
                        <td>{{ $sacMembers->sac_three_role==1? 'Head':'Member' }}</td>
                    </tr>
                    <tr class="bg-info">
                        <th>SAC Member Three (Phone)</th>
                        <td>{{ $sacMembers->sac_three_mobile }}</td>
                    </tr>
                    <tr class="bg-info">
                        <th>SAC Member Three (Email)</th>
                        <td>{{ $sacMembers->sac_three_email }}</td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>
                            @if($sacMembers->publication_status==1)
                                <span class="btn btn-xs btn-success">{{'Published'}}</span>
                            @else
                                <span class="btn btn-xs btn-success">{{'Unpublished'}}</span>
                            @endif
                         </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection


