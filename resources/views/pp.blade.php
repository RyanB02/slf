@extends('layouts.app_over')

@section('content_desktop_render')
		<script type="text/javascript"> 
			var auto_refresh = setInterval( function() { 
				$('.main_hall').load('/sched_code/main_hall.php');
			 }, 1000); 
			var auto_refresh = setInterval( function() { 
				$('.m1').load('/sched_code/m1.php');
			 }, 1000); 
			var auto_refresh = setInterval( function() { 
				$('.m2').load('/sched_code/m2.php');
			 }, 1000); 
			var auto_refresh = setInterval( function() { 
				$('.m3').load('/sched_code/m3.php');
			 }, 1000); 
			var auto_refresh = setInterval( function() { 
				$('.m4').load('/sched_code/m4.php');
			 }, 1000); 
		</script>
			<div class="col-12" style="margin-top: 10%">
				<div class="card ">
			        <div class="card-header" style="text-align: center;">
			            <h3>Guests Currently Performing</h3>
			        </div>
			        <div class="card-body">
			                <div class="row" style="text-align: center" >
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">Main Hall - HOGWARTS</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <div class="main_hall">loading...</div>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M1 - THE FAIRY SANCTUARY</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <div class="m1">loading...</div>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M2 - BRONTE</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <div class="m2">loading...</div>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M3 - DICKENS</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <div class="m3">loading...</div>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M4 - SHAKESPEARE</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <div class="m4">loading...</div>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			            
			        </div>
			    </div>
			</div>

@endsection