@extends('layouts.app')
@section('pageTitle')
	Events
@endsection
<?php
use App\Event;
$month = Config::get('app.month');;
?>
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_mobile_render')
	<div class="container">
		<div class="row">
			<div class="col-xs-1 col-sm-4">
				<a href="#" onclick="history.back();" style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		<!--
		<div class="hidden-xs">
			@/if(App\Event::get()->count())
				@/foreach(App\Event::get() as $event)
					<div class="col-sm-6 col-xs-12" >
						<div class="card card-default " style="height:150px;">
							<div class="card-body">
								<div class="col-sm-4 col-xs-4" style="background-color: #F3323F; height: 120px; color:white; padding: 0px; border-radius: 5px">
									<center>
										<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{/{$event->date[0]}}{/{$event->date[1]}}</a>
									</center>
									<hr style="margin:0px">
									<center>
										<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{/{$event->date[3]}}{/{$event->date[4]}}</a>
									</center>
									<hr style="margin:0px">
									<center>
										<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">{/{$event->date[6]}}{/{$event->date[7]}}{/{$event->date[8]}}{/{$event->date[9]}}</a>
									</center>
								</div>
								<div class="col-sm-8 col-xs-8">
									<div class="page-header animated fadeInDown" style="border-color: black; font-size: 20px; margin-bottom: 0px; padding-bottom: 0px; margin-top: 16px">{/{$event->title}}</div><br>
									<a  data-toggle="collapse" data-target="#mobile{/{$event->id}}" class="btn btn-default btn-sm pull-right animated fadeInUp">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				@/endforeach
				@/foreach(App\Event::get() as $event)
					<div class="col-sm-12 col-xs-12">
						<div id="mobile{/{$event->id}}" class="card card-default collapse" >
							<div class="card-heading ">
								{/{$event->title}}
								<i class="fa fa-times-circle fa-2x pull-right closeall" aria-hidden="true" style="cursor: pointer; color:grey"></i>
							</div>
							<div class="card-body">
								<div class="col-sm-2 col-xs-12" style="background-color: #F3323F; height: 120px; color:white; padding: 0px; border-radius:5px">
									<center>
										<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px"><a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{/{$event->date[0]}}{/{$event->date[1]}}</a></a>
									</center>
									<hr style="margin:0px">
									<center>
										<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px"><a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{/{$event->date[3]}}{/{$event->date[4]}}</a></a>
									</center>
									<hr style="margin:0px">
									<center>
										<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">{/{$event->date[6]}}{/{$event->date[7]}}{/{$event->date[8]}}{/{$event->date[9]}}</a>
									</center>
								</div>
								<div class="col-sm-4 col-xs-12" style="font-size: 15px; ">
									<a style="font-size: 15px; text-decoration: none; color:inherit">Title: {/{$event->title}}<br></a>
									<a style="font-size: 15px; text-decoration: none; color:inherit">Description:<br></a>
									{/{$event->description}}
								</div>
								<div class="col-sm-3 col-xs-12" style="font-size: 20px;border-right: 1px solid;height:120px  ">
									Countdown:<br>
									<div class="alert alert-danger" style="padding:3px; text-align: center; font-size: 15px">Coming Soon</div>
								</div>
								<div class="col-sm-3 col-xs-12" style="font-size: 20px; height:120px">
									Location:<br>
									{/{$event->location}} <br>
								</div>
							</div>
							<div class="card-footer" >
								<b>&copy; </?php echo date('Y');?> Saddleworth Literary Festival</b>
								<div class="pull-right" style="bottom:0; color:grey;">Added by: {/{$event->added_by}}</div>
							</div>
						</div>
					</div>	
				@/endforeach
			@/else
				<div class="alert alert-danger">No events have been added</div>
			@/endif
		</div>-->
		<br>
			<div class="alert alert-danger">We have recently revamped this page but we can't yet display it on your device, we are working hard to get it onto your device very soon!</div>
			<center>
		        <div class="col-sm-8 col-sm-offset-1 col-xs-12 col-md-9 " style="padding-bottom:16px">
		        	<div class="card card-default">
		        		<div class="card-body" style="text-align: center">
		        			<h1 style="margin:0px; padding: 0px; " id="demo3">
		        				March 24th
		        			</h1>
		        			<h1>Day 1</h1>
		        			<h4> 10:30am – 5:30pm</h4>
		        		</div>
		        	</div>
		        </div>
		        <div class="col-sm-8 col-xs-12 col-md-9 " style="padding-bottom:16px">
		        	<div class="card card-default">
		        		<div class="card-body" style="text-align: center">
		        			<h1 style="margin:0px; padding: 0px; " id="demo4">
		        				March 25th
		        			</h1>
		        			<h1>Day 2</h1>
		        			<h4> 10:30am – 5:30pm</h4>
		        		</div>
		        	</div>
		        </div>
		    </center>


	</div>
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/app.js')}}"></script>
	@if(App\Event::get()->count())
		@foreach(App\Event::get() as $event)
			<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
		    <script type="text/javascript">
				$('.clock{{$event->id}}').countdown('{{$event->date}} 10:00:00')
				.on('update.countdown', function(event) {
				  var format = '%H:%M:%S';
				  if(event.offset.totalDays > 0) {
				    format = '%-d day%!d ' + format;
				  }
				  if(event.offset.weeks > 0) {
				    format = '%-w week%!w ' + format;
				  }
				  $(this).html(event.strftime(format));
				})
				.on('finish.countdown', function(event) {
				  $(this).html('--')
				    .parent().addClass('disabled');

				});
		    </script>
		@endforeach
	@endif
	<script type="text/javascript">
		  $('.collapse').on('show.bs.collapse', function () {
		    $('.collapse.in').each(function(){
		        $(this).collapse('hide');
		    });
		  });
	</script>
	<script type="text/javascript">
		$('.closeall').click(function(){
		  $('.collapse.in')
		    .collapse('hide');
		});
	</script>
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
                <h2 style="font-size: 2.5rem ">Upcoming Events</h2>
            </div>
            @include('tickets')
        </div>
	</div>
	<div class="container">
		<div class="row" style="padding: 0 !important; margin: 0 !important">
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
				<div class="col-lg-6 col-md-6">
					<div class="card card-default" >
						<div class="card-body"> 
							2 Events in 2018 <div class="pull-right">please note that this page is not yet complete</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 pull-right">
					<div class="card card-default">
						<div class="card-header" style="text-align: center; background-image: url({{asset('haz.jpg')}}); font-weight: 700; color:white; font-family: sans-serif; background-size: 100%">Admin Options</div>
						<div class="card-body" style="color:red">
							WIP
						</div>
					</div>
				</div>
			@else
				<div class="col-lg-10 col-md-10">
					<div class="card card-default" >
						<div class="card-body"> 
							2 Events in 2018
						</div>
					</div>
				</div>
			@endif
		</div>
		<br>
		<div class="row col-12">
			@if(App\Event::get()->count())
				@foreach(App\Event::get() as $event)
					<div class="col-lg-4 col-md-4" >
						<div class="card card-default " style="height:150px;">
							<div class="card-body">
								<div class="row" style="padding:0px !important; margin: 0px !important">
									<div class="col-lg-4 " style="background-color: #F3323F; height: 120px; color:white; padding: 0px; border-radius: 5px">
										<center>
											<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[0]}}{{$event->date[1]}}</a>
										</center>
										<hr style="margin:0px">
										<center>
											<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[3]}}{{$event->date[4]}}</a>
										</center>
										<hr style="margin:0px">
										<center>
											<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">{{$event->date[6]}}{{$event->date[7]}}{{$event->date[8]}}{{$event->date[9]}}</a>
										</center>
									</div>
									<div class="col-lg-8 ">
										<div class=" animated fadeInDown" style="border-bottom:1px solid ;border-color: black; font-size: 20px; margin-bottom: 0px; padding-bottom: 0px; margin-top: 16px" >{{$event->title}}</div><br>
										<a data-toggle="collapse" data-target="#{{$event->id}}" class="btn btn btn-primary btn-sm pull-right animated fadeInUp text-light">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<br>
			<div id="collapse_group_events">
				@foreach(App\Event::get() as $event)
					<div class="col-lg-12 col-md-12 ">
						<div id="{{$event->id}}" class="collapse" data-parent="#collapse_group_events" >
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="card card-default " >
										<div class="card-header ">
											{{$event->title}}
										</div>
										<div class="card-body aimated fadeIn">
											<div class="row" style="padding: 0px !important; margin: 0px !important">
												<div class="col-lg-2 col-md-2" style="background-color: #F3323F; height: 120px; color:white; padding: 0px; border-radius:5px">
													<center>
														<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px"><a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[0]}}{{$event->date[1]}}</a></a>
													</center>
													<hr style="margin:0px">
													<center>
														<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px"><a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[3]}}{{$event->date[4]}}</a></a>
													</center>
													<hr style="margin:0px">
													<center>
														<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">{{$event->date[6]}}{{$event->date[7]}}{{$event->date[8]}}{{$event->date[9]}}</a>
													</center>
													</div>
													<div class="col-lg-10 col-md-10" style="font-size: 15px; border-rigt: 1px solid;height:120px  ">
														<a style="font-size: 20px; text-decoration: none; color:inherit">Title: {{$event->title}}<br></a>
														<a style="font-size: 20px; text-decoration: none; color:inherit">Description:<br></a>
														{{$event->description}}
													</div>

													
												</div>
												
											</div>

											<div class="card-footer">
													<b>&copy; <?php echo date('Y');?> Saddleworth Literary Festival</b>
													<div class="pull-right" style="bottom:0; font-size: 15px; color:grey;">Added by: {{$event->added_by}}</div>
											</div>
										
									</div>
								</div>
								<div class="col-lg-3 col-md-3" style="font-size: 20px; height:200px; padding: 0px; margin: 0px; ">
									<div class="d-none d-xl-block">
										<iframe
										  width="540"
										  height="258"
										  frameborder="0" style="border:0; border-radius: 5px"
										  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBOjFMutEKoPcEMPYoN0dTJGXFX9UqX0eo
										    &q={{$event->location}}&maptype=satellite&zoom=16 " >
										</iframe>
									</div>
									<div class="d-none d-lg-block d-xl-none">
										<iframe
										  width="450"
										  height="258"
										  frameborder="0" style="border:0;border-radius: 5px"
										  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBOjFMutEKoPcEMPYoN0dTJGXFX9UqX0eo
										    &q={{$event->location}}&maptype=satellite&zoom=16" >
										</iframe>
									</div>

								</div>
							</div>
						</div>	
					</div>
				@endforeach
			</div>
		@else
			<div class="alert alert-danger">No events have been added</div>
		@endif
	</div>
	<br><br><br><br><br><br><br>

@endsection