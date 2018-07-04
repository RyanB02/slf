@extends('layouts.app')

@section('content_desktop_render')
    <div class="jumbotron" style="text-align: center; font-family: Montserrat; 
        @if($month == 'Dec')
            background-image: url({{asset('images/bg2.jpg')}}); 
        @else
            background-image: url({{asset('images/bg1.jpg')}}); 
        @endif
        background-size:100%;  margin-top: -25px !important">
        <div class="container">
            <div class="jumbotron" style=" padding:1px;background-color: rgba(0,0,0,0.5);color: white; font-weight: 700 ">
                <h1 style="opacity: 2 !important">Saddleworth Literary Festival</h1>
                <h2>Home</h2>
            </div>
			@include('association')
        </div>
    </div>

	<div class="container hidden-md">
		<a  href="{{route('desktop_about')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<center>
						<br>
						<i class="fa fa-info fa-5x" aria-hidden="true"></i>
						<h4>About Us</h4> 
					</center>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_upcoming')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-calendar fa-5x" aria-hidden="true" style="padding-top: 8%"></i>
							<h4>Upcoming Events</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_guests')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-address-book fa-5x" aria-hidden="true" style="padding-top: 10%"></i>
							<h4> Guests {{config('app.next_festival_year')}}</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_featuring')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-star fa-5x" aria-hidden="true" style="padding-top: 10%"></i>
							<h4>Featuring</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_contact')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-question-circle fa-5x" aria-hidden="true" style="padding-top: 8%"></i>
							<h4>Contact Us</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="hidden-lg">
		<a  href="{{route('desktop_about')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<center>
						<br>
						<i class="fa fa-info fa-5x" aria-hidden="true"></i>
						<h4>About Us</h4> 
					</center>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_upcoming')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-calendar fa-5x" aria-hidden="true" style="padding-top: 8%"></i>
							<h4>Upcoming Events</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_guests')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-address-book fa-5x" aria-hidden="true" style="padding-top: 10%"></i>
							<h4> Guests {{config('app.next_festival_year')}}</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_featuring')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-star fa-5x" aria-hidden="true" style="padding-top: 10%"></i>
							<h4>Featuring</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
		<a  href="{{route('desktop_contact')}}" style="cursor: pointer;" id="about_circ"> 
			<div class="col-lg-2 col-md-2">
				<div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
					<div class="panel-body">
						<center>
							<i class="fa fa-question-circle fa-5x" aria-hidden="true" style="padding-top: 8%"></i>
							<h4>Contact Us</h4>
						</center>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-md-12">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading" style="text-align: center">Welcome</div>
				<div class="panel-body">
					<div class="alert alert-info">
						This Section Is Incomplete
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('content_mobile_render')

<html>
    <body >
        <a href="javascript:" id="return-to-top" style="z-index: 1000;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        <div class="jumbotron" style="text-align: center; font-family: Montserrat; background-repeat: no-repeat; background-color: #303D3F ;
        @if($month == 'Dec')
            background-image: url('images/bg2.jpg'); 
        @else
            background-image: url('images/bg1.jpg');
        @endif
        background-size:100%;  margin-top: -25px !important">
            <div class="container">
                <div class="jumbotron" style=" padding:1px;background-color: rgba(0,0,0,0.5);color: white; font-weight: 700 ">
                    <h2 style="opacity: 2 !important">Saddleworth Literary Festival</h2>
                </div>
            </div>
        </div>
        <div class="alert alert-info" style=" border-radius: 0 !important; text-align: center">
            In Association with Oldham Libraries
        </div>
        <div class="container" >
            <a href="{{route('mobile_about')}}" style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default"  style="background-color: #F4F4F4 !important"  >
                    <div class="panel-body">
                        <i class="fa fa-info fa-2x" aria-hidden="true"> About Us</i>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('mobile_upcoming')}}" style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important">
                    <div class="panel-body">
                        <i class="fa fa-calendar fa-2x" aria-hidden="true"> Upcoming Events</i>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('mobile_featured')}}" style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important" >
                    <div class="panel-body">
                        <i class="fa fa-star fa-2x" aria-hidden="true"> Featuring</i>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('guests')}}" style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important" ">
                    <div class="panel-body">
                        <i class="fa fa-address-book fa-2x" aria-hidden="true"> Guests {{config('app.next_festival_year')}}</i>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('mobile_contact')}}" style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important" >
                    <div class="panel-body">
                        <i class="fa fa-question-circle fa-2x" aria-hidden="true"> Ask us a question</i>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
        </div>

    </body>
</html>
@endsection