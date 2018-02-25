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
    Our Mission | IQAC-SUST
@endsection

@section('content')
    <style>
        .item-1,
        .item-2,
        .item-3 {
            color: #000000;
            position: relative;
            font-size: 1.5em;
            animation-duration: 10s;
        }

        .item-1 {
            animation-name: anim-1;
        }

        .item-2 {
            animation-name: anim-2;
        }

        .item-3 {
            animation-name: anim-3;
        }

        @keyframes anim-1 {
            0%, 8.3% {
                right: -100%;
                opacity: 0;
            }
            8.3%, 25% {
                right: 0;
                opacity: 1;
            }
            33.33%, 100% {
                right: 0;
                opacity: 1;
            }
        }

        @keyframes anim-2 {
            0%, 33.33% {
                right: -100%;
                opacity: 0;
            }
            41.63%, 58.29% {
                right: 0;
                opacity: 1;
            }
            66.66%, 100% {
                right: 0;
                opacity: 1;
            }
        }

        @keyframes anim-3 {
            0%, 66.66% {
                right: -100%;
                opacity: 0;
            }
            74.96%, 91.62% {
                right: 0;
                opacity: 1;
            }
            100% {
                right: 0;
                opacity: 1;
            }
        }

        .box-content-inner{
            background: url("{{ asset('/front/') }}/images/Chetona71.jpg");
            /*opacity: .15;*/
        }
    </style>

    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-12">
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-header">
                                    <h3><i class="fa fa-globe"></i> <b>Our Mission</b></h3>
                                </div>
                                <ul>
                                    <li class="item-1">
                                        <p>Developing quality systems for conscious, reliable, transparent, consistent
                                            academic and administrative performance of SUST.</p>
                                    </li>
                                    <li class="item-2">
                                        <p>Benchmarking the practices and processes with the best universities in the
                                            world.</p>
                                    </li>
                                    <li class="item-3">
                                        <p>Institutional quality enhancement through internalization of quality culture and
                                            institutionalization of best practices.</p>
                                    </li>
                                </ul>
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
                    </div>
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
                </div><!-- /.widget-main -->

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

            </div>
        </div>
    </div>
@endsection