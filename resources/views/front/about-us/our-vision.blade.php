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
    Our Vision | IQAC-SUST
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
                                    <h3><i class="fa fa-globe"></i> <b>Our Vision</b></h3>
                                </div>
                                <ul>
                                    <li class="item-1">
                                        <p>Achieving Accreditation for all the Academic Programs as well as of SUST from world renowned accreditation bodies.</p>

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
                                    <h5 class="event-small-title"><a href="#">{{ $event->event_title }}</a></h5>
                                    <p class="event-small-meta small-text">{{ $event->event_place.', Time '.date('H:i A', strtotime( $event->event_time )) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- /.widget-inner -->
                </div><!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery1.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery1.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery2.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery2.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery3.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery3.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery4.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery4.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery5.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery5.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery6.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery6.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery7.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery7.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery8.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery8.jpg" alt=""/>
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
        </div>
    </div>
@endsection