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
    Home | IQAC-SUST
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-slideshow">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach($sliders as $slider)
                            <li>
                                <img src="{{ asset( $slider->slider_photo ) }}" alt="{{ $slider->photo_title }}" />
                            </li>
                            @endforeach
                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            @foreach($contents as $content)
                            <h2 class="welcome-text">{{ $content->home_title }}</h2>
                            <p style="text-align: justify">
                                {!! $content->home_description !!}
                            </p>
                                @endforeach
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">

                    <!-- Show Recent Activities -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Recent Activities</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                @foreach($activities as $activity)
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="#"><img src="{{ asset($activity->image) }}" alt="{{ $activity->activity_title }}"></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="#">{{ $activity->activity_title }}</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#">{{ date('d F, Y', strtotime( $activity->activity_date )) }}</a></span></p>
                                    </div>
                                </div> <!-- /.recent-activities-post -->
                                @endforeach
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /col-md-6 -->

                    <!-- Show Latest Events List -->
                    <div class="col-md-6">
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
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Notice Board</h4>
                    </div>
                    <div class="widget-inner" style="height:300px;">
                        <marquee behavior="scroll" direction="up" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" style="height: 260px;">
                            <ul>
                                @foreach($notices as $notice)
                                <li>
                                    <p>{{ $notice->notice_title }} <a href="{{ url('notice/'.$notice->id) }}" class="btn btn-success btn-xs">Details...</a></p>
                                </li>
                                @endforeach
                            </ul>
                        </marquee>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

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
