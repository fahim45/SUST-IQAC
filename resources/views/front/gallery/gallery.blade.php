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
                {{--<div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search">
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->--}}

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
                        @foreach($galleries as $gallery)
                        <div class="col-md-4 mix @if($gallery->image_type==1){{'workshop'}} @elseif($gallery->image_type==2){{'training'}} @elseif($gallery->image_type==3){{'meeting'}} @else{{'others'}}@endif" data-cat="3">
                            <div class="gallery-item">
                                <a class="fancybox" rel="gallery1" href="{{ asset($gallery->uploaded_image) }}">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset($gallery->uploaded_image) }}" alt="{{ $gallery->image_title }}"/>
                                    </div>
                                    <div class="gallery-content">
                                        <h4 class="gallery-title">{{ $gallery->image_title }}</h4>
                                    </div>
                                </a>
                            </div> <!-- /.gallery-item -->
                        </div> <!-- /.col-md-4 -->
                        @endforeach
                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

                {!! $galleries->links('vendor.pagination.simple-default') !!}

                {{--<div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="#">Load more images</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->--}}

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->
    @endsection
