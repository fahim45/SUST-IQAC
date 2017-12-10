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
                            <li>
                                <img src="{{ asset('/front/') }}/images/slide1.jpg" />
                                {{--<div class="slider-caption">
                                    <h2><a href="news-single.html">When a Doctor’s Visit Is a Guilt Trip</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>--}}
                            </li>
                            <li>
                                <img src="{{ asset('/front/') }}/images/slide2.jpg" />
                                {{--<div class="slider-caption">
                                    <h2><a href="news-single.html">Unlocking the scrolls of Herculaneum</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>--}}
                            </li>
                            <li>
                                <img src="{{ asset('/front/') }}/images/slide3.jpg" />
                                {{--<div class="slider-caption">
                                    <h2><a href="news-single.html">Corin Sworn wins Max Mara Art Prize</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>--}}
                            </li>
                            <li>
                                <img src="{{ asset('/front/') }}/images/slide4.jpg" />
                                {{--<div class="slider-caption">
                                    <h2><a href="news-single.html">Corin Sworn wins Max Mara Art Prize</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>--}}
                            </li>
                            <li>
                                <img src="{{ asset('/front/') }}/images/slide5.jpg" />
                                {{--<div class="slider-caption">
                                    <h2><a href="news-single.html">Corin Sworn wins Max Mara Art Prize</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>--}}
                            </li>
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
                            <h2 class="welcome-text">Welcome to IQAC-SUST</h2>
                            <p style="text-align: justify">
                                The present government headed by the Hon’ble Prime Minister Sheikh Hasina is committed to change the landscape of higher education through enhancement of quality of higher education and research in the country. For achieving the target of quality education the pGoB and the World Bank has generously funded the project which is known as Higher Education Quality Enhancement Project (HEQEP). The project is being implemented by the University Grants Commission, with help of the project officials and that of by the World Bank. </p>

                            <p style="text-align: justify">Establishment of Quality Assurance Mechanism is one of the major components of HEQEP and for that establishing the Institutional Quality Assurance Cell (IQAC) in each of the universities has been already in place to create an enabling framework to provide improved quality of tertiary education. In this context as an ‘A category’ university Shahjalal University of Science and technology (SUST) has been selected to establish IQAC from the first phase and IQAC-SUST is functioning from 1st January 2015. </p>

                            <p style="text-align: justify">The main purpose of IQAC is to identify the gaps between the existing system and stakeholders demand and to enhance and maintain the standards of quality of higher education up to the international standards. At present IQAC, SUST is working to assess all 25 departments’ academic program to find out the major strength, opportunity, weakness etc. to make proper and appropriate strategic improvement plans for those programs as well as of university. Besides the assessment activities, IQAC is organizing different training, seminar and workshops to improve the quality and efficiency of academic and non-academic personnel. For instance so far IQAC has organized the following programs: </p>

                            <p style="text-align: justify">i.  Seminar on self-assessment: Awareness, motivation, team building and process. </p>
                            <p style="text-align: justify">ii. Seminar and workshop on curriculum development, pedagogy and metacognitive tools and techniques, report writing and documentation ethical principles of faculty members. </p>
                            <p style="text-align: justify">iii.    Workshop on good governance: office and financial management. </p>
                            <p style="text-align: justify">iv. Meeting with stakeholders: Sharing views and opinions with Alumni, employers, guardians, students.</p>
                            <p style="text-align: justify">IQAC is supposed to be engaged in implementation of the strategic improvement plans those will come out from the activities of self-assessment and peer observation of all 25 departments. It will also work on the modification of different existing academic and administrative rules of SUST based on the recommendation of concerned stakeholders. The ultimate goal of IQAC is to enhance and maintain the quality of education of SUST and getting accreditation of SUST nationally and internationally.
                            </p>
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
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery7.jpg" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery8.jpg" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
        </div>
    </div>
    @endsection
