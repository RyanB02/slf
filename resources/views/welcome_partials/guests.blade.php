@extends('layouts.app')
@section('pageTitle')
	Guests
@endsection
<?php
use App\Author;
$month = Config::get('app.month');
include 'make_clickable.php';
?>
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render')

    <div class="d-none d-lg-block">
            <div class="container-flex" style="margin-top: -15px">

            <div class="row" style="margin:0px; padding: 0px;margin-top:100px; left:20vw">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="d-xl-block d-none">
		<div class="container-flex animated fadeIn">
			<div class="row " style="margin:0px !important; padding: 0px !important">
	        	@if( \App\Author::where('deleted', '0')->count() && App\Author::where('confirm_add', '1')->count())
	            	@foreach(\App\Author::where('featured', '1')->orderBy('id', 'desc')->get() as $author)
	        				
	                       	@if($author->deleted == 0 && $author->confirm_add == 1)
		                       	<div class="col-lg-2" >
		                       		<div class="card card-default" style="margin-bottom:10px; text-align: center; overflow: hidden;  ">
		   							<?php
						    			$test = date('Y-m-d ',strtotime("-7 days") );
						    			$test2 = date('Y-m-d ',strtotime("-5 days") );
				    					if($author->created_at > $test )
				    					{
				    						echo('<div class="badge badge-success" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
				    						
				    					}else{
											if($author->updated_at > $test2 )
					    					{
					    						echo('<div class="badge badge-info" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Recently Updated</div>');
					    						
					    					}else{

					    					}
				    					}
				    					
						    		?>
									@if($author->featured == 1)
	                                    <div class="badge badge-default hero2" style="position: absolute; font-size:20px; width:80px; background-color: #FFD700; border-radius:0px !important;font-weight:500; height: 80px; text-align: left; overflow: hidden; left: -40px; top: -40px"><i class="fa fa-star rotate_fix" style="padding-top:45px; padding-left: 36px; "></i></div>
	                                  @endif
						    		
							    		<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
							    			<h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
							    		</div>
			                       		<img class="card-img-top" src="uploads/writers-speakers/{{$author->image}}" style="width: 100%; height: 250px; margin:0px !important;">
			                       		<a href="#" data-toggle="modal" data-target="#{{$author->id}}_featured">
			                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px">
				                            	Click here to learn more
			                       			</div>
			                       		</a>
			                       		
		                       		</div>
		                       	</div>

	                        @endif
	                        
	                   @endforeach
	            		
	        			@foreach(\App\Author::where('featured', '0')->orderBy('id', 'desc')->get() as $author)
	        				
	                       	@if($author->deleted == 0 && $author->confirm_add == 1)
		                       	<div class="col-lg-2" >
		                       		<div class="card card-default" style="margin-bottom:10px; text-align: center  ">
		   							<?php
						    			$test = date('Y-m-d ',strtotime("-7 days") );
						    			$test2 = date('Y-m-d ',strtotime("-5 days") );
				    					if($author->created_at > $test )
				    					{
				    						echo('<div class="badge badge-success" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
				    						
				    					}else{
											if($author->updated_at > $test2 )
					    					{
					    						echo('<div class="badge badge-info" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Recently Updated</div>');
					    						
					    					}else{

					    					}
				    					}
				    					
						    		?>

						    		
							    		<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
							    			<h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
							    		</div>
			                       		<img class="card-img-top" src="{{ url('uploads/writers-speakers/'.$author->image) }}" style="width: 100%; height: 250px; margin:0px !important;">
			                       		<a href="{{url('/guests/'.$author->id.'')}}">
			                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px">
				                            	Click here to learn more
			                       			</div>
			                       		</a>
			                       		
		                       		</div>
		                       	</div>
	                        @endif
	                        
	                   @endforeach

	            		
	        @else
			<div class="col-12">
		            <h3 style="color:grey; text-align: center">No guests have been added for {{Config('app.next_festival_year')}} </h3>
			</div>
	       

			@endif
			</div>
		</div>
    </div>
    <div class="d-lg-block d-none d-xl-none">
		<div class="container-flex animated fadeIn">
			<div class="row " style="margin:0px !important; padding: 0px !important">
	        	@if( \App\Author::where('deleted', '0')->count() && App\Author::where('confirm_add', '1'))
	            	@foreach(\App\Author::where('featured', '1')->orderBy('id', 'desc')->get() as $author)
	        				
	                       	@if($author->deleted == 0 && $author->confirm_add == 1)
		                       	<div class="col-lg-3" >
		                       		<div class="card card-default" style="margin-bottom:10px; text-align: center; overflow: hidden;  ">
		   							<?php
						    			$test = date('Y-m-d ',strtotime("-7 days") );
						    			$test2 = date('Y-m-d ',strtotime("-5 days") );
				    					if($author->created_at > $test )
				    					{
				    						echo('<div class="badge badge-success" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
				    						
				    					}else{
											if($author->updated_at > $test2 )
					    					{
					    						echo('<div class="badge badge-info" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Recently Updated</div>');
					    						
					    					}else{

					    					}
				    					}
				    					
						    		?>
									@if($author->featured == 1)
	                                    <div class="badge badge-default hero2" style="position: absolute; font-size:20px; width:80px; background-color: #FFD700; border-radius:0px !important;font-weight:500; height: 80px; text-align: left; overflow: hidden; left: -40px; top: -40px"><i class="fa fa-star rotate_fix" style="padding-top:45px; padding-left: 36px; "></i></div>
	                                  @endif
						    		
							    		<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
							    			<h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
							    		</div>
			                       		<img class="card-img-top" src="uploads/writers-speakers/{{$author->image}}" style="width: 100%; height: 250px; margin:0px !important;">
			                       		<a href="#" data-toggle="modal" data-target="#{{$author->id}}_featured">
			                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px">
				                            	Click here to learn more
			                       			</div>
			                       		</a>
			                       		
		                       		</div>
		                       	</div>

	                        @endif
	                        
	                   @endforeach
	            		
	        			@foreach(\App\Author::where('featured', '0')->orderBy('id', 'desc')->get() as $author)
	        				
	                       	@if($author->deleted == 0 && $author->confirm_add == 1)
		                       	<div class="col-lg-3" >
		                       		<div class="card card-default" style="margin-bottom:10px; text-align: center  ">
		   							<?php
						    			$test = date('Y-m-d ',strtotime("-7 days") );
						    			$test2 = date('Y-m-d ',strtotime("-5 days") );
				    					if($author->created_at > $test )
				    					{
				    						echo('<div class="badge badge-success" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
				    						
				    					}else{
											if($author->updated_at > $test2 )
					    					{
					    						echo('<div class="badge badge-info" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Recently Updated</div>');
					    						
					    					}else{

					    					}
				    					}
				    					
						    		?>

						    		
							    		<div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
							    			<h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
							    		</div>
			                       		<img class="card-img-top" src="{{ url('uploads/writers-speakers/'.$author->image) }}" style="width: 100%; height: 250px; margin:0px !important;">
			                       		<a href="{{url('/guests/'.$author->id.'')}}">
			                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px">
				                            	Click here to learn more
			                       			</div>
			                       		</a>
			                       		
		                       		</div>
		                       	</div>
	                        @endif
	                        
	                   @endforeach

	            		
	        @else
			<div class="col-12">
		            <h3 style="color:grey; text-align: center">No guests have been added for {{Config('app.next_festival_year')}} </h3>
			</div>
	       

			@endif
			</div>
		</div>
    </div>


@endsection
@section('content_mobile_render')
	<div class="container">
		<div class="page-header" style="margin-top: 15px; color: rgba(0,0,0,0.7) !important;border-color: rgba(0,0,0,0.6) !important ">
            <h1 style="font-family: Montserrat; text-align: center">Guests {{config('app.next_festival_year')}}</h1>
        </div>
		<br>
			@if( \App\Author::where('deleted', '0')->count())
		            <center>
		            	<div class="row">
	                       @foreach(\App\Author::where('featured', '1')->orderBy('id', 'desc')->get() as $author)
	                          @if($author->deleted == 0 && $author->confirm_add == 1)
	                           	<div class="col-6 col-sm-6 col-md-6">
	   							
									<div class="d-none d-sm-block">
							    		<div class="card card-default" style="margin-bottom:10px; text-align: center; overflow: hidden;  ">
							    			<?php
								    			$test = date('Y-m-d ',strtotime("-7 days") );
								    			$test2 = date('Y-m-d ',strtotime("-5 days") );
						    					if($author->created_at > $test )
						    					{
						    						echo('<div class="badge badge-success" style=" position: absolute;  font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
						    						
						    					}else{
													if($author->updated_at > $test2 )
							    					{
							    						echo('<div class="badge badge-info" style=" position: absolute;  font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Recently Updated</div>');
							    						
							    					}else{

							    					}
						    					}
						    					
								    		?>
											@if($author->featured == 1)
		                                    <div class="badge badge-default hero2" style="position: absolute; font-size:20px; width:80px; background-color: #FFD700; border-radius:0px !important;font-weight:500; height: 80px; text-align: left; overflow: hidden; left: -40px; top: -40px"><i class="fa fa-star rotate_fix" style="padding-top:45px; padding-left: 36px; "></i></div>
		                                    @endif
								    		<div class="animated fadeInDown" style=" position: absolute;top:50px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:80%">
								    			<h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
								    		</div>
				                       		<img class="card-img-top" src="uploads/writers-speakers/{{$author->image}}" style="width: 100%; height: 150px; margin:0px !important;">
				                       		<a href="#" data-toggle="modal" data-target="#{{$author->id}}_mobile">
				                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px; font-size: 15px">
					                            	learn more
				                       			</div>
				                       		</a>
				                       		
			                       		</div>
									</div>
									<div class="d-sm-none d-md-none">
							    		<div class="card card-default" style="margin-bottom:10px; text-align: center; overflow: hidden;  ">
							    			<?php
								    			$test = date('Y-m-d ',strtotime("-7 days") );
								    			$test2 = date('Y-m-d ',strtotime("-5 days") );
						    					if($author->created_at > $test )
						    					{
						    						echo('<div class="badge badge-success" style=" position: absolute;  font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
						    						
						    					}else{
													if($author->updated_at > $test2 )
							    					{
							    						echo('<div class="badge badge-info" style=" position: absolute;  font-size:15px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px; font-weight:500">Recently Updated</div>');
							    						
							    					}else{

							    					}
						    					}
						    					
								    		?>
											   @if($author->featured == 1)
			                                    <div class="badge badge-default hero2" style="position: absolute; font-size:20px; width:80px; background-color: #FFD700; border-radius:0px !important;font-weight:500; height: 80px; text-align: left; overflow: hidden; left: -40px; top: -40px"><i class="fa fa-star rotate_fix" style="padding-top:45px; padding-left: 36px; "></i></div>
			                                  @endif
								    		<div class="animated fadeInDown" style=" position: absolute;top:50px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:80%;">
								    			<h4 style="text-align: left; font-size: 15px">{{ucwords(strtolower($author->name))}}<h4>
								    		</div>
				                       		<img class="card-img-top" src="uploads/writers-speakers/{{$author->image}}" style="width: 100%; height: 150px; margin:0px !important;">
				                       		<a href="#" data-toggle="modal" data-target="#{{$author->id}}_mobile">
				                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px; font-size: 15px">
					                            	learn more
				                       			</div>
				                       		</a>
				                       		
			                       		</div>
									</div>

		                           	<div id="{{$author->id}}_mobile" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
										<div class="modal-dialog modal-lg">
										    <div class="modal-content">
										      <div class="modal-header" >
										        <h4 class="modal-title pull-left">{{ucwords(strtolower($author->name))}}</h4>
										        <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
										      </div>
										      <div class="modal-body">
										      	<div class="row">
										      		<div class="col-lg-5">
										      			<img  src="uploads/writers-speakers/{{$author->image}}" style="width: 100%;  margin:0px !important;">

										      		</div>
										      		<div class="col-lg-7" style="word-wrap: break-word;">
										      			<h1 style="border-bottom: 1px solid">{{ucwords(strtolower($author->name))}}</h1>
										      			<h3>Added: {{date('jS M Y', strtotime($author->created_at))}}</h3>
										      			@if($author->more != null)

										      				<h4></h4>
										      			@endif

										      		</div>

										      	</div>
										      	<br>
										      	<div class="row col-12">
										      		<blockquote class="blockquote">
										      			{!! (nl2br(e($author->desc))) !!}
										      		</blockquote>
										      		
										      	</div>
										      </div>
										      <div class="card-footer">
										      	<div class="pull-left">
										      		 <b>&copy; <?php echo date('Y');?> Saddleworth Literary Festival</b>
										      	</div>
										      	<div class="pull-right">
										      		<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
										      	</div>
										      </div>
										     
										  </div>
										</div>
									</div>
	                           	</div>
	                            @endif
	                       @endforeach
	                       @foreach(\App\Author::where('featured', '0')->orderBy('id', 'desc')->get() as $author)
	                           	@if($author->deleted == 0 && $author->confirm_add == 1)
	                           	<div class="col-6 col-sm-6 col-md-6">
	   							
									<div class="d-none d-sm-block">
							    		<div class="card card-default" style="margin-bottom:10px; text-align: center  ">
							    			<?php
								    			$test = date('Y-m-d ',strtotime("-7 days") );
								    			$test2 = date('Y-m-d ',strtotime("-5 days") );
						    					if($author->created_at > $test )
						    					{
						    						echo('<div class="badge badge-success" style=" position: absolute;  font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
						    						
						    					}else{
													if($author->updated_at > $test2 )
							    					{
							    						echo('<div class="badge badge-info" style=" position: absolute;  font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Recently Updated</div>');
							    						
							    					}else{

							    					}
						    					}
						    					
								    		?>
								    		<div class="animated fadeInDown" style=" position: absolute;top:50px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:80%">
								    			<h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
								    		</div>
				                       		<img class="card-img-top" src="uploads/writers-speakers/{{$author->image}}" style="width: 100%; height: 150px; margin:0px !important;">
				                       		<a href="#" data-toggle="modal" data-target="#{{$author->id}}_mobile">
				                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px; font-size: 15px">
					                            	learn more
				                       			</div>
				                       		</a>
				                       		
			                       		</div>
									</div>
									<div class="d-sm-none d-md-none">
							    		<div class="card card-default" style="margin-bottom:10px; text-align: center  ">
							    			<?php
								    			$test = date('Y-m-d ',strtotime("-7 days") );
								    			$test2 = date('Y-m-d ',strtotime("-5 days") );
						    					if($author->created_at > $test )
						    					{
						    						echo('<div class="badge badge-success" style=" position: absolute;  font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>');
						    						
						    					}else{
													if($author->updated_at > $test2 )
							    					{
							    						echo('<div class="badge badge-info" style=" position: absolute;  font-size:15px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px; font-weight:500">Recently Updated</div>');
							    						
							    					}else{

							    					}
						    					}
						    					
								    		?>
								    		<div class="animated fadeInDown" style=" position: absolute;top:50px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:80%;">
								    			<h4 style="text-align: left; font-size: 15px">{{ucwords(strtolower($author->name))}}<h4>
								    		</div>
				                       		<img class="card-img-top" src="uploads/writers-speakers/{{$author->image}}" style="width: 100%; height: 150px; margin:0px !important;">
				                       		<a href="#" data-toggle="modal" data-target="#{{$author->id}}_mobile">
				                       			<div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px; font-size: 15px">
					                            	learn more
				                       			</div>
				                       		</a>
				                       		
			                       		</div>
									</div>

		                           	<div id="{{$author->id}}_mobile" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
										<div class="modal-dialog modal-lg">
										    <div class="modal-content">
										      <div class="modal-header" >
										        <h4 class="modal-title pull-left">{{ucwords(strtolower($author->name))}}</h4>
										        <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
										      </div>
										      <div class="modal-body">
										      	<div class="row">
										      		<div class="col-lg-5">
										      			<img  src="uploads/writers-speakers/{{$author->image}}" style="width: 100%;  margin:0px !important;">

										      		</div>
										      		<div class="col-lg-7" style="word-wrap: break-word;">
										      			<h1 style="border-bottom: 1px solid">{{ucwords(strtolower($author->name))}}</h1>
										      			<h3>Added: {{date('jS M Y', strtotime($author->created_at))}}</h3>
										      			@if($author->more != null)

										      				<h4></h4>
										      			@endif

										      		</div>

										      	</div>
										      	<br>
										      	<div class="row col-12">
										      		<blockquote class="blockquote">
										      			{!! (nl2br(e($author->desc))) !!}
										      		</blockquote>
										      		
										      	</div>
										      </div>
										      <div class="card-footer">
										      	<div class="pull-left">
										      		 <b>&copy; <?php echo date('Y');?> Saddleworth Literary Festival</b>
										      	</div>
										      	<div class="pull-right">
										      		<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
										      	</div>
										      </div>
										     
										  </div>
										</div>
									</div>
	                           	</div>
	                            @endif
	                       @endforeach
                   		</div>
		            </center>
		        @else
					<div class="col-12">
				            <h3 style="color:grey; text-align: center">No guests have been added for {{Config('app.next_festival_year')}} </h3>
					</div>
		        @endif
		        <!--
		        <div class="hidden-sm">
		        	<div class="alert alert-danger">We have recently revamped this page but we can't yet display it on your device, we are working hard to get it onto your device very soon!</div>
		        	<div class="panel panel-default">
		        		<div class="panel-heading">
		        			Guests {/{config('app.next_festival_year')}}
		        		</div>
		        		<div class="panel-body">
			        		@/if( \App\Author::where('deleted', '0')->count())
					            <center>
					               <table class="table table-striped table-bordered table-condensed">
					                   <thead>
					                       <tr>
					                           <th>Name</th>
					                           <th>More Info</th>
					                       </tr>
					                   </thead>
					                   <tbody>
				                           @/foreach(\App\Author::orderBy('id', 'desc')->get() as $author)
					                           	@/if($author->deleted == 0)
					                                <tr>
					                                    <td >{/{ucwords(strtolower(str_limit($author->name, 13)))}}</td>
					                                    <td><a href="{/{ url('authors/'.$author->id) }}">Click here</a></td>
					                                </tr>
					                            @/endif
				                           @/endforeach
					                   </tbody>
					               </table>
					            </center>
					        @/else
					            <div class="alert alert-danger">
					                No authors have been added for {/{Config('app.next_festival_year')}}
					            </div>
					        @/endif
		        		</div>

				    </div>
		        </div>
		    -->
	</div>

@endsection
