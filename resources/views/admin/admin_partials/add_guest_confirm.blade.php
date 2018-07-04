<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
@extends('layouts.app')
@section('pageTitle')
	Add Guest
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render')
<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2">
				<a onclick="history.back();"  style="color:#5B6265; cursor: pointer">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
						<div class="col-6 offset-1">
				<div class="alert alert-info" style="text-align: center">This is what your new guest's page will look like! ({{$guest->name}})</div>
			</div>
			<div class="col-lg-2 col-md-2 offset-1">
			@if($guest->confirm_add == 0)
					<form class="form-vertical" role="form" method="post" action="/admin/add_guest/confirm/{{$guest->id}}">
						<input type="hidden" name="data" value="1">
			           	<button class="btn btn-success" type="submit" style="font-size: 18px">Confirm</button>
			            {{CSRF_field()}}
					</form>
				</div>
			@else
					<a style="color:red; text-decoration: none">Guest Confirmed</a>
				</div>
			@endif

		</div>
	</div>

    <div class="d-none d-lg-block">
            <div class="container-flex" style="margin-top: -20px">

            <div class="row" style="margin:0px; padding: 0px;margin-top:30px; left:20vw">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">{{$guest->name}}</h1>
                </div>
            </div>
        </div>
    </div>
	<div class="container mt-2">
		<div class="row " >
			<div class="col-6" >
				<center>
					<img  src="{{ url('uploads/writers-speakers/'.$guest->image) }}" style="height: 450px;  margin:0px !important; border-radius: 5px; max-width: 540px">
				</center>
				
			</div>
			<div class="col-6" >
				<blockquote style="font-family: Montserrat; font-weight: ; font-size: 18px">
					{{$guest->desc}}	
				</blockquote>
			</div>
		</div>
		<br>
		<div class="row">
 			<div class="col-12" >
 				{{$guest->more}}
 			</div>
		</div>
	</div>

@endsection
@section('content_mobile_render')
	<div class="container">
		<div class="row" style="padding: 0 !important; margin: 0 !important">
			<div class="col-xs-4 col-sm-4">
				<a onclick="history.back();"  style="color:#5B6265; cursor: pointer">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		@include('common.errors')
		<div class="card card-default">
			<div class="card-header">
				Add Writer/Speaker
			</div>
			<div class="card-body">
				<form class="form-vertical" role="form" method="post" action="{{URL::to('writer_add')}}" enctype="multipart/form-data">
					<div class="form-group">
						<label for="writer_name">Guest Name</label>
						<input type="text" id="" name="name" class="form-control" placeholder="Allan Graham">
					</div>
					<div class="form-group">
						<label for="desc">Please Input A Description Of The Guest</label>
						<textarea class="form-control textarea_auto_resize" id="textarea_auto_resize3"  name="desc" placeholder="Allan Graham – lives in Manchester, UK and I has read books from a very early age." style="resize: none; min-height: 50px !important; "></textarea>
					</div>
					<div class="form-group">
						<label for="desc">More info (such as website or facebook)*</label>
						<textarea class="form-control textarea_auto_resize" id="textarea_auto_resize4" name="desc" placeholder="To find out more, please go to www.allangrahambooks.com/" style="resize: none; min-height: 50px !important; "></textarea>
					</div>
					<div class="form-group">
						<label for="attendee_name" >Select An Of The Guest To Upload</label>
						<input type="file" name="image" id="image">
					</div>
					<div class="form-group">
						*please add website / contact details in correct input box as it will display nicely in a different box :)
		                <button type="submit" class="btn btn-primary pull-right">Add</button>
		            </div>
		            <input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
			</div>
		</div>
	</div>
@endsection
