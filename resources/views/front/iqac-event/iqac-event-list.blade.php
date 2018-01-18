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
                                    {{--<div class="view-details"><a href="#" class="lightBtn">View Details</a>
                                    </div>--}}
                                </div>
                                <h5 class="event-title"><a href="#">{{ $event->event_title }}</a></h5>
                                <p>{!! $event->event_description !!}</p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
                            @endforeach
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<ul class="pager">--}}
                            {{--<li class="previous disabled"><a href="#">&larr; Older</a></li>--}}
                            {{--<li class="next"><a href="#">Newer &rarr;</a></li>--}}
                        {{--</ul>--}}
                    {{--</div> <!-- /.col-md-12 -->--}}
                {{--</div> <!-- /.row -->--}}

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
