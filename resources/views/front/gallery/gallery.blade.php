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
    Gallery | IQAC-SUST
    @endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search">
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Filter Controls</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
                            <li class="filter" data-filter="all">Show All</li>
                            <li class="filter" data-filter="workshop">Workshop/Seminar</li>
                            <li class="filter" data-filter="training">Training</li>
                            <li class="filter" data-filter="meeting">Meeting</li>
                            <li class="filter" data-filter="others">Others</li>
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Sort Controls</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
                            <li class="sort active" data-sort="default" data-order="desc">Default</li>
                            <li class="sort" data-sort="data-cat" data-order="asc">Ascending</li>
                            <li class="sort" data-sort="data-cat" data-order="desc">Descending</li>
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-3 -->

            <div class="col-md-9">
                <div class="row">

                    <div id="Grid">


                        <div class="col-md-4 mix workshop" data-cat="3">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery1.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery1.jpg" alt=""/>
                                    </div>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title">2014 Faculty Biennial</h4>
                                    </div>
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 mix training" data-cat="1">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery2.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery2.jpg" alt="" />
                                    </div>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title">Contemporary Southeastern Art</h4>
                                    </div>
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 mix meeting" data-cat="2">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery3.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery3.jpg" alt="" />
                                    </div>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title">Juried Student Exhibition</h4>
                                    </div>
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 mix training" data-cat="2">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery4.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery4.jpg" alt="" />
                                    </div>
                                    {{--<div class="gallery-content">
                                        <h4 class="gallery-title">Game Changer II</h4>
                                        <p class="small-text">Paintings and Sculpture forms.</p>
                                    </div>--}}
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 mix meeting" data-cat="3">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery5.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery5.jpg" alt="" />
                                    </div>
                                    {{--<div class="gallery-content">
                                        <h4 class="gallery-title">Beauty of Bucknell</h4>
                                        <p class="small-text">Lorem ipsum sit amet, consectetur elit.</p>
                                    </div>--}}
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 mix workshop" data-cat="2">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery6.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery6.jpg" alt="" />
                                    </div>
                                    {{--<div class="gallery-content">
                                        <h4 class="gallery-title">Royal Fort House</h4>
                                        <p class="small-text">University Institute for Advanced Studies.</p>
                                    </div>--}}
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 mix others" data-cat="2">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery7.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery7.jpg" alt="" />
                                    </div>
                                    {{--<div class="gallery-content">
                                        <h4 class="gallery-title">Royal Fort House</h4>
                                        <p class="small-text">University Institute for Advanced Studies.</p>
                                    </div>--}}
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                        <div class="col-md-4 mix others" data-cat="2">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery8.jpg">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery8.jpg" alt="" />
                                    </div>
                                    {{--<div class="gallery-content">
                                        <h4 class="gallery-title">Royal Fort House</h4>
                                        <p class="small-text">University Institute for Advanced Studies.</p>
                                    </div>--}}
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->

                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="#">Load more images</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->
    @endsection
