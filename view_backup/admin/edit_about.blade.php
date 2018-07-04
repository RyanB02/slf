@extends('layouts.app')
<?php
$month = Config::get('app.month');
use App\frontpageoption;
$about = App\frontpageoption::get();
?>
@section('pageTitle')
  Edit About
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render_admin')
	<div class="jumbotron" style="text-align: center; font-family: Montserrat; 
	    @if($month == 'Dec')
	        background-image: url({{asset('images/bg2.jpg')}}); 
	    @else
	        background-image: url({{asset('images/bg1.jpg')}}); 
	    @endif
	    background-size:100%;  margin-top: -25px !important">
	    <div class="container">
	        <div class="jumbotron" style=" padding:1px;background-color: rgba(0,0,0,0.5);color: white; font-weight: 700 ">
	            <h1>Saddleworth Literary Festival</h1>
	            <h2>About Us</h2>

	        </div>
			@include('tickets')
	    </div>
	</div>
	
		<div class="container">
			<div class="row justify-content-between" style="padding: 0 !important; margin: 0 !important">
				<div class="col-lg-2 col-md-2">
					<a href="#"  onclick="history.back();"  style="color:#5B6265">
						<div class="card card-default" >
							<div class="card-body"> 
								<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
								</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 pull-right">
					<div class="card card-default">
						<div class="card-header" style="text-align: center">Admin Options</div>
						<div class="card-body">
								<a href="#" onclick="history.back();">
									<button class="btn btn-danger">Cancel</button>
								</a>
								<form class="form-vertical" role="form" method="POST" action="{{ url('admin/edit_about/') }}" style="display: inline">
					            	<button type="submit" class="btn btn-primary pull-right" style="clear:both; white-space: nowrap;">Submit Edits</button>
					            	 {{ csrf_field() }}

						</div>
					</div>

	        	</div>
			</div>

		
			<div class="page-header">
				<h1 style="color:white; text-align: center">About Us</h1>
				<p style="color:white; text-align: center">Who Are We?</p>
			</div>

			<div class="row col-12">
				<div class="col-lg-4 offset-lg-2 col-md-4 offset-md-1" style="color:white; ">
					<h1 style="font-size: 50px !important">We Are The Saddleworth Literary Festival</h1>
				</div>
				<div class="col-lg-6 col-md-6" style="color:white; ">
					<br>
				   <textarea class="form-control textarea_auto_resize" name="about"  style="resize: none; min-height: 50px !important;">@foreach(App\frontpageoption::where('element_name', 'front_about')->get() as $about){{$about->about}}@endforeach</textarea>
					 {{ csrf_field() }}
				</form>

				</div>
				<div class="col-lg-12 col-md-12" style="padding-bottom: 10px">
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
			                <a href="http://saddind.co.uk/author-appeals-for-help-to-launch-literary-festival/" target="_blank"><img src="{{asset('images/Sadd-Ind-header-2-webheader-1.png')}}" style="width: 45%;"></a>
			                <a href="https://bookslifeandeverything.blogspot.co.uk/2016/10/saddleworth-literary-festival-2016.html" target="_blank"><img src="{{asset('images/blae-web-header.png')}}" style="width: 41%;"></a>
			            </div>
			        </center>
				</div>
			</div>

	</div>
</div>


@endsection
@section('content_mobile_render_admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-5 col-sm-4">
				<a href="#" onclick="history.back();" style="color:#5B6265">
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
				<a href="#" onclick="history.back();" class="">
					<button class="btn btn-danger pull-right" style="padding: 1px; margin-left: 5px">Cancel</button>
				</a>
				<form class="form-vertical" role="form" method="POST" action="{{ url('admin/edit_about/') }}" style="display: inline">
				About Us <div class="pull-right"><button type="submit" class="btn btn-primary pull-right" style="padding: 1px">Submit Edits</button>
				{{csrf_field()}}
				</div></div>
				<div class="card-body">
					<textarea name="about" class="form-control textarea_auto_resize">@foreach(App\frontpageoption::where('element_name', 'front_about')->get() as $about){{ $about->about }}@endforeach</textarea>
				</div>
				</form>
			</div>
		
		<div class="card card-default">
			<div class="card-header" style="text-align: center">Articles</div>
			<div class="card-body">
	            <center>
	                <div class="col-lg-6 col-lg-offset-3">
	                    <a href="http://saddind.co.uk/author-appeals-for-help-to-launch-literary-festival/" target="_blank"><img src="{{asset('images/Sadd-Ind-header-2-webheader-1.png')}}" style="width: 45%;"></a>
	                    <a href="https://bookslifeandeverything.blogspot.co.uk/2016/10/saddleworth-literary-festival-2016.html" target="_blank"><img src="{{asset('images/blae-web-header.png')}}" style="width: 41%;"></a>
	                </div>
	            </center>
			</div>
		</div>
	</div>


@endsection