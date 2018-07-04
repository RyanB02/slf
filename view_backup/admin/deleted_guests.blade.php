@extends('layouts.app')
<?php
use App\Author;
$authors = Author::get();
?>
@section('pageTitle')
  Deleted Guests
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render_admin')
	<div class="container">
		<div class="row" >
			<div class="col-lg-2 col-md-2">
				<a href="#" onclick="history.back();"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		<br>
		<div class="page-header" style="color:white">
			<h2>Deleted Writers/Guests</h2>
		</div>
		<br>
		<div class="row">
			@if( Author::where(['deleted' => '1'])->count() )
				@foreach(App\Author::get() as $authors)
					@if($authors->deleted == 1)
						<div class="col-lg-6 " >
							<div class="card card-danger" style="border-color:#CF2941">
								<div class="card-header bg-danger" style="text-align: center; font-size: 20px;">{{$authors->name}}</div>
								<div class="card-body" style="text-align: center">
	                              <form action="{{ url('/admin/edit_guest/restore/'.$authors->id) }}" method="POST">
	                                {{ csrf_field() }}
	              				            <button type="submit" class="btn btn-success" >Restore Guest</button>
	              				    </form>
								</div>
							</div>
						</div>
					@else

					@endif
				@endforeach
			@else
				<div class="alert alert-success">
					None Have Been Deleted Yet
				</div>
			@endif
		</div>
	</div>

@endsection
@section('content_mobile_render_admin')
	<div class="container">
		<div class="row" style="padding: 0 !important; margin: 0 !important">
			<div class="col-sm-4 col-xs-5">
				<a href="{{route('admin')}}"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		<div class="page-header" style="color:white">
			<h2>Deleted Writers/Guests</h2>
		</div>
		@if( Author::where(['deleted' => '1'])->count() )
			@foreach(App\Author::get() as $authors)
				@if($authors->deleted == 1)
					<div class="col-sm-6" >
						<div class="card card-default" >
							<div class="card-header" style="text-align: center; font-size: 20px">{{$authors->name}}</div>
							<div class="card-body" style="text-align: center">
								<i>these options are a work in progress</i>
							</div>
						</div>
					</div>
				@else

				@endif
			@endforeach
		@else
			<div class="alert alert-success">
				None Have Been Deleted Yet
			</div>
		@endif
	</div>

@endsection