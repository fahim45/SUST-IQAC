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
    List of SAC Members | IQAC-SUST
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Members of SAC</h4>
                    </div>
                    <div class="qac-members" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #4782B2;">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <h3><b>1<sup>st</sup> Phase</b></h3>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                </tr>
                                                @foreach($sacOneMembers as $sacOneMember)
                                                <tr>
                                                    <td rowspan="3">{{ $sacOneMember->department_name }}</td>
                                                    <td>{{ $sacOneMember->sac_one_name }}</td>
                                                    <td>{{ $sacOneMember->sac_one_role==1?'Head':'Member' }}</td>
                                                    <td><a href="tel:+88{{ $sacOneMember->sac_one_mobile }}">{{ $sacOneMember->sac_one_mobile }}</a></td>
                                                    <td><a href="mailto:{{ $sacOneMember->sac_one_email }}">{{ $sacOneMember->sac_one_email }}</a></td>
                                                </tr>
                                                <tr>
                                                    <td>{{ $sacOneMember->sac_two_name }}</td>
                                                    <td>{{ $sacOneMember->sac_two_role==1?'Head':'Member' }}</td>
                                                    <td><a href="tel:+88{{ $sacOneMember->sac_two_mobile }}">{{ $sacOneMember->sac_two_mobile }}</a></td>
                                                    <td><a href="mailto:{{ $sacOneMember->sac_two_email }}">{{ $sacOneMember->sac_two_email }}</a></td>
                                                </tr>
                                                <tr>
                                                    <td>{{ $sacOneMember->sac_three_name }}</td>
                                                    <td>{{ $sacOneMember->sac_three_role==1?'Head':'Member' }}</td>
                                                    <td><a href="tel:+88{{ $sacOneMember->sac_three_mobile }}">{{ $sacOneMember->sac_three_mobile }}</a></td>
                                                    <td><a href="mailto:{{ $sacOneMember->sac_three_email }}">{{ $sacOneMember->sac_three_email }}</a></td>
                                                </tr>
                                                @endforeach

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #4782B2;">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <h3><b>2<sup>nd</sup> Phase</b></h3>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                </tr>
                                                @foreach($sacTwoMembers as $sacTwoMember)
                                                    <tr>
                                                        <td rowspan="3">{{ $sacTwoMember->department_name }}</td>
                                                        <td>{{ $sacTwoMember->sac_one_name }}</td>
                                                        <td>{{ $sacTwoMember->sac_one_role==1?'Head':'Member' }}</td>
                                                        <td><a href="tel:+88{{ $sacTwoMember->sac_one_mobile }}">{{ $sacTwoMember->sac_one_mobile }}</a></td>
                                                        <td><a href="mailto:{{ $sacTwoMember->sac_one_email }}">{{ $sacTwoMember->sac_one_email }}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ $sacTwoMember->sac_two_name }}</td>
                                                        <td>{{ $sacTwoMember->sac_two_role==1?'Head':'Member' }}</td>
                                                        <td><a href="tel:+88{{ $sacTwoMember->sac_two_mobile }}">{{ $sacTwoMember->sac_two_mobile }}</a></td>
                                                        <td><a href="mailto:{{ $sacTwoMember->sac_two_email }}">{{ $sacTwoMember->sac_two_email }}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ $sacTwoMember->sac_three_name }}</td>
                                                        <td>{{ $sacTwoMember->sac_three_role==1?'Head':'Member' }}</td>
                                                        <td><a href="tel:+88{{ $sacTwoMember->sac_three_mobile }}">{{ $sacTwoMember->sac_three_mobile }}</a></td>
                                                        <td><a href="mailto:{{ $sacTwoMember->sac_three_email }}">{{ $sacTwoMember->sac_three_email }}</a></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #4782B2;">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <h3><b>3<sup>rd</sup> Phase</b></h3>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                </tr>
                                                @foreach($sacThreeMembers as $sacThreeMember)
                                                    <tr>
                                                        <td rowspan="3">{{ $sacThreeMember->department_name }}</td>
                                                        <td>{{ $sacThreeMember->sac_one_name }}</td>
                                                        <td>{{ $sacThreeMember->sac_one_role==1?'Head':'Member' }}</td>
                                                        <td><a href="tel:+88{{ $sacThreeMember->sac_one_mobile }}">{{ $sacThreeMember->sac_one_mobile }}</a></td>
                                                        <td><a href="mailto:{{ $sacThreeMember->sac_one_email }}">{{ $sacThreeMember->sac_one_email }}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ $sacThreeMember->sac_two_name }}</td>
                                                        <td>{{ $sacThreeMember->sac_two_role==1?'Head':'Member' }}</td>
                                                        <td><a href="tel:+88{{ $sacThreeMember->sac_two_mobile }}">{{ $sacThreeMember->sac_two_mobile }}</a></td>
                                                        <td><a href="mailto:{{ $sacThreeMember->sac_two_email }}">{{ $sacThreeMember->sac_two_email }}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ $sacThreeMember->sac_three_name }}</td>
                                                        <td>{{ $sacThreeMember->sac_three_role==1?'Head':'Member' }}</td>
                                                        <td><a href="tel:+88{{ $sacThreeMember->sac_three_mobile }}">{{ $sacThreeMember->sac_three_mobile }}</a></td>
                                                        <td><a href="mailto:{{ $sacThreeMember->sac_three_email }}">{{ $sacThreeMember->sac_three_email }}</a></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.col-md-12 -->
                    </div>
                </div>
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