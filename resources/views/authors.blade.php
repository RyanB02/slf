<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
@extends('layouts.app')
<?php
use App\Author;
$authors = request()->route('id');
$month = Config::get('app.month');;
?>
@section('pageTitle')
	{{ucwords(strtolower($authors->name))}}
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render')
<body>
	
	<div class="container" style="color:#c0cdcf">
		<div class="row" style="padding: 0 !important; margin: 0 !important">
			<div class="col-lg-2 col-md-2">
				<a onclick="history.back();"  style="color:#5B6265; cursor: pointer">
					<div class="panel panel-default" >
						<div class="panel-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		@if(Session::has('added'))
			<div class="alert alert-success">{{Session::get('added')}}</div>
		@endif

		<div class="page-header">
			<h1>
				{{ucwords(strtolower($authors->name))}}
				@if(Auth::user() and Auth::user()->admin == 1)
					<div class="pull-right">
						<a href="{{url('admin/edit_guest/'.$authors->id)}}">
							<div class="btn btn-success">Edit Guest</div>
						</a>
						
					</div>
				@endif
			</h1>

		</div>
		<div class="col-lg-6 col-md-6">
			<img src="{{asset('/uploads/writers-speakers/'.$authors->image)}}" style="border-radius: 10px; width:100%">
		</div>
		<div class="col-lg-6 col-md-6" >
			<div class="panel panel-default">
				<div class="panel-heading">Who is {{ucwords(strtolower($authors->name))}}?</div>
				<div class="panel-body" style="color: black; font-family: Montserrat; font-weight: 700; ">
					{!! nl2br(e($authors->desc)) !!}
				</div>
			</div>
			@if(!empty ($authors->more))
				<div class="panel panel-default">
					<div class="panel-heading">More Info</div>
					<div class="panel-body" style="color: black; font-family: Montserrat; font-weight: 700; ">
						{{$authors->more}}
					</div>
				</div>
			@endif
		</div>

	</div>
</body>
@endsection
@section('content_mobile_render')
<body>

	<div class="container" style="color:#c0cdcf">
		<div class="row" style="margin-bottom: -40px">
			<div class="col-xs-5  col-sm-4">
				<a href="#" onclick="history.back();" style="color:#5B6265;">
					<div class="panel panel-default"  >
						<div class="panel-body" style="color:#5B6265;"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">Who is {{$authors->name}}?</div>
			<div class="panel-body">
				{!! nl2br(e($authors->desc)) !!}
			</div>
		</div>
		@if(!empty ($authors->more))
			<div class="panel panel-default">
				<div class="panel-heading">More Info</div>
				<div class="panel-body" >
					{{$authors->more}}
				</div>
			</div>
		@endif
		<div class="panel panel-default">
			<div class="panel-heading">
				{{$authors->name}} Image
			</div>
			<div class="panel-body">
				<img src="{{asset('/uploads/writers-speakers/'.$authors->image)}}" style="border-radius: 10px; width:100%">
			</div>
		</div>
	</div>

</body>
@endsection