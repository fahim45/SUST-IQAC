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
    Office Staff | IQAC-SUST
@endsection

@section('content')
    <style>
        .navy-bg {
            background-color: #F3F3F3;
            color: #ffffff;
        }
        .m-b-md {
            height: 75px;
            margin-bottom: 20px;
        }
        img.circle-border {
            width: 100%;
            overflow: hidden;
        }
        img {
            -webkit-transition: all 0.5s ease;
        }
        img:hover {
            transform: scale(1.1);
        }
    </style>
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-12">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Office Staffs</h4>
                    </div>
                    <div class="office-staff" style="margin-top: 10px;">
                        <div class="col-lg-4">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        Md. Abdur Rouf
                                    </h2>
                                    <h4><b>Office Manager</b></h4>
                                </div>
                                <img src="{{ asset('/front/') }}/images/blog/author.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>IQAC, SUST</strong><br>
                                    <b>Call:</b> 01721260416<br>
                                    <b>Email:</b> <a href="mailto:rouf84-iqac@sust.edu">rouf84-iqac@sust.edu</a><br>
                                </address>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        Ashok Barman Ashim
                                    </h2>
                                    <h4><b>Accounts Officer</b></h4>
                                </div>
                                <img src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/15349763_10207512324462069_1854948665503529698_n.jpg?_nc_eui2=v1%3AAeG_z8O8GAMoARBl3RUO64k7EbJn0vHhWZLfHzVUzMWkHGPBqAcUwiipQfGXQ-Ru_9JlIOBFSSjAU9eOv3hECj-iTsHNYC4mwrgk_k0pL-zZwg&oh=ad6405490709bf3c2203853ee569a153&oe=5A98E5A4"
                                     class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>IQAC, SUST</strong><br>
                                    <b>Call:</b> 01711276070<br>
                                    <b>Email:</b> <a href="mailto:ashioknitu-iqac@sust.edu">ashioknitu-iqac@sust.edu</a><br>
                                </address>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        Fahim Foysal Kamal
                                    </h2>
                                    <h4><b>IT Manager cum Communication Officer</b></h4>
                                </div>
                                <img src="{{ asset('/front/') }}/images/fahim.jpg" class="img-circle circle-border m-b-md" alt="profile" style="height: 290px;">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>IQAC, SUST</strong><br>
                                    <b>Call:</b> 01722858886<br>
                                    <b>Email:</b> <a href="mailto:fahim-iqac@sust.edu">fahim-iqac@sust.edu</a><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-md-8 -->
            <div class="col-md-12">
                <div class="widget-main">
                    <div class="mlss">
                        <div class="col-lg-4">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        Md. Parvez Mia
                                    </h2>
                                    <h4><b>MLSS</b></h4>
                                </div>
                                <img src="{{ asset('/front/') }}/images/parvez.jpg" class="img-circle circle-border m-b-md" alt="profile" style="height: 290px;">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>IQAC, SUST</strong><br>
                                    <b>Call:</b> 01774912523<br>
                                    <b>Email:</b> <a href="mailto:parvez.iqac@gmail.com">parvez.iqac@gmail.com</a><br>
                                </address>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget-head-color-box navy-bg p-lg text-center">
                                <div class="m-b-md">
                                    <h2 class="font-bold no-margins">
                                        Md. Yamin Ahmed
                                    </h2>
                                    <h4><b>MLSS</b></h4>
                                </div>
                                <img src="{{ asset('/front/') }}/images/yamin.jpg" class="img-circle circle-border m-b-md" alt="profile" style="height: 290px;">
                            </div>
                            <div class="widget-text-box">
                                <address class="m-t-md">
                                    <strong>IQAC, SUST</strong><br>
                                    <b>Call:</b> 01516738295<br>
                                    <b>Email:</b> <a href="mailto:yaminahmed0179@gmail.com">yaminahmed0179@gmail.com</a><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Here begin Sidebar -->
            <!---->
        </div>
    </div>
@endsection
