<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 21-Nov-17
 * Time: 4:05 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IQAC-SUST">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="{{ asset('/front/') }}/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="{{ asset('/front/') }}/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="{{ asset('/front/') }}/css/animate.css" rel="stylesheet" media="screen">
    <link href="{{ asset('/front/') }}/css/style.css" rel="stylesheet" media="screen">
    <link href="{{ asset('/front/') }}/css/customize.css" rel="stylesheet" media="screen">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/front/') }}/images/ico/favicon.ico">

    <!-- JavaScripts -->
    <script src="{{ asset('/front/') }}/js/jquery-1.10.2.min.js"></script>
    <script src="{{ asset('/front/') }}/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('/front/') }}/js/modernizr.js"></script>

</head>
<body>

<!-- This one in here is responsive menu for tablet and mobiles -->
@include('front.includes.header')


@yield('content')

<!-- begin The Footer -->
@include('front.includes.footer')

<script src="{{ asset('/front/') }}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins.js"></script>
<script src="{{ asset('/front/') }}/js/custom.js"></script>

</body>

</html>
