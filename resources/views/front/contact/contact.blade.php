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
    Contact | IQAC-SUST
    @endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="contact-map">
                    <div class="google-map-canvas" id="map-canvas" style="height: 541px;">
                        {!! Mapper::render() !!}
                    </div>
                </div>
            </div> <!-- /.col-md-5 -->

            <div class="col-md-7">
                <div class="contact-page-content">
                    <!--<div class="contact-heading">-->
                    <h1 class="text-center" style="font-weight: 400;margin-top: 0;">Contact With Us</h1>
                    <p>For your kind information, Please contact with us.....</p>
                    <!--</div>-->
                    <div class="contact-form clearfix">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success"><p class="text-center">{{$message}}</p></div>
                        @endif
                        {!! Form::open(['url' => '/contact/send-mail', 'method'=>'post', 'class'=>'form-horizontal']) !!}
                            <div class="form-group">
                                {{ Form::label('first_name', 'First Name',['class'=>'col-sm-3']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('first_name', $value=null, ['class'=>'form-control', 'maxlength'=>'30', 'placeholder'=>'Your First Name', 'id'=>'first_name', 'required' ]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('last_name', 'Last Name',['class'=>'col-sm-3']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('last_name', $value=null, ['class'=>'form-control', 'maxlength'=>'30', 'placeholder'=>'Your Last Name', 'id'=>'last_name', 'required' ]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('email_address', 'Email Address',['class'=>'col-sm-3']) }}
                                <div class="col-sm-9">
                                    {{ Form::text('email_address', $value=null, ['class'=>'form-control', 'maxlength'=>'30', 'placeholder'=>'Your Email Address', 'id'=>'email_address', 'required' ]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('message', 'Message',['class'=>'col-sm-3']) }}
                                <div class="col-sm-9">
                                    {{ Form::textarea('message', $value=null, ['class'=>'form-control', 'id'=>'message', 'required' ]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    {{ Form::submit('Submit', ['name'=>'btn','class'=>'btn btn-primary btn-block']) }}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div> <!-- /.col-md-7 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    @endsection
