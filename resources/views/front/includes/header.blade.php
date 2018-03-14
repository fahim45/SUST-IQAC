<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 21-Nov-17
 * Time: 4:01 PM
 */
?>
<div class="responsive-navigation visible-sm visible-xs">
    <a href="#" class="menu-toggle-btn">
        <i class="fa fa-bars"></i>
    </a>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#">Committee</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/sac-members') }}">SAC Members</a></li>
                    <li><a href="{{ url('/qac-members') }}">QAC Members</a></li>
                </ul>
            </li>
            <li><a href="#">Events & Activities</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/iqac-events-list') }}">IQAC Events</a></li>
                    {{--<li><a href="{{ url('/poe-events-list') }}">PoE Events</a></li>--}}
                    <li><a href="{{ url('/recent-activities') }}">Recent Activities</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            <li><a href="{{ url('#') }}">QA Process</a></li>
            <li><a href="#">Staffs</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/executive-staff') }}">Executive Staff</a></li>
                    <li><a href="{{ url('/office-staff') }}">Office Staff</a></li>
                </ul>
            </li>
            <li><a href="{{ url('#') }}">Newsletter</a></li>
            <li><a href="#">Downloads</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/manual') }}">Manual</a></li>
                    <li><a href="{{ url('/documents') }}">Documents</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->
</div> <!-- /responsive_navigation -->


<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 header-left">
                <p><i class="fa fa-phone"></i> <a href="tel:+880-821-717850">+880-821-717850</a></p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:iqac-off@sust.edu">iqac-off@sust.edu</a></p>
            </div> <!-- /.header-left -->

            <div class="col-md-4">
                <div class="logo">
                    <a href="{{ url('/') }}" title="IQAC-SUST" rel="home">
                        <img src="{{ asset('/front/') }}/images/iqac-logo.png" alt="">
                    </a>
                </div> <!-- /.logo -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 header-right">
                <ul class="small-links">
                    <li><a href="{{ url('/our-vision') }}">Vision</a></li>
                    <li><a href="{{ url('/our-mission') }}">Mission</a></li>
                    <li><a href="{{ url('/our-objectives') }}">Objectives</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                <div class="search-form">
                    <form method="POST" action="{{ url('/search') }}" class="search_form">
                        {{ csrf_field() }}
                        <input type="text" name="search" placeholder="Search the site..." class="field_search">
                    </form>
                </div>
                <ul class="social-icons pull-right">
                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                </ul> <!-- /.social-icons -->
            </div> <!-- /.header-right -->
        </div>
    </div> <!-- /.container -->

    <div class="nav-bar-main" role="navigation">
        <div class="container">
            <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                <ul class="main-menu sf-menu">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Committee</a>
                        <ul class="sub-menu">
                            <li class="{{ request()->is('sac-members') ? 'active' : '' }}"><a href="{{ url('/sac-members') }}">SAC Members</a></li>
                            <li class="{{ request()->is('qac-members') ? 'active' : '' }}"><a href="{{ url('/qac-members') }}">QAC Members</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Events & Activities</a>
                        <ul class="sub-menu">
                            <li class="{{ request()->is('iqac-events-list') ? 'active' : '' }}"><a href="{{ url('/iqac-events-list') }}">IQAC Events</a></li>
                            {{--<li class="{{ request()->is('poe-events-list') ? 'active' : '' }}"><a href="{{ url('/poe-events-list') }}">PoE Events</a></li>--}}
                            <li class="{{ request()->is('recent-activities') ? 'active' : '' }}"><a href="{{ url('/recent-activities') }}">Recent Activities</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('gallery') ? 'active' : '' }}"><a href="{{ url('/gallery') }}">Gallery</a></li>
                    <li><a href="{{ url('#') }}">QA Process</a></li>
                    <li><a href="#">Staffs</a>
                        <ul class="sub-menu">
                            <li class="{{ request()->is('executive-staff') ? 'active' : '' }}"><a href="{{ url('/executive-staff') }}">Executive Staff</a></li>
                            <li class="{{ request()->is('office-staff') ? 'active' : '' }}"><a href="{{ url('/office-staff') }}">Office Staff</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('#') }}">Newsletter</a></li>
                    <li><a href="#">Downloads</a>
                        <ul class="sub-menu">
                            <li class="{{ request()->is('manual') ? 'active' : '' }}"><a href="{{ url('/manual') }}">Manual</a></li>
                            <li class="{{ request()->is('documents') ? 'active' : '' }}"><a href="{{ url('/documents') }}">Documents</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
                </ul> <!-- /.main-menu -->
            </nav> <!-- /.main-navigation -->
        </div> <!-- /.container -->
    </div> <!-- /.nav-bar-main -->
</header> <!-- /.site-header -->
<div class="container">
    <div class="row" style="height: 25px;">
        <div class="col-md-12">
            <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                <h2 class="text-capitalize text-danger" style="font-weight: bold;margin: 0;">Site Is Under Construction</h2>
            </marquee>
        </div>
    </div>
</div>
