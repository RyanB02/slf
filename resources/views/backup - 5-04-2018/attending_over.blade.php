@extends('layouts.special')
<?php
use App\Attending;
$month = Config::get('app.month');;
?>
@section('content_desktop_render')
	<div class="container">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading"><h4 style="text-align: center">Definite</h4></div>
				<div class="panel-body">
					<h1 style="text-align: center">
						{{ \App\Attending::where(['attending' => 'definite'])->count() }}
					</h1>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading" ><h4 style="text-align: center">Unsure</h4></div>
				<div class="panel-body">
					<h1 style="text-align: center">
						{{ \App\Attending::where(['attending' => 'unsure'])->count() }}
					</h1>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" style="text-align: center"><h4>Individual Details</h4></div>
				<div class="panel-body">
					@if(\App\Attending::get()->count())
						<center>
							<div class="col-lg-4 col-sm-4 col-xs-4"><b>Name</b><hr></div> 
							<div class="col-lg-4 col-sm-4 col-xs-4"><b>Email</b><hr></div> 
							<div class="col-lg-4 col-sm-4 col-xs-4"><b>Attending</b><hr></div>
						</center>
						@foreach(\App\Attending::get() as $attendees_contact)
							<center>
								<div class="col-lg-4 col-sm-4 col-xs-4">{{$attendees_contact->name}}<hr></div> 
								<div class="col-lg-4 col-sm-4  col-xs-4">{{$attendees_contact->email}}<hr></div> 
								<div class="col-lg-4 col-sm-4 col-xs-4">{{$attendees_contact->attending}}<hr></div>
							</center>
						@endforeach
					@else
						<div class="alert alert-danger">
							No one has said they are interested yet!
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>


@endsection