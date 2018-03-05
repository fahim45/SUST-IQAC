<?php
/**
 * Created by PhpStorm.
 * User: Fahim_Foysal_Kamal
 * Date: 28-Feb-18
 * Time: 11:31 AM
 */
?>


@extends('front.master')

@section('title')
    Search Result | IQAC-SUST
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->

            <div class="col-md-12">
                <h2 class="title text-center">You Are Now Search
                    <b style="color:#008000;">
                        <?php if (isset($_GET['search'])) {
                            echo $_GET['search'];
                        }; ?>
                    </b>
                </h2>
                @if($all_results)

                    @foreach($all_results as $results)

                        <a href="{{ url('/recent-activities-details/'.$results->id)}}">
                            <p style="font-size: 25px;">{{ $results->activity_title }}</p>
                        </a>
                        <hr>

                    @endforeach

                @else
                    <h2>Your Search Result Not Found</h2>
                @endif
                <br/>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $all_results->links() }}
                    </div>
                </div>
                <br/>
            </div> <!-- /.col-md-12 -->

        </div>
    </div>

@endsection

