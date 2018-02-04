<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 21-Nov-17
 * Time: 4:02 PM
 */
?>
@extends('front.master')

@section('title')
    List of QAC Members | IQAC-SUST
@endsection

@section('content')
    <style>
        /* CONTACTS */
        .contact-box {
            background-color: #ffffff;
            border: 1px solid #e7eaec;
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-box > a {
            color: inherit;
        }

        .contact-box.center-version {
            border: 1px solid #e7eaec;
            padding: 0;
        }

        .contact-box.center-version > a {
            display: block;
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .contact-box.center-version > a img {
            width:70%;
            margin-bottom: 10px;
        }

        .contact-box.center-version address {
            margin-bottom: 0;
        }

        .contact-box .contact-box-footer {
            text-align: center;
            background-color: #ffffff;
            border-top: 1px solid #e7eaec;
            padding: 15px 20px;
        }

    </style>

    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Members of QAC</h4>
                    </div>
                    <div class="qac-members" style="margin-top: 10px;">
                        @foreach($qacMembers as $qacMember)
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="{{ $qacMember->details_link }}" target="_blank">
                                    <img alt="image" class="img-circle" src="{{ asset($qacMember->picture) }}">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs" style="font-size: 20px;"><strong>{{ $qacMember->name }}</strong></h3>
                                        <div class="font-bold">{{ $qacMember->designation }}</div>
                                        <address class="m-t-md">
                                            <strong>{{ $qacMember->office_address }}</strong><br>
                                            <abbr title="Phone">Phone:</abbr> {{ $qacMember->mobile_no }}<br>
                                            <abbr title="Email">Email:</abbr> {{ $qacMember->email }}
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:{{ $qacMember->mobile_no }}" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:{{ $qacMember->email }}" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
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
                    </div>
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
                </div><!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Recent Activities</h4>
                    </div>
                    <div class="widget-inner" style="padding-top: 0;">
                        <div class="main-slideshow">
                            <div class="flexslider" style="height: auto">
                                <ul class="slides" style="height: 200px;">
                                    <style>
                                        ul.flex-direction-nav {
                                            display: none;
                                        }
                                    </style>
                                    @foreach($activities as $activity)
                                        <li>
                                            <img src="{{ asset( $activity->image ) }}" alt="{{ $activity->activity_title }}" />
                                        </li>
                                    @endforeach
                                </ul> <!-- /.slides -->
                            </div> <!-- /.flexslider -->
                        </div> <!-- /.main-slideshow -->
                    </div> <!-- /.widget-inner -->
                </div><!-- /.widget-main -->

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

            </div>
        </div>
    </div>
@endsection