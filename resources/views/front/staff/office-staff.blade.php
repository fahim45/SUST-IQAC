<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 21-Nov-17
 * Time: 10:48 PM
 */
?>

@extends('front.master')

@section('title')
    Office Staff | IQAC-SUST
@endsection

@section('content')
    <style>
        .navy-bg {
            background-color: #F3F3F3;
            color: #ffffff;
        }
        .m-b-md {
            height: 75px;
            margin-bottom: 20px;
        }
        img.circle-border {
            width: 100%;
            overflow: hidden;
        }
        img {
            -webkit-transition: all 0.5s ease;
        }
        img:hover {
            transform: scale(1.1);
        }
    </style>
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-12">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Office Staffs</h4>
                    </div>
                      <div class="officers" style="margin-top: 10px;">
                        @foreach($officers as $officer )
                        <div class="col-lg-4">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        {{ $officer->name }}
                                    </h2>
                                    <h4><b>{{ $officer->designation }}</b></h4>
                                </div>
                                <img src="{{ asset( $officer->picture ) }}" class="img-circle circle-border m-b-md" alt="profile" style="height: 290px;">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>{{ $officer->office_address }}</strong><br>
                                    <b>Call:</b> {{ $officer->mobile_no }}<br>
                                    <b>Email:</b> <a href="mailto:{{ $officer->email }}">{{ $officer->email }}</a><br>
                                </address>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- /.col-md-12 -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="widget-main">
                    <div class="staffs">
                        @foreach($staffs as $staff )
                            <div class="col-lg-4">
                                <div class="widget-head-color-box navy-bg p-lg text-center">
                                    <div class="m-b-md">
                                        <h2 class="font-bold no-margins">
                                            {{ $staff->name }}
                                        </h2>
                                        <h4><b>{{ $staff->designation }}</b></h4>
                                    </div>
                                    <img src="{{ asset( $staff->picture ) }}" class="img-circle circle-border m-b-md" alt="profile" style="height: 290px;">
                                </div>
                                <div class="widget-text-box">
                                    <address class="m-t-md">
                                        <strong>{{ $staff->office_address }}</strong><br>
                                        <b>Call:</b> {{ $staff->mobile_no }}<br>
                                        <b>Email:</b> <a href="mailto:{{ $staff->email }}">{{ $staff->email }}</a><br>
                                    </address>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- /.col-md-12 -->
        </div>
    </div>
@endsection
