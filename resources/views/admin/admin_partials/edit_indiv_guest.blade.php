<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
@extends('layouts.app')
<?php
use App\Author;
$authors = request()->route('author');
$month = Config::get('app.month');;
?>
@section('pageTitle')
	EDIT {{ucwords(strtolower($authors->name))}}
@endsection
<a id="return-to-top" style="z-index: 1000; cursor: pointer"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
@section('content_desktop_render_admin')
<body>
	<form class="form-vertical" role="form" method="POST" action="{{ url('admin/edit_guest/'.$authors->id) }}" >
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
				<div class="form-group">
					<input type="text" id="name" name="name" class="form-control" style="width:50%" value="{{$authors->name}}">
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<img src="{{asset('/uploads/writers-speakers/'.$authors->image)}}" style="border-radius: 10px; width:100%">
			</div>
			<div class="col-lg-6 col-md-6" >
				<div class="panel panel-default">
					<div class="panel-heading">Who is {{$authors->name}}?</div>
					<div class="panel-body" >
						<div class="form-group">
							<textarea class="form-control textarea_auto_resize" name="desc"  style="resize: none; min-height: 50px !important;">{{$authors->desc}}</textarea>
						</div>
						
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">More Info</div>
					<div class="panel-body" >
						<div class="form-group">
							<textarea class="form-control textarea_auto_resize" name="more" placeholder="To find out more, please go to www.allangrahambooks.com/" style="resize: none; min-height: 50px !important;">{{$authors->more}}</textarea>
						</div>
						
					</div>
				</div>
				<div class="form-group">
	                <button type="submit" class="btn btn-primary pull-right">Submit Edits</button>
	            </div>
	            <input type="hidden" name="_token" value="{{ Session::token() }}">
			</div>

		</div>
	</form>
</body>
@endsection
@section('content_mobile_render')

@endsection