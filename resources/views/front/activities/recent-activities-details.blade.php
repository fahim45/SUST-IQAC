<?php
/**
 * Created by PhpStorm.
 * User: fahim_foysal_kamal
 * Date: 01-Feb-18
 * Time: 4:06 PM
 */
?>
@extends('front.master')

@section('title')
    Recent Activities | IQAC-SUST
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                            <div class="list-event-item">
                                <div class="box-content-inner clearfix">
                                    <h5 class="event-title" style="color: #4782b2; font-size: 20px; font-weight: 800;">{{ $activity->activity_title }}</h5>
                                    <div class="list-event-header">
                                        <span class="event-place small-text"><i class="fa fa-asterisk"></i>{{ $activity->department_name }}</span>
                                        <span class="event-date small-text"><i class="fa fa-calendar-o"></i>{{ date('d M, Y', strtotime( $activity->activity_date)) }}</span>
                                    </div>
                                    <img src="{{ asset($activity->image) }}" alt="{{ $activity->activity_title }}" style="width: 100%;height: 350px;">
                                    <p>{!! $activity->activity_description !!}</p>
                                </div> <!-- /.box-content-inner -->
                            </div> <!-- /.list-event-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

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
                                    <h5 class="event-small-title"><a href="{{ url('/iqac-event-details/'.$event->id) }}">{{ $event->event_title }}</a></h5>
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

