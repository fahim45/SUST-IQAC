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
    List of QAC Members | IQAC-SUST
@endsection

@section('content')
    <style>
        /* CONTACTS */
        .contact-box {
            background-color: #ffffff;
            border: 1px solid #e7eaec;
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-box > a {
            color: inherit;
        }

        .contact-box.center-version {
            border: 1px solid #e7eaec;
            padding: 0;
        }

        .contact-box.center-version > a {
            display: block;
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .contact-box.center-version > a img {
            width:70%;
            margin-bottom: 10px;
        }

        .contact-box.center-version address {
            margin-bottom: 0;
        }

        .contact-box .contact-box-footer {
            text-align: center;
            background-color: #ffffff;
            border-top: 1px solid #e7eaec;
            padding: 15px 20px;
        }

    </style>

    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Members of QAC</h4>
                    </div>
                    <div class="qac-members" style="margin-top: 10px;">
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/offices/vc-office" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/vc-office-1503267249.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Professor Farid Uddin Ahmed</strong></h3>
                                        <div class="font-bold">Chair & Vice Chancellor</div>
                                        <address class="m-t-md">
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 714306, 712706, /201 <br>
                                            <abbr title="Email">Email:</abbr> vc@sust.edu
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:714306" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:vc@sust.edu" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/che/faculty-profile-detail/83" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1458447235.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr Md Ashraful Alam</strong></h3>
                                        <div class="font-bold">Member Secretary & Additional Director</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01718364976<br>
                                            <abbr title="Email">Email:</abbr> ashraf_sust@yahoo.com
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801718364976" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:ashraf_sust@yahoo.com" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/anp/faculty-profile-detail/343" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1464227068.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr Abdul Awwal Biswas</strong></h3>
                                        <div class="font-bold">Member & Director</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01711966412 <br>
                                            <abbr title="Email">Email:</abbr> awwal_biswas@yahoo.com
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801711966412" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:awwal_biswas@yahoo.com" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/geb/faculty-profile-detail/191" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1458459183.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr Md Shamsul Haque Prodhan</strong></h3>
                                        <div class="font-bold">Member</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01735948380<br>
                                            <abbr title="Email">Email:</abbr> shamsulhp@yahoo.com
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801735948380" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:shamsulhp@yahoo.com" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/geb/faculty-profile-detail/214" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1459921782.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr. A. Z. M. Manzoor Rashid</strong></h3>
                                        <div class="font-bold">Member</div>
                                        <address class="m-t-md">
                                            <strong>Forestry & Environmental Science</strong><br>
                                            <strong>IQAC</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01711302555<br>
                                            <abbr title="Email">Email:</abbr> pollen_forest@yahoo.com
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801711302555" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:pollen_forest@yahoo.com" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/geb/faculty-profile-detail/31" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1464455434.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr Mohammad Shahidur Rahman</strong></h3>
                                        <div class="font-bold">Member</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01914930807<br>
                                            <abbr title="Email">Email:</abbr> rahmanms@sust.edu
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801914930807" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:rahmanms@sust.edu" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/geb/faculty-profile-detail/485" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1458545023.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr Mosaddak Ahmed Chowdhury</strong></h3>
                                        <div class="font-bold">Member</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01713300240<br>
                                            <abbr title="Email">Email:</abbr> maclittlelife@yahoo.com
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801713300240" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:maclittlelife@yahoo.com" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/geb/faculty-profile-detail/465" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1458629520.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr Md Abdul Ghani</strong></h3>
                                        <div class="font-bold">Member</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01911613802<br>
                                            <abbr title="Email">Email:</abbr> maghani_sust@yahoo.com
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801911613802" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:maghani_sust@yahoo.com" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/geb/faculty-profile-detail/399" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/1458540391.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Dr Himadri Sekhar Roy</strong></h3>
                                        <div class="font-bold">Member</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01719266004<br>
                                            <abbr title="Email">Email:</abbr> roy-eng@sust.edu
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801719266004" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:roy-eng@sust.edu" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/d/geb/faculty-profile-detail/12" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/thumb.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Prof. Md. Ahmed Kabir Chowdhury</strong></h3>
                                        <div class="font-bold">Member</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 01714227456<br>
                                            <abbr title="Email">Email:</abbr> makc@sust.edu
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+8801714227456" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:makc@sust.edu" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="http://www.sust.edu/offices/registrar-office" target="_blank">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/other-office-1464727785.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Mr Md Ishfaqul Hussain</strong></h3>
                                        <div class="font-bold">Member & Registrar</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 0821-728338<br>
                                            <abbr title="Email">Email:</abbr> registrar@sust.edu
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+880821-728338" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:registrar@sust.edu" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box center-version">
                                <a href="#">
                                    <img alt="image" class="img-circle" src="http://www.sust.edu/uploads/profile-images/thumb.jpg">
                                    <div class="qac-member" style="height: 10em;">
                                        <h3 class="m-b-xs"><strong>Mr A N M Joynal Abedin</strong></h3>
                                        <div class="font-bold">Member & Director of Accounts</div>
                                        <address class="m-t-md">
                                            <strong>IQAC</strong><br>
                                            <strong>Shahjalal University of Science and Technology</strong><br>
                                            <abbr title="Phone">Phone:</abbr> 0821-727961<br>
                                            <abbr title="Email">Email:</abbr> za-fnc@sust.edu
                                        </address>
                                    </div>
                                </a>
                                <div class="contact-box-footer" style="border-top: 0;">
                                    <div class="m-t-xs btn-group">
                                        <a href="tel:+880821-727961" class="btn btn-xs btn-default"><i class="fa fa-phone"></i> Call </a>
                                        <a href="mailto:za-fnc@sust.edu" class="btn btn-xs btn-default"><i class="fa fa-envelope"></i> Email</a>
                                    </div>
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