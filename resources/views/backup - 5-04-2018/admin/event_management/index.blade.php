@extends('layouts.app')


@section('content_desktop_render_admin')
	<div class="container">
		<div class="page-header mt-5">
			<h1 style="color:white">{{Auth::user()->name}}'s Dashboard<sup><label class="badge badge-danger" style="font-size:15px !important; padding:1px">Admin</label></sup> <a class="pull-right" style="text-decoration: none; color: inherit">Event Management</a></h1> 
		</div>
		<div class="row">
			<div class="col-6">
				<div class="alert alert-info mt-2">
					This will most likely not be ready for this time round but we can always plan ahead for future festivals and i can make sure organising and running the event is as easy as possible!
				</div>
			</div>
			<div class="col-6">
				<div class="alert alert-danger mt-2">
					This section is work in progress so may be temperamental
				</div>
			</div>


		</div>

		<div class="row ml-5">
	        <a  href="#" style="text-decoration: none; color: inherit" id="about_circ"> 
	            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
	                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
	                    <div class="card-body">
	                        <center>
	                             <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
	                            <h5 style="padding-top: 5px">Guest Register</h5>
	                        </center>
	                    </div>
	                </div>
	            </div>
	        </a>
	        <a  href="#" style="text-decoration: none; color: inherit" id="about_circ"> 
	            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
	                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
	                    <div class="card-body">
	                        <center>
	                             <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
	                            <h5 style="padding-top: 5px">Schedule Checker</h5>
	                        </center>
	                    </div>
	                </div>
	            </div>
	        </a>
	        <a  href="#" style="text-decoration: none; color: inherit" id="about_circ"> 
	            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
	                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
	                    <div class="card-body">
	                        <center>
	                             <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
	                            <h5 style="padding-top: 5px">Rooms</h5>
	                        </center>
	                    </div>
	                </div>
	            </div>
	        </a>
	        <a  href="#" style="text-decoration: none; color: inherit" id="about_circ"> 
	            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
	                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
	                    <div class="card-body">
	                        <center>
	                             <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
	                            <h5 style="padding-top: 5px">Venue options</h5>
	                        </center>
	                    </div>
	                </div>
	            </div>
	        </a>
	        <a  href="#" style="text-decoration: none; color: inherit" id="about_circ"> 
	            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
	                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
	                    <div class="card-body">
	                        <center>
	                             <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
	                            <h5 style="padding-top: 5px">Help</h5>
	                        </center>
	                    </div>
	                </div>
	            </div>
	        </a>
      </div>
	</div>

@endsection