
@extends('layouts.app')
@section('pageTitle')
	Featuring
@endsection

<?php
$month = Config::get('app.month');;
?>
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_mobile_render')
	<div class="container">
		<div class="page-header" style="margin-top: 15px; color: rgba(0,0,0,0.7) !important;border-color: rgba(0,0,0,0.6) !important ">
            <h1 style="font-family: Montserrat; text-align: center">Featuring Guests</h1>
        </div>
		<br>
		<div class="col-12">
			<br>
            <h3 style="color:grey; text-align: center">No featured guests have been added for {{Config('app.next_festival_year')}} </h3>
		</div>
	</div>

@endsection
@section('content_desktop_render')
<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
    <div class="d-none d-lg-block">
            <div class="container-flex" style="margin-top: -15px">

            <div class="row" style="margin:0px; padding: 0px;margin-top:100px; left:20vw">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                </div>
            </div>
        </div>
    </div>
    <br>
	<div class="container animated fadeIn">
		<div class="row col-12" style="text-align: center; ">
			@if(App\Featured::count())
				@foreach(App\Featured::get() as $person)
					<div class="col-4" style=" margin-bottom: 10px">
						<div class="card card-default">
							<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%;">
					    		<h4 style="text-align: left;">{{$person->name}}<h4>
					    	</div>
					    	<img class="card-img-top" src="{{asset("uploads/featured/$person->image")}}" style="width: 100%; height: 250px; margin:0px !important;">
				       		<a href="{{$person->website}}" target="_blank">
				       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px;">
				                	Click here to learn more
				       			</div>
				       		</a>
						</div>
					</div>
				@endforeach
			@else
				<div class="col-12">
					<br>
		            <h3 style="color:grey; text-align: center">No featured guests have been added for {{Config('app.next_festival_year')}} </h3>
				</div>
			@endif

		</div>
      </div>
<br><br>

@endsection
