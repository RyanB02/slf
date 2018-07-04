@extends('layouts.app')
<?php
use App\Event;
?>
@section('pageTitle')
	Edit Events
@endsection
@section('content_desktop_render_admin')
	<br>
	<div class="container">
	    <div class="row " style="padding: 0 !important; margin: 0 !important">
	      <div class="col-lg-2 col-md-2">
	        <a href="/admin"  style="color:#5B6265; cursor: pointer">
	          <div class="card card-default" >
	            <div class="card-body"> 
	              <center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
	              </div>
	          </div>
	        </a>
	      </div>
	    </div>
	</div>
	<br>
	<div class="container">

	    <div class="page-header" style="color:#c0cdcf">
	      <h1>{{Auth::user()->name}}'s Dashboard <sup><span class="badge badge-danger"  style="font-size:15px !important; padding:1px">Admin</span></sup> <a class="pull-right" style="text-decoration: none; color: inherit;">Edit Events</a></h1>
	    </div>	
	</div>
	<div class="container mt-2">
		
		@if(App\Event::count())
			<div class="row">
				@foreach(App\Event::orderBy('id','desc')->get() as $event) 
				<div class="col-lg-4 col-md-4" >
						<div class="card card-default " style="height:150px;">
							<div class="card-body">
								<div class="row" style="padding:0px !important; margin: 0px !important">
									<div class="col-lg-4 " style="background-color: #F3323F; height: 120px; color:white; padding: 0px; border-radius: 5px">
										<center>
											<a class="//animated\\ fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[0]}}{{$event->date[1]}}</a>
										</center>
										<hr style="margin:0px">
										<center>
											<a class="//animated\\ fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">{{$event->date[3]}}{{$event->date[4]}}</a>
										</center>
										<hr style="margin:0px">
										<center>
											<a class="//animated\\ fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">{{$event->date[6]}}{{$event->date[7]}}{{$event->date[8]}}{{$event->date[9]}}</a>
										</center>
									</div>
									<div class="col-lg-8 ">
										<div class=" //animated\\ fadeInDown" style="border-bottom:1px solid ;border-color: black; font-size: 20px; margin-bottom: 0px; padding-bottom: 0px; margin-top: 16px" >{{$event->title}}</div><br>
										<a data-toggle="collapse" data-target="#{{$event->id}}" class="btn btn btn-primary btn-sm pull-right //animated\\ fadeInUp text-light">View</a>
										<a data-toggle="modal" data-target="#{{$event->id}}_edit" class="btn btn btn-success btn-sm pull-right //animated\\ fadeInUp text-light mr-1">Edit</a>
									</div>
								</div>
							</div>
						</div>
					</div>	 
					@include('admin.admin_partials.edit_events_modals')
				@endforeach
			
			<div id="collapse_group_events">
				@foreach(App\Event::get() as $event)
					<div class="col-lg-12 col-md-12 mt-2">
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
		</div>
		@else
		<br>
			<div class="col-12">
		        <h3 style="color:grey; text-align: center">No events have been added for {{Config('app.next_festival_year')}} </h3>
			</div>
		@endif
	</div>
@endsection