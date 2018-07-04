@extends('layouts.app')
<?php
use App\Question;
$questions = request()->route('question');
$month = Config::get('app.month');
?>
@section('pageTitle')
	Question 
@endsection
@section('content_desktop_render')
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
	<div class="row">
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">
					Question ID = {{$questions->id}}
				</div>
				<div class="card-body" style="word-wrap: break-word;">
					NAME: {{$questions->name}}
					<hr>
					EMAIL: {{$questions->email}}
					<hr>
					MESSAGE:<br>
					{!! nl2br(e($questions->message))!!}
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-default">
				<div class="card-header">
					Review Options
				</div>
				<div class="card-body">
					@if($questions->status == 1)
		                <div class="alert alert-danger" style="text-align: center">Awaiting Review</div>
		                <h4>Change Status:</h4>
	                  	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="2">
		                		<button class="btn btn-warning" type="submit">Being Reviewed</button>
		                	</div>
		                	<input type="hidden" name="_token" value="{{ Session::token() }}">
			    	   </form>

		              @elseif($questions->status == 2)
		                <div class="alert alert-warning" style="text-align: center">Being Reviewed</div>
		                <h4>Change Status:</h4>
	                  	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="1">
		                		<button class="btn btn-danger" type="submit">Awaiting Review</button>
		                	</div>
		                	<input type="hidden" name="_token" value="{{ Session::token() }}">
			    	   </form>
	                  	<form action="{{ url('admin/question/status/notes/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
	                      		<label for="notes">Add Notes</label>
		                		<textarea class="form-control" name="note" placeholder="Input Your Note Here..."></textarea>
								<br>
		                		<input type="hidden" name="bind" value="{{$questions->id}}">
		                		<input type="checkbox" name="status" value="3"> <label for="status">Check me to close question</label>
		                		<button class="btn btn-default pull-right" class="form-control">Submit</button>
		                	</div>
		                	<input type="hidden" name="_token" value="{{ Session::token() }}">
			    	   </form>
		              @elseif($questions->status == 3)
		                <div class="alert alert-success" style="text-align: center">Reviewed</div>
		              @else
		                <div style="color:red; text-align: center">"error - unknown state"</div>
		              @endif
				</div>
			</div>
			@if(Session::has('debug'))
				<div class="card card-default">
					<div class="card-header">Debug Section</div>
					<div class="card-body">
							<?php
								$debug = Session::get('debug');
								print_r($debug);
							?>
					</div>
				</div>
			@endif
		</div>
	</div>

</div>
@endsection