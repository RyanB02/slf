@extends('layouts.app')
@section('pageTitle')
	Contact Form Submissions
@endsection
<?php
use App\Question;
?>
@section('content_desktop_render_admin')
	<div class="container">
		<div class="row">
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
		<div class="page-header">
			<h1 style="color:white">{{Auth::user()->name}}'s Dashboard<sup><label class="label label-danger" style="font-size:15px !important; padding:1px">Admin</label></sup> <a class="pull-right" style="text-decoration: none; color: inherit">Contact Form Submissions</a></h1> 
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="card card-default">
					<div class="card-header">Contact Form Submissions</div>
						<div class="card-body" style="font-family: Montserrat">
			              @if( \App\Question::count())
			                  <center>
			                     <table class="table table-striped table-bordered table-condensed">
			                         <thead>
			                             <tr>
			                             	 <th style="text-align: center">ID</th>
			                                 <th style="text-align: center">User Name</th>
			                                 <th style="text-align: center">Review</th>
			                                 <th style="text-align: center">Status</th>
			                             </tr>
			                         </thead>
			                         <tbody>

			                                 @foreach(\App\Question::orderBy('id', 'desc')->get() as $question)
												<tr>
												  <td>{{$question->id}}</td>
												  <td>{{ucwords(strtolower($question->name))}}</td>
												  <td style="text-align: center"><a href="{{url('/admin/questions/'.$question->id)}}">Click Here</a></td>
											  	  @if($question->status == 1)
												    		<?php
												    			$test = date('Y-m-d ',strtotime("-10 days") );
										    					if($question->created_at < $test or $question->created_at == $test )
										    					{
										    						echo('<td class="alert-danger" style="text-align: center">');
										    						echo('<a class="blink_me" style="text-decoration: none; color:inherit;">Awaiting Review</a>');
										    						echo('</td>');
										    						
										    					}else{
										    						echo('<td class="alert-danger" style="text-align: center">');
										    						echo('<a  style="text-decoration: none; color:inherit;">Awaiting Review</a>');
										    						echo('</td>');
										    					}
												    		?>
												  @elseif($question->status == 2)
														<td class="alert-warning" style="text-align: center">
												    		Being Reviewed
												  	    </td>
												  @elseif($question->status == 3)
														<td class="alert-success" style="text-align: center">
												    		Reviewed
												  	    </td>
												  @else
														<td style="text-align: center; color:red">
												    		'Error - Unknown Status'
												  	    </td>
												  @endif
												</tr>
			                                 @endforeach
			                         </tbody>
			                     </table>	
			                  </center>
			              @else
			                  <div class="alert alert-danger">
			                      No questions have been asked
			                  </div>

			              @endif
			        </div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="card card-default">
					<div class="card-header">Contact Form Submission Stats</div>
						<div class="card-body" style="font-family: Montserrat; padding: 0">
							<div class="row" style="padding: 0 !important; margin:0 !important ">
								<div class="col-lg-12 col-md-12 alert-info" style="text-align: center">
									Total Contact Form Submissions<br>
									<h1>{{App\Question::count()}}</h1>
								</div>
							</div>
							<div class="row" style="padding: 0 !important; margin:0 !important ">
								<div class="col-lg-4 col-md-4 alert-danger" style="text-align: center">
									Awaiting<br>
									<h1>{{App\Question::where('status', '1')->count()}}</h1>
									
								</div>
								<div class="col-lg-4 col-md-4 alert-warning" style="text-align: center">
									Being Reviewed<br>
									<h1>{{App\Question::where('status', '2')->count()}}</h1>
								</div>
								<div class="col-lg-4 col-md-4 alert-success" style="text-align: center">
									Reviewed<br>
									<h1>{{App\Question::where('status', '3')->count()}}</h1>
								</div>
							</div>
							<?php
								$not_stat_1 = App\Question::where('status', 1)->count();
								$not_stat_2 = App\Question::where('status', 2)->count();
								$not_stat_3 = App\Question::where('status', 3)->count();
								$all = App\Question::count();
								$total = $all - ($not_stat_1 + $not_stat_2 + $not_stat_3);
								if($total > 0){
									echo('<h3 style="text-align: center; color:red; ">'.$total.' questions are in an unknown state!</h3>');
								}
							?>
							
			        </div>
				</div>
			</div>
		</div>
	</div>
@endsection