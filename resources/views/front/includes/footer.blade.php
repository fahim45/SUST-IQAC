<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 21-Nov-17
 * Time: 4:02 PM
 */
?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Contact Us</h4>
                    <p>Mailing address:<br/>IQAC, SUST<br/> Sylhet-3114, Bangladesh</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">About Us</h4>
                    <ul class="list-links">
                        <li><a href="{{ url('/our-mission') }}">Our Mission</a></li>
                        <li><a href="{{ url('/our-vision') }}">Our Vision</a></li>
                        <li><a href="{{ url('/our-objectives') }}">Our Objectives</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Important Link</h4>
                    <ul class="list-links">
                        <li><a href="http://www.sust.edu" target="_blank">SUST</a></li>
                        <li><a href="http://www.ugc.gov.bd/en" target="_blank">UGC</a></li>
                        <li><a href="http://www.heqep-ugc.gov.bd/" target="_blank">HEQEP</a></li>
                        <li><a href="http://www.qau.gov.bd/" target="_blank">QAU</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Information</h4>
                    <ul class="list-links">
                        <li><a href="{{ url('/executive-staff') }}">Executive Staffs</a></li>
                        <li><a href="{{ url('/office-staff') }}">Office Staffs</a></li>
                        <li><a href="{{ url('#') }}">FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <ul class="footer-media-icons">
                        <li><a href="#" title="Facebook" class="fa fa-facebook"></a></li>
                        <li><a href="#" title="Twitter" class="fa fa-twitter"></a></li>
                        <li><a href="#" title="Pinterest" class="fa fa-pinterest"></a></li>
                        <li><a href="#" title="Google+" class="fa fa-google-plus"></a></li>
                        <li><a href="#" title="Instagram" class="fa fa-instagram"></a></li>
                        <li><a href="#" title="RSS" class="fa fa-rss"></a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- /.row -->

        <div class="bottom-footer">
            <div class="row">
                <div class="col-md-5">
                    <p class="small-text">&copy; Copyright 2017. All Rights Reserved</p>
                </div> <!-- /.col-md-5 -->
                <div class="col-md-7">
                    <ul class="footer-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('#') }}">Newsletter</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->
        </div> <!-- /.bottom-footer -->
    </div> <!-- /.container -->
</footer> <!-- /.site-footer -->
