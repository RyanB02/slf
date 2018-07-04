@extends('layouts.app')
@section('pageTitle')
	Sponsors
@endsection
@section('content_desktop_render')
	<div class="container">
		<div class="row" style="padding: 0 !important; margin: 0 !important">
			<div class="col-lg-2 col-md-2">
				<a href="#" onclick="history.back();"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
			@if(Auth::user() and Auth::user()->admin == 1)
				<div class="col-lg-4 col-md-4 pull-right">
					<div class="card card-default">
						<div class="card-heading" style="text-align: center">Admin Options</div>
						<div class="card-body">
							<a href="{{route('edit_sponsors_front')}}">
								<button class="btn btn-success">Add Sponsor</button>
							</a>
						</div>
					</div>
				</div>
			@endif

		</div>
		<div class="page-header" style="color:white">
			<h1>Sponsors for {{config('app.next_festival_year')}}</h1>
			<p style="font-family: sans-serif; font-weight: 700">The organisers of the Saddleworth Literary Festival are extremely grateful to the sponsors, without whom there would be no festival. </p>
		</div>
		<!--
			IMG LEFT	TEST	
		-->
		<?php
			$inc_e_o = -2;
			$inc_f_r = 0;
			if(App\Sponsor::count())
			{
	    		foreach(App\Sponsor::orderBy('id', 'asc')->get() as $nim)
	    		{
	    			$inc_e_o = $inc_e_o + 2 ;
	    			$inc_f_r = $inc_f_r + 1;
	    			if($nim->id == $inc_f_r and $nim->id != $inc_e_o)
	    			{	
						echo '<div class="row" style="padding:0px; margin: 0px; margin-top: 20px">';
						echo '<img class="col-lg-5 col-md-5" src="'.asset('/uploads/sponsors/'. $nim->image).'" style="height: 100%; border-radius:6%">';
						echo '<div class="col-lg-7 col-md-7" style="color:white">';
						echo '<h1 style="margin-top: 10%; text-align:center">'.$nim->name.'</h1>';
						echo '</div>';
						echo '</div>';
	    			}elseif($nim->id == $inc_e_o and $nim->id == $inc_f_r){
	    				$inc_e_o = $inc_e_o - 2 ;
						echo '<div class="row" style="padding:0px; margin: 0px; margin-top: 20px">';
						echo '<div class="col-lg-7 col-md-7" style="color:white">';
						echo '<h1 style="margin-top: 10%; text-align:center">'.$nim->name.'</h1>';
						echo '</div>';
						echo '<img class="col-lg-5 col-md-5" src="'.asset('/uploads/sponsors/'. $nim->image).'" style="height: 100%; border-radius:6%">';
						echo '</div>';
					
	    			}		    		    			
	    		}
	    	}else{
	    		echo '<div class="alert alert-danger">';
	    		echo 'No sponsors have been added for '.config('app.next_festival_year').'!';
	    		echo '</div>';
	    	}
		?>
	</div>

			
		<!--
			IMG RIGHT	TEST
		-->

		<!--
			IMG LEFT	TEST
		-->

	</div>
@endsection
@section('content_mobile_render')
	<div class="container">
		<div class="row" style="padding: 0 !important; margin: 0 !important">
			<div class="col-sm-4 col-md-2">
				<a href="#" onclick="history.back();"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
			<!--@/if(Auth::user() and Auth::user()->admin == 1)
				<div class="col-sm-4 col-md-4 pull-right">
					<div class="card card-default">
						<div class="card-heading" style="text-align: center">Admin Options</div>
						<div class="card-body">
							<a href="{/{route('edit_sponsors_front')}}">
								<button class="btn btn-success">Add Sponsor</button>
							</a>
						</div>
					</div>
				</div>
			@/endif-->

		</div>
		<div class="page-header" style="color:white">
			<h1>{{config('app.next_festival_year')}} Sponsors</h1>
			<p style="font-family: sans-serif;">The organisers of the Saddleworth Literary Festival are extremely grateful to the sponsors, without whom there would be no festival. </p>
		</div>
		<!--
			IMG LEFT	TEST	
		-->
		<!--</?php
			$inc_e_o = -2;
			$inc_f_r = 0;
			if(App\Sponsor::count())
			{
	    		foreach(App\Sponsor::orderBy('id', 'asc')->get() as $nim)
	    		{
	    			$inc_e_o = $inc_e_o + 2 ;
	    			$inc_f_r = $inc_f_r + 1;
	    			if($nim->id == $inc_f_r and $nim->id != $inc_e_o)
	    			{	
						echo '<div class="row" style="padding:0px; margin: 0px; margin-top: 20px">';
						echo '<img class="col-sm-5 col-xs-5" src="'.asset('/uploads/sponsors/'. $nim->image).'" style="height: 100%; border-radius:6%">';
						echo '<div class="col-sm-7 col-xs-7" style="color:white">';
						echo '<h2 style="margin-top: 10%; text-align:center">'.$nim->name.'</h2>';
						echo '</div>';
						echo '</div>';
	    			}elseif($nim->id == $inc_e_o and $nim->id == $inc_f_r){
	    				$inc_e_o = $inc_e_o - 2 ;
						echo '<div class="row" style="padding:0px; margin: 0px; margin-top: 20px">';
						echo '<div class="col-sm-7 col-xs-7" style="color:white">';
						echo '<h2 style="margin-top: 10%; text-align:center">'.$nim->name.'</h2>';
						echo '</div>';
						echo '<img class="col-sm-5 col-xs-5" src="'.asset('/uploads/sponsors/'. $nim->image).'" style="height: 100%; border-radius:6%">';
						echo '</div>';
					
	    			}		    		    			
	    		}
	    	}else{
	    		echo '<div class="alert alert-danger">';
	    		echo 'No sponsors have been added for '.config('app.next_festival_year').'!';
	    		echo '</div>';
	    	}
		?>-->
		@foreach(App\Sponsor::orderBy('id', 'asc')->get() as $sponsor)
			<div class="card card-default">
				<div class="card-body">
					{{$sponsor->name}} <div class="pull-right" stye><img src="{{asset('/uploads/sponsors/'.$sponsor->image)}}" style="height: inherit; overflow: hidden"></div>
				</div>
			</div>
		@endforeach
	</div>
@endsection