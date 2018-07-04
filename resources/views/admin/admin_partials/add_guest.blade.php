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
				<div class="alert alert-info" style="text-align: center">This is the standard template</div>
			</div>
			<div class="col-lg-2 col-md-2 offset-1">
				<a href="#" data-toggle="modal" data-target="#adding-modal"  style="color:#5B6265; cursor: pointer">
					<div class="card card-default alert-success" >
						<div class="card-body "> 
							<center><i class="fa" aria-hidden="true">Proceed &nbsp;  </i><i class="fa fa-caret-right" aria-hidden="true"></i></center>
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
		<div class="d-none d-lg-block">
	        <div class="container-flex" style="margin-top: -20px">
	            <div class="row" style="margin:0px; padding: 0px;margin-top:30px; left:20vw">
	                <div class="col-12" ">
	                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">Guest Name</h1>
	                </div>
	            </div>
	        </div>
	    </div>
		<div class="container mt-2">
			<div class="row " >
				<div class="col-6" >
					<center>
						<img  src="{{ url('placeholderaddg.png')}}" style="height: 450px;  margin:0px !important; border-radius: 5px; max-width: 540px">
					</center>
					
				</div>
				<div class="col-6" >
					<blockquote style="font-family: Montserrat; font-weight: ; font-size: 18px">
						Guest description, write as much as you want about this new guest!...well you know... maybe not a whole essay, in fact keep it short and understandable, we don't want viewers to be getting bored or not even reading it in the first place because it is too long!
					</blockquote>
				</div>
			</div>
			<br>
			<div class="row">
	 			<div class="col-12" >
	 				This whole section is dedicated to this new guests website, socials and stuff like that. If the guest does not have any of these, let's shove in their public email as we want to help our guests with their progression in their field, this section can be blank. In the future, a feature to add published novels, poems may be added here!
	 			</div>
			</div>
		</div>
        <div id="adding-modal" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
						<form class="form-vertical" role="form" method="post" action="{{URL::to('admin/add_guest')}}" enctype="multipart/form-data">
							<div class="form-group">
								<label for="writer_name">Guest Name <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none ">*</a></label>
								<input type="text" id="" name="name" class="form-control" placeholder="Roald Dahl">
							</div>
							<div class="form-group">
								<label for="desc">Please Input A Description Of The Guest <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none">*</a></label>
								<textarea class="form-control textarea_auto_resize"  name="desc" placeholder="Stephen King was born in portland on the 21st of September 1947. His books are classed as horror, fantasy and science-fiction." style="resize: none;min-height: 50px !important; "></textarea>
							</div>
							<div class="form-group">
								<label for="desc">More info (such as website or facebook, <a style="color:red; text-decoration: none">if adding website be sure to always use www</a></label>
								<textarea class="form-control textarea_auto_resize" name="more" placeholder="To find out more about Dr Seuss, please go to www.seussville.com/" style="resize: none; min-height: 50px !important;"></textarea>
							</div>
							<div class="form-group">
								<label for="attendee_name" >Select An Image Of The Guest To Upload <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none">*</a> </label>
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
