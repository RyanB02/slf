@extends('layouts.app')
@section('pageTitle')
Not Found
@endsection
@section('content_desktop_render')
<div class="container" style="margin-top: 10%">

	<div class="card card-danger " style=" border: 2px  solid;border-color: #CF2941; border-radius: 5px">
		<div class="card-header bg-danger">Page Not Found</div>
		<div class="card-body">
			<h1 style="text-align: center">
				Whoops, we can't seem to find that page!
				<br>
				<a href="/" >Click me</a> to go to the homepage 
			</h1>
		</div>
	</div>

</div>

@endsection
@section('content_mobile_render')
<div class="container" style="margin-top: 10%">

	<div class="card card-danger " style=" border: 2px  solid;border-color: #CF2941; border-radius: 5px">
		<div class="card-header bg-danger">Page Not Found</div>
		<div class="card-body">
			<p style="text-align: center">
				Whoops, we can't seem to find that page!
				<br>
				<a href="/" >Click me</a> to go to the homepage 
			</p>
		</div>
	</div>

</div>
@endsection