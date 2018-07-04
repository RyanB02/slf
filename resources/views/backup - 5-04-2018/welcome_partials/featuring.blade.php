
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
		<div class="row col-12" style="text-align: center; ">
			

		</div>
	</div>

@endsection
@section('content_desktop_render')
<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
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
                <h2 style="font-size: 2.5rem ">Featuring</h2>
            </div>
            @include('tickets')
        </div>
	</div>
	<div class="container">
		<div class="row col-12" style="padding: 0 !important; margin: 0 !important">
			<div class="col-lg-2 col-md-2">
				<a href="{{route('welcome')}}"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		<br>
		<div class="col-12">
			<div class="card card-default" style="text-align: center">
				<div class="card-header">
					Notice
				</div>
				<div class="card-body">
					We are done for 2018 but we will be back in 2019, so watch this space!
				</div>
			</div>
		</div>

      </div>
<br><br>

@endsection
