@extends('layouts.app')
@section('pageTitle')
	About
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
            <h1 style="font-family: cdreams; text-align: center">About Us</h1>
        </div>
		<br>
		<div class="card-body" style="font-family: cdreams;font-size: 16px; font-weight: bold;">
			@foreach(App\frontpageoption::where('element_name', 'front_about')->get() as $about){!! nl2br(e($about->data)) !!}@endforeach
		</div>
		<br>
	</div>

@endsection
@section('content_desktop_render')
    <div class="d-none d-lg-block">
            <div class="container-flex" style="margin-top: -15px">

            <div class="row" style="margin:0px; padding: 0px;margin-top:100px; left:20vw">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                </div>
            </div>
        </div>
    </div>
	<div class="container animated fadeIn">

		@if(Session::has('edited'))
			<div class="alert alert-success">
				{{Session::get('edited')}}
			</div>
		@endif


		<div class="page-header mt-5  " style="border-color:black; font-family: cdreams; font-weight: bold">
			<h1 style="color:black;text-align: center">About Us</h1>
			<p style="color:black;text-align: center">Who Are We?</p>
		</div>
		<br>
		<div class="row col-12">
			<div class="col-lg-6  " style="; ">
				<h1 style="font-size: 60px !important; text-align: center; font-family: cdreams">We Are The Saddleworth Literary Festival</h1>
			</div>
			<div class="col-lg-6 " style="font-family: cdreams;font-size: 16px; font-weight: bold">
			    @foreach(App\frontpageoption::where('element_name', 'front_about')->get() as $about){!! nl2br(e($about->data)) !!}@endforeach

			</div>
		</div>
	</div>

@endsection
