<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
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
		<div class="row col-12">
			<div class=" col-6 col-sm-4 col-md-4">
				<a href="#" onclick="history.back();" style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		<br>
		<div class="row col-12" style="padding: 0 !important; margin: 0 !important; text-align: center ">
				<div class=" col-sm-6 col-10 col-md-6 offset-1 offset-sm-0" style="margin-bottom: 10px">
					<div class="card card-default">
				    	<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
				    		<h4 style="text-align: left;">'Buzz' Hawkins of The Bradshaws</h4>
				    	</div>
			       		<img class="card-img-top" src="{{asset('uploads/featured/buzz.jpg')}}" style="width: 100%; height: 250px; margin:0px !important;">
			       		<a href="http://www.thebradshaws.biz/" target="_blank">
			       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px;">
			                	Click here to learn more
			       			</div>
			       		</a>
		       		</div>	
		        </div>
		       <div class="col-sm-6 col-10 col-md-6 offset-1 offset-sm-0" >
		       		<div class="card card-default" style="margin-bottom: 10px">
				    	<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
				    		<h4 style="text-align: left;">Mike Sweeney</h4>
				    	</div>
			       		<img class="card-img-top" src="{{asset('uploads/featured/mike.jpg')}}" style="width: 100%; height: 250px; margin:0px !important;">
			       		<a href="https://en.wikipedia.org/wiki/Mike_Sweeney_(DJ)" target="_blank">
			       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px;">
			                	Click here to learn more
			       			</div>
			       		</a>
			       	</div>	
		        </div>
		       <div class="col-sm-6 col-10 col-md-6 offset-1 offset-sm-0" >
		       		<div class="card card-defualt " style="margin-bottom: 10px">
				    	<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
				    		<h4 style="text-align: left;">Patron - John Henshaw</h4>
				    	</div>
				    	<img class="card-img-top" src="{{asset('uploads/featured/john.jpg')}}" alt="Card image cap" style="width: 100%; height: 250px; margin:0px !important;">
			       		<a href="https://en.wikipedia.org/wiki/John_Henshaw" target="_blank">
			       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px;">
			                	Click here to learn more
			       			</div>
			       		</a>	
		       		</div>
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
		<div class="row col-12" style="text-align: center; ">
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

		</div>
      </div>
<br><br>

@endsection
