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
                        <div class="col-lg-6">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        Prof. Dr. Abdul Awwal Biswas
                                    </h2>
                                    <h4><b>Director</b></h4>
                                </div>
                                <img src="http://www.sust.edu/uploads/profile-images/1464227068.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>IQAC, SUST</strong><br>
                                    <b>Call:</b> 01711966412<br>
                                    <b>Email:</b> <a href="mailto:iqac-dir@sust.edu">iqac-dir@sust.edu</a><br>
                                </address>
                                <div>
                                    <span><a href="http://www.sust.edu/d/anp/faculty-profile-detail/343" target="_blank" class="btn btn-default">About Director</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        Prof. Dr. Md. Ashraful Alam
                                    </h2>
                                    <h4><b>Additional Director</b></h4>
                                </div>
                                <img src="http://www.sust.edu/uploads/profile-images/1458447235.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>IQAC, SUST</strong><br>
                                    <b>Call:</b> 01718364976<br>
                                    <b>Email:</b> <a href="mailto:iqac-ad@sust.edu">iqac-ad@sust.edu</a><br>
                                </address>
                                <div>
                                    <span><a href="http://www.sust.edu/d/che/faculty-profile-detail/83" target="_blank" class="btn btn-default">About Additional Director</a></span>
                                </div>
                            </div>
                        </div>

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

            </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endsection
