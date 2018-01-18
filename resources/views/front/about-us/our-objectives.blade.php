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
    Our Objectives | IQAC-SUST
@endsection

@section('content')
    <style>
        .item-1, .item-2, .item-3, .item-4, .item-5, .item-6, .item-7 {
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

        .item-4 {
            animation-name: anim-4;
        }

        .item-5 {
            animation-name: anim-5;
        }

        .item-6 {
            animation-name: anim-6;
        }

        .item-7 {
            animation-name: anim-7;
        }

        @keyframes anim-1 {
            0%, 5.3% {  right: -100%;  opacity: 0; }
            10.3%, 15% {  right: 0;  opacity: 1; }
            20.23%, 100% {  right: 0;  opacity: 1; }
        }

        @keyframes anim-2 {
            0%, 20.23% { right: -100%;  opacity: 0; }
            24.63%, 29.29% {  right: 0;  opacity: 1; }
            34.66%, 100% {  right: 0;  opacity: 1;  }
        }

        @keyframes anim-3 {
            0%, 34.66% {  right: -100%;  opacity: 0; }
            39.96%, 44.62% {  right: 0;  opacity: 1; }
            49.33%, 100% {  right: 0;  opacity: 1; }
        }

        @keyframes anim-4 {
            0%, 49.33% {  right: -100%;  opacity: 0; }
            54.96%, 59.62% {  right: 0;  opacity: 1; }
            64.62%, 100% {  right: 0;  opacity: 1; }
        }

        @keyframes anim-5 {
            0%, 64.62% {  right: -100%;  opacity: 0; }
            69.96%, 74.62% {  right: 0;  opacity: 1; }
            80.66%, 100% {  right: 0;  opacity: 1; }
        }

        @keyframes anim-6 {
            0%, 80.66% {  right: -100%;  opacity: 0; }
            84.96%, 89.62% {  right: 0;  opacity: 1; }
            94.66%, 100% {  right: 0;  opacity: 1; }
        }

        @keyframes anim-7 {
            0%, 94.66% {  right: -100%;  opacity: 0; }
            97.96%, 99.62% {  right: 0;  opacity: 1; }
            100% {  right: 0;  opacity: 1; }
        }

        .box-content-inner{
            background: url("{{ asset('/front/') }}/images/Chetona71.jpg");
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
                                    <h3><i class="fa fa-globe"></i> <b>Our Objectives</b></h3>
                                </div>
                                <ul>
                                    <li class="item-1">
                                        <p>To facilitate the self-assessment of academic programs.</p>
                                    </li>
                                    <li class="item-2">
                                        <p>To improve quality of Course curricula of programs by establishing the objective based learning process and value-based education system.</p>
                                    </li>
                                    <li class="item-3">
                                        <p>To organize seminars, workshops, training programs on academic and quality assurance, research methodology, good governance, etc.</p>
                                    </li>
                                    <li class="item-4">
                                        <p>To develop and maintain institutional data base and documentation.</p>
                                    </li>
                                    <li class="item-5">
                                        <p>To build networks with the stakeholders to get the feedback.</p>
                                    </li>
                                    <li class="item-6">
                                        <p>To develope quality assurance policy and to establish it at SUST.</p>
                                    </li>
                                    <li class="item-7">
                                        <p>To assure the quality practices in teaching-learning, research and support services for achieving the goals of SUST.</p>
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