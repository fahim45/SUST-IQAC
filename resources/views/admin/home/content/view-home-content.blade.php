<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 09-Jan-18
 * Time: 1:11 PM
 */
?>
@extends('admin.master')

@section('title')
    View Content
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">In View Content</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>ID</th>
                        <td>{{ $viewContent->id }}</td>
                    </tr>
                    <tr>
                        <th>Home Title</th>
                        <td>{{ $viewContent->home_title }}</td>
                    </tr>
                    <tr>
                        <th>Home Description</th>
                        <td>{!! $viewContent->home_description  !!}</td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>{{ $viewContent->publication_status ==1 ? 'Published':'Unpublished' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection
