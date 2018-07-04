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
            <h1 style="font-family: Montserrat; text-align: center">About Us</h1>
        </div>
		<br>
		<div class="card card-default">
			<div class="card-body">
				@foreach(App\frontpageoption::where('element_name', 'front_about')->get() as $about){!! nl2br(e($about->about)) !!}@endforeach
			</div>
		</div>
		<br>
		<div class="card card-default">
			<div class="card-body">
	            <center>
	                <div class="col-lg-6 col-lg-offset-3">
	                    <a href="http://saddind.co.uk/author-appeals-for-help-to-launch-literary-festival/" target="_blank"><img src="images/Sadd-Ind-header-2-webheader-1.png" style="width: 45%;"></a>
	                    <a href="https://bookslifeandeverything.blogspot.co.uk/2016/10/saddleworth-literary-festival-2016.html" target="_blank"><img src="images/blae-web-header.png" style="width: 41%;"></a>
	                </div>
	            </center>
			</div>
		</div>
	</div>

@endsection
@section('content_desktop_render')
	<div class="jumbotron" style="text-align: center; font-family: Montserrat; 
	    @if($month == 'Dec')
	        background-image: url({{asset('images/bg2.jpg')}}); 
	    @else
	        background-image: url({{asset('images/bg1.jpg')}}); 
	    @endif
	    background-size:100%;  margin-top: -25px !important">
        <div class="container">
            <div class="jumbotron" style=" padding:5px;background-color: rgba(0,0,0,0.5);color: white; font-weight: 700; font-size: 20px !important ">
                <h1 style="opacity: 2 !important; font-size: 3.5rem !important">Saddleworth Literary Festival</h1>
                <hr style="border-color: white; margin:1px ">
                <h2 style="font-size: 2.5rem ">About</h2>
            </div>
            @include('tickets')
        </div>
	</div>

	<div class="container">

		@if(Session::has('edited'))
			<div class="alert alert-success">
				{{Session::get('edited')}}
			</div>
		@endif
		<div class="row col-12 justify-content-between" style="padding: 0 !important; margin: 0 !important">
			<div class="col-lg-2 col-md-2">
				<a href="{{route('welcome')}}"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
			@if(Auth::user() and Auth::user()->admin == 1)
				<div class="col-lg-4">
					<div class="card card-default">
						<div class="card-header" style="text-align: center; background-image: url({{asset('haz.jpg')}}); background-size:100%; color:white; font-family: Montserrat; font-weight: 700;">Admin Options</div>
						<div class="card-body" style="color:red">
							Please go to admin dashboard to edit page
						</div>
					</div>
				</div>
			@endif

		</div>

		<div class="page-header">
			<h1 style="color:white; text-align: center">About Us</h1>
			<p style="color:white; text-align: center">Who Are We?</p>
		</div>
		<br>
		<div class="row col-12">
			<div class="col-lg-4 offset-lg-2 col-md-4 offset-md-1" style="color:white; ">
				<h1 style="font-size: 50px !important">We Are The Saddleworth Literary Festival</h1>
			</div>
			<div class="col-lg-6 col-md-6" style="color:white; ">
			    @foreach(App\frontpageoption::where('element_name', 'front_about')->get() as $about){!! nl2br(e($about->about)) !!}@endforeach

			</div>
			<div class="col-lg-12 col-md-12 mt-2" style="padding-bottom: 10px">
				<center>
		            <div class="col-lg-5 pull-left col-md-5">
		                <hr style="border-color:white; margin-bottom: 5px">
		                <hr style="border-color:white; margin-top: 5px"> 
		            </div>
		            <p style="display: inline-block; color:white; font-family: Montserrat; margin-top:14px; ">Articles</p>
		            <div class="col-lg-5 pull-right col-md-5">
		                <hr style="border-color:white; margin-bottom: 5px">
		                <hr style="border-color:white; margin-top: 5px"> 
		            </div>
		        </center>
		        <center>
		            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
		                <a href="http://saddind.co.uk/author-appeals-for-help-to-launch-literary-festival/" target="_blank" ><img src="{{asset('images/Sadd-Ind-header-2-webheader-1.png')}}" style="width: 45%;" class="social"></a>
		                <a href="https://bookslifeandeverything.blogspot.co.uk/2016/10/saddleworth-literary-festival-2016.html" target="_blank"><img src="{{asset('images/blae-web-header.png')}}" style="width: 41%;"  class="social"></a>
		            </div>
		        </center>
			</div>
		</div>
	</div>
@endsection
