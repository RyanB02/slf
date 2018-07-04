@extends('layouts.app')
<?php
use App\Question;
use App\QuestionNote;
$questions = request()->route('id');
$question_note = \App\QuestionNote::where('bind', $questions->id)->orderBy('id', 'desc')->get();
$month = config('date');
?>
@section('pageTitle')
  {{strtoupper($questions->name)}}
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render')
	<div class="container">
		@if(Session::has('edited'))
			<div class="alert alert-success">
				{{Session::get('edited')}}
			</div>
		@endif
		@include('common.errors')
		@if($questions->status == 1)
		@elseif($questions->status == 2)
		@elseif($questions->status == 3)
		@else
			<div class="alert alert-danger">
				"error - unknown state" - needs edit in database
			</div>
		@endif
		<div class="col-lg-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Support Question ID = {{$questions->id}}</h4>
				</div>
				<div class="panel-body">
					<h4>Name: {{$questions->name}}</h4>
					<hr>
					<h4>Email: {{$questions->email}}</h4>
					<hr>
					<h4>Message:</h4>
					<blockquote style="word-wrap: break-word;">
						{{$questions->message}}
					</blockquote>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Admin Options</h4>
				</div>
				<div class="panel-body">
		              @if($questions->status == 1)
		                <div class="alert alert-warning" style="text-align: center">Awaiting Review</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="2">
		                		<button class="btn btn-danger" type="submit">Being Reviewed</button>
		                	</div>
		                	<input type="hidden" name="_token" value="{{ Session::token() }}">
			    	   </form>

		              @elseif($questions->status == 2)
		                <div class="alert alert-danger" style="text-align: center">Being Reviewed</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="1">
		                		<button class="btn btn-warning" type="submit">Awaiting Review</button>
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
		</div>

		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Question Notes</h4>
				</div>
				<div class="panel-body">
					@if($question_note->count())
						@foreach($question_note as $qn)

							<h4>Note Added: {{$qn->created_at->format('d/M/Y ')}}</h4>
							<h4>Note: {{$qn->note}}</h4> 
							<hr>
							
						@endforeach
					@else
						<div class="alert alert-danger">
							No notes have been added
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection
@section('content_col-md_render')
	<div class="container">
		@if(Session::has('edited'))
			<div class="alert alert-success">
				{{Session::get('edited')}}
			</div>
		@endif

		@if($questions->status == 1)
		@elseif($questions->status == 2)
		@elseif($questions->status == 3)
		@else
			<div class="alert alert-danger">
				"error - unknown state" - needs edit in database
			</div>
		@endif
		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Support Question ID = {{$questions->id}}</h4>
				</div>
				<div class="panel-body">
					<h4>Name: {{$questions->name}}</h4>
					<hr>
					<h4>Email: {{$questions->email}}</h4>
					<hr>
					<h4>Message:</h4>
					<blockquote style="word-wrap: break-word;">
						{{$questions->message}}
					</blockquote>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Admin Options</h4>
				</div>
				<div class="panel-body">
		              @if($questions->status == 1)
		                <div class="alert alert-warning" style="text-align: center">Awaiting Review</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="2">
		                		<button class="btn btn-danger" type="submit">Being Reviewed</button>
		                	</div>
		                	<input type="hidden" name="_token" value="{{ Session::token() }}">
			    	   </form>

		              @elseif($questions->status == 2)
		                <div class="alert alert-danger" style="text-align: center">Being Reviewed</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="1">
		                		<button class="btn btn-warning" type="submit">Awaiting Review</button>
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
		</div>

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Question Notes</h4>
				</div>
				<div class="panel-body">
					@if($question_note->count())
						@foreach($question_note as $qn)

							<h4>Note Added: {{$qn->created_at->format('d/M/Y ')}}</h4>
							<h4>Note: {{$qn->note}}</h4> 
							<hr>
							
						@endforeach
					@else
						<div class="alert alert-danger">
							No notes have been added
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection
@section('content_col-sm_render')
	<div class="container">
		@if(Session::has('edited'))
			<div class="alert alert-success">
				{{Session::get('edited')}}
			</div>
		@endif

		@if($questions->status == 1)
		@elseif($questions->status == 2)
		@elseif($questions->status == 3)
		@else
			<div class="alert alert-danger">
				"error - unknown state" - needs edit in database
			</div>
		@endif
		<div class="col-sm-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Support Question ID = {{$questions->id}}</h4>
				</div>
				<div class="panel-body">
					<h4>Name: {{$questions->name}}</h4>
					<hr>
					<h4>Email: {{$questions->email}}</h4>
					<hr>
					<h4>Message:</h4>
					<blockquote style="word-wrap: break-word;">
						{{$questions->message}}
					</blockquote>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Admin Options</h4>
				</div>
				<div class="panel-body">
		              @if($questions->status == 1)
		                <div class="alert alert-warning" style="text-align: center">Awaiting Review</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="2">
		                		<button class="btn btn-danger" type="submit">Being Reviewed</button>
		                	</div>
		                	<input type="hidden" name="_token" value="{{ Session::token() }}">
			    	   </form>

		              @elseif($questions->status == 2)
		                <div class="alert alert-danger" style="text-align: center">Being Reviewed</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="1">
		                		<button class="btn btn-warning" type="submit">Awaiting Review</button>
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
		</div>

		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Question Notes</h4>
				</div>
				<div class="panel-body">
					@if($question_note->count())
						@foreach($question_note as $qn)

							<h4>Note Added: {{$qn->created_at->format('d/M/Y ')}}</h4>
							<h4>Note: {{$qn->note}}</h4> 
							<hr>
							
						@endforeach
					@else
						<div class="alert alert-danger">
							No notes have been added
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection
@section('content_col-xs_render')
	<div class="container">
		@if(Session::has('edited'))
			<div class="alert alert-success">
				{{Session::get('edited')}}
			</div>
		@endif

		@if($questions->status == 1)
		@elseif($questions->status == 2)
		@elseif($questions->status == 3)
		@else
			<div class="alert alert-danger">
				"error - unknown state" - needs edit in database
			</div>
		@endif
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Support Question ID = {{$questions->id}}</h4>
				</div>
				<div class="panel-body">
					<h4>Name: {{$questions->name}}</h4>
					<hr>
					<h4>Email: {{$questions->email}}</h4>
					<hr>
					<h4>Message:</h4>
					<blockquote style="word-wrap: break-word;">
						{{$questions->message}}
					</blockquote>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Admin Options</h4>
				</div>
				<div class="panel-body">
		              @if($questions->status == 1)
		                <div class="alert alert-warning" style="text-align: center">Awaiting Review</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="2">
		                		<button class="btn btn-danger" type="submit">Being Reviewed</button>
		                	</div>
		                	<input type="hidden" name="_token" value="{{ Session::token() }}">
			    	   </form>

		              @elseif($questions->status == 2)
		                <div class="alert alert-danger" style="text-align: center">Being Reviewed</div>
		                <h4>Change Status:</h4>
                      	<form action="{{ url('admin/question/status/'.$questions->id) }}"   method="POST">
	                      	<div class="form-group">
		                		<input type="hidden" name="status" id="status" value="1">
		                		<button class="btn btn-warning" type="submit">Awaiting Review</button>
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
		</div>

		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Question Notes</h4>
				</div>
				<div class="panel-body">
					@if($question_note->count())
						@foreach($question_note as $qn)

							<h4>Note Added: {{$qn->created_at->format('d/M/Y ')}}</h4>
							<h4>Note: {{$qn->note}}</h4> 
							<hr>
							
						@endforeach
					@else
						<div class="alert alert-danger">
							No notes have been added
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection