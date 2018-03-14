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
IQAC Event List | IQAC-SUST
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($events as $event)
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-header">
                                    <span class="event-place small-text"><i class="fa fa-asterisk"></i>{{ $event->department_name }}</span>
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i>{{ date('d M, Y', strtotime( $event->event_date)) }}</span>
                                    <span class="event-place small-text">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-home"></i>{{ $event->event_place }}</span>
                                </div>
                                {{--<div class="col-md-12">--}}
                                    <h5 class="col-xs-6 col-sm-6 col-md-6 event-title"><a href="{{ url('/iqac-event-details/'.$event->id) }}">{{ $event->event_title }}</a></h5>
                                    <div class="col-xs-6 col-sm-6 col-md-6 text-right view-details"><a href="{{ url('/iqac-event-details/'.$event->id) }}" class="lightBtn">View Details</a></div>
                                {{--</div>--}}
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
                            @endforeach
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                {!! $events->links('vendor.pagination.simple-default') !!}

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Recent Activities</h4>
                    </div> <!-- /.widget-main-title -->
                    <div class="widget-inner">
                        @foreach($activities as $activity)
                            <div class="blog-list-post clearfix">
                                <div class="blog-list-thumb">
                                    <a href="{{ url('/recent-activities-details/'.$activity->id) }}"><img src="{{ asset($activity->image) }}" alt="{{ $activity->activity_title }}"></a>
                                </div>
                                <div class="blog-list-details">
                                    <h5 class="blog-list-title"><a href="{{ url('/recent-activities-details/'.$activity->id) }}">{{ $activity->activity_title }}</a></h5>
                                    <p class="blog-list-meta small-text"><span>{{ date('d F, Y', strtotime( $activity->activity_date )) }}</span></p>
                                </div>
                            </div> <!-- /.recent-activities-post -->
                        @endforeach
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Recent Activities Photo</h4>
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

            </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endsection
