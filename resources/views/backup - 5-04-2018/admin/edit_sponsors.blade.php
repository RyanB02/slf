
@extends('layouts.app')
@section('pageTitle')
	Add Sponsor
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render_admin')
<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
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
		</div>
		<br>
		@include('common.errors')
		@if(Session::has('image_error'))
			<div class="alert alert-danger">
				{{Session::get('image_error')}}
			</div>
		@endif
		<div class="card card-default">
			<div class="card-header">
				Add Sponsor
			</div>
			<div class="card-body">
				<a style="color: red; text-decoration: none">If you want a Sponsor to be deleted it will have to be done manaually from the database (for now)</a>
				<form class="form-vertical" role="form" method="post" action="{{route('admin_add_sponsor')}}" enctype="multipart/form-data">
					<div class="form-group">
						<label for="sponsor_name">Sponsor Name </label>
						<input type="text" id="name" name="name" class="form-control" placeholder="Sponsor Name">
					</div>
					<div class="form-group">
						<label for="sponsor_website">Website (please only type the web address in this box, nothing else!! DO NOT INCLUDE <a style="color:red; text-decoration: none">http://</a> OR <a style="color:red; text-decoration: none">https://</a>) <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none ">*</a></label>
						<input type="text" id="website" name="website" class="form-control" placeholder="www.google.co.uk">
					</div>
					<div class="form-group">
						<label for="attendee_name" >Sponsor logo / image <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none">*</a> </label>
						<input type="file" name="image" id="image">
					</div>

					<div class="form-group">
		                <button type="submit" class="btn btn-primary pull-right">Add</button>
		            </div>
		            <input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
			</div>
		</div>
	</div>

@endsection
@section('content_mobile_render_admin')
<!--
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
		
		<div class="card card-default">
			<div class="card-header">
				Add Writer/Speaker
			</div>
			<div class="card-body">
				<form class="form-vertical" role="form" method="post" action" enctype="multipart/form-data">
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
		            <input type="hidden" name="_token" value="">
				</form>
			</div>
		</div>
	</div>
-->
mobile add sponsor not complete
@endsection
