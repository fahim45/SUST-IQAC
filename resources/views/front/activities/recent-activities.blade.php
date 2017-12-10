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
                                <h1 class="text-center text-danger" style="font-weight: 400;">Site Is Under Construction</h1>
                                {{--<div class="list-event-thumb">
                                    <a href="event-single.html">
                                        <img src="images/events/event-list-thumb1.jpg" alt="">
                                    </a>
                                </div>--}}
                                {{--<div class="list-event-header">
                                    <span class="event-place small-text"><i class="fa fa-globe"></i>109 Health</span>
                                    <span class="event-date small-text"><i
                                                class="fa fa-calendar-o"></i>January 08, 2014</span>
                                    <div class="view-details"><a href="event-single.html" class="lightBtn">View Details</a>
                                    </div>
                                </div>--}}
                                {{--<h5 class="event-title"><a href="event-single.html">January Career Centre Events for Grad
                                        Students</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus
                                    odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat
                                    tempora...</p>--}}
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
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
