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
    Executive Staffs | IQAC-SUST
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Executive Staffs</h4>
                    </div>
                    <div class="qac-members" style="margin-top: 10px;">
                        @foreach($executiveStaffs as $executiveStaff)
                        <div class="col-lg-6">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        {{ $executiveStaff->name }}
                                    </h2>
                                    <h4><b>{{ $executiveStaff->designation }}</b></h4>
                                </div>
                                <img src="{{ asset($executiveStaff->picture) }}" class="img-circle circle-border m-b-md" alt="{{ $executiveStaff->name }}" style="height: 290px;">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>{{ $executiveStaff->office_address }}</strong><br>
                                    <b>Call:</b> {{ $executiveStaff->mobile_no }}<br>
                                    <b>Email:</b> <a href="mailto:{{ $executiveStaff->email }}">{{ $executiveStaff->email }}</a><br>
                                </address>
                                <div>
                                    <span><a href="{{ $executiveStaff->details_link }}" target="_blank" class="btn btn-default">About {{ $executiveStaff->designation }}</a></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Upcoming Events</h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner">
                        @foreach($events as $event)
                            <div class="event-small-list clearfix">
                                <div class="calendar-small">
                                    <span class="s-month">{{ date('M', strtotime( $event->event_date )) }}</span>
                                    <span class="s-date">{{ date('d', strtotime( $event->event_date )) }}</span>
                                </div>
                                <div class="event-small-details">
                                    <h5 class="event-small-title"><a href="#">{{ $event->event_title }}</a></h5>
                                    <p class="event-small-meta small-text">{{ $event->event_place.', Time '.date('H:i A', strtotime( $event->event_time )) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            @foreach($galleries as $gallery)
                                <div class="thumb-small-gallery">
                                    <a class="fancybox" rel="gallery1" href="{{ asset($gallery->uploaded_image) }}" title="{{ $gallery->image_title }}">
                                        <img src="{{ asset($gallery->uploaded_image) }}" alt="{{ $gallery->image_title }}" />
                                    </a>
                                </div>
                            @endforeach
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endsection
