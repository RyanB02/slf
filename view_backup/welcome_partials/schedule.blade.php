@extends('layouts.app')
<?php
$month = config('app.month');
?>

@section('pageTitle')
	Schedule {{config('app.next_festival_year')}}
@endsection
@section('content_desktop_render')
	<div class="jumbotron" style="text-align: center; font-family: Montserrat; 
	    @if($month == 'Dec')
	        background-image: url({{asset('images/bg2.jpg')}}); 
	    @else
	        background-image: url({{asset('images/bg1.jpg')}}); 
	    @endif
	    background-size:100%;  margin-top: -25px !important">
        <div class="container">
            <div class="jumbotron" style=" padding:5px;background-color: rgba(0,0,0,0.5);color: white; font-weight: 700; font-size: 20px !important ">
                <h1 style="opacity: 2 !important; font-size: 3.5rem !important">Saddleworth Literary Festival</h1>
                <hr style="border-color: white; margin:1px ">
                <h2 style="font-size: 2.5rem ">Schedule {{config('app.next_festival_year')}} </h2>
            </div>
            @include('tickets')
        </div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-2">
				<a href="/"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		<br>
		<center>
			<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890].pdf')}}" download="lit_fest_schedule_2018[v1890].pdf" class="mr-3">
				<button class="btn btn-primary float-center">Download Schedule [PDF]</button>
			</a>
			<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890]day1.PNG')}}" download="lit_fest_schedule_2018[v1890]day1.PNG" class="mr-3">
				<button class="btn btn-primary float-center">Download Schedule [PNG | Day 1]</button>
			</a>
			<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890]day2.PNG')}}" download="lit_fest_schedule_2018[v1890]day2.PNG" class="mr-3">
				<button class="btn btn-primary float-center">Download Schedule [PNG | Day 2]</button>
			</a>
		</center>

		
		<div class="row col-12 mt-3">
			<div class="col-6">
				<div class="card card-default" style="text-align:center">
					<div class="card-body" >
						<h1 style="font-size: 50px">Day 1</h1>
						<h2>Saturday 24th March 2018</h2>
					</div>
					<div class="card-footer">
						<h5 style="font-weight: bold; text-decoration: underline;">MAIN HALL – HOGWARTS - compere Joe Wheeler</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr style="color:red">
						      <th scope="row">11:15pm</th>
						      <td colspan="2">Festival opening by the Mayor & Mayoress and Youth Mayor of Oldham</td>
						    </tr>
						    <tr>
						      <th scope="row">12:30pm</th>
						      <td>SPEAKER/Author</td>
						      <td>Jan Needle - interviewed by Joe Wheeler</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm</th>
						      <td>POETRY</td>
						      <td>Spike the Poet</td>
						    </tr>
						    <tr>
						      <th scope="row">2:20pm</th>
						      <td>POETRY</td>
						      <td>Allan Graham</td>
						    </tr>
						    <tr>
						      <th scope="row">2:40pm</th>
						      <td>POETRY</td>
						      <td>Cathy Crabb</td>
						    </tr>
						    <tr>
						      <th scope="row">4pm</th>
						      <td>BRADSHAWS</td>
						      <td>Buzz Hawkins</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M1 - THE FAIRY SANCTUARY</h5><br>
						<h5 style="color:#FF69B4; font-family: fairy_wings; font-weight: bold">ALL DAY - Jenny Dayton & The Fairy Sanctuary</h5>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M2 - BRONTE</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">11:30am</th>
						      <td>SPEAKER/Poet</td>
						      <td>Lisa Wroe</td>
						    </tr>
						    <tr>
						      <th scope="row">12:30pm</th>
						      <td>SPEAKER/Author</td>
						      <td>Angela Blythe</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm</th>
						      <td>SPEAKER/Literary Agent</td>
						      <td>Christine Green</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M3 - DICKENS</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">11:30am – 1:30pm</th>
						      <td>Submissions Literary Critic/Author</td>
						      <td>Bill Broady</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm – 4pm</th>
						      <td>WORKSHOP/Author-Counsellor</td>
						      <td>Joanne Lees</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M4 - SHAKESPEARE</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">10:30am</th>
						      <td>WORKSHOP/Short Story Writing</td>
						      <td>Carmen Walton</td>
						    </tr>
						    <tr>
						      <th scope="row">11:30am</th>
						      <td>SPEAKER/Oldham Libraries</td>
						      <td>Samuel Thornley</td>
						    </tr>
						    <tr>
						      <th scope="row">12:30pm</th>
						      <td>SPEAKER/Marketing in Publishing</td>
						      <td>Rubbi Bhogal-Wood</td>
						    </tr>
						    <tr>
						      <th scope="row">3pm</th>
						      <td>SPEAKER/Writer</td>
						      <td>Andrew Oldham</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-6">
				<div class="card card-default" style="text-align: center">
					<div class="card-body">
						<h1 style="font-size: 50px">Day 2</h1>
						<h2>Sunday 25th March 2018</h2>
					</div>
					<div class="card-footer">
						<h5 style="font-weight: bold; text-decoration: underline;">MAIN HALL – HOGWARTS - compere Joe Wheeler</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">12pm</th>
						      <td>DRAMA</td>
						      <td>Funky Fitness & Dance Syndrome</td>
						    </tr>
						    <tr>
						      <th scope="row">12:45pm</th>
						      <td>Prize Giving</td>
						      <td>Primary Schools Poetry Competition</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm</th>
						      <td>POETRY</td>
						      <td>Allan Graham</td>
						    </tr>
						    <tr>
						      <th scope="row">2:20pm</th>
						      <td>POETRY</td>
						      <td>Spike the Poet</td>
						    </tr>
						   	<tr>
						      <th scope="row">2:40pm</th>
						      <td>POETRY</td>
						      <td>E M G Somerwill</td>
						    </tr>
						    <tr>
						      <th scope="row">3pm</th>
						      <td>POETRY</td>
						      <td>Waterhead Academy Pupils</td>
						    </tr>
						    <tr>
						      <th scope="row">3:30pm</th>
						      <td>POETRY</td>
						      <td>Saddleworth School Pupils</td>
						    </tr>
						    <tr>
						      <th scope="row">4:45pm</th>
						      <td>SPEAKER</td>
						      <td>Mike Sweeney - interviewed by Joe Wheeler</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M1 - THE FAIRY SANCTUARY</h5><br>
						<h5 style="color:#FF69B4; font-family: fairy_wings; font-weight: bold">ALL DAY - Jenny Dayton & The Fairy Sanctuary</h5>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M2 - BRONTE</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">10:30am</th>
						      <td>SPEAKER/Author</td>
						      <td>Barbara Hegab & Policeman Pete</td>
						    </tr>
						    <tr>
						      <th scope="row">12:30pm</th>
						      <td>SPEAKER/Author</td>
						      <td>Geoff Higginbottom</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm</th>
						      <td>SPEAKER/Author</td>
						      <td>Phaedra Patrick</td>
						    </tr>
						    <tr>
						      <th scope="row">3pm</th>
						      <td>SPEAKER/Literary Agent</td>
						      <td>Christine Green</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M3 - DICKENS</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">11:30am</th>
						      <td>SPEAKER/Author</td>
						      <td>Angela Blythe</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm – 4pm</th>
						      <td>WORKSHOP/Art-Writer</td>
						      <td>Pat Baker (2 sessions)</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M4 - SHAKESPEARE</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">10:30am</th>
						      <td>WORKSHOP/Author-Counsellor</td>
						      <td>Joanne Lees</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
		<br>
		<!--<div class="row col-12">
			<div class="col-6 offset-5">
				
			</div>
		</div>-->
	</div>

@endsection
@section('content_mobile_render')

	<div class="container">
		<div class="row  col-12">
			<div class="col-5">
				<a href="/"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>



		<div class="d-none d-sm-block">
			<div class="row col-12">
				<div class="col-6 mt-2 mb-3">
					<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890].pdf')}}" download="lit_fest_schedule_2018[v1890].pdf" >
						<button class="btn btn-primary">Download Schedule [PDF]</button>
					</a>
				</div>
				<div class="col-6 mt-2 mb-3">
					<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890]day1.PNG')}}" download="lit_fest_schedule_2018[v1890]day1.PNG"  >
						<button class="btn btn-primary float-right">Download Schedule [PNG | Day 1]</button>
					</a>
					<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890]day2.PNG')}}" download="lit_fest_schedule_2018[v1890]day2.PNG">
						<button class="btn btn-primary mt-2 float-right">Download Schedule [PNG | Day 2]</button>
					</a>
				</div>
			</div>
			<div class="col-12">
				<div class="card card-default" style="text-align:center">
					<div class="card-body" >
						<h1 style="font-size: 50px">Day 1</h1>
						<h2>Saturday 24th March 2018</h2>
					</div>
					<div class="card-footer">
						<h5 style="font-weight: bold; text-decoration: underline;">MAIN HALL – HOGWARTS - compere Joe Wheeler</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">12:30pm</th>
						      <td>SPEAKER/Author</td>
						      <td>Jan Needle - interviewed by Joe Wheeler</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm</th>
						      <td>POETRY</td>
						      <td>Spike the Poet</td>
						    </tr>
						    <tr>
						      <th scope="row">2:20pm</th>
						      <td>POETRY</td>
						      <td>Allan Graham</td>
						    </tr>
						    <tr>
						      <th scope="row">2:40pm</th>
						      <td>POETRY</td>
						      <td>Cathy Crabb</td>
						    </tr>
						    <tr>
						      <th scope="row">4pm</th>
						      <td>BRADSHAWS</td>
						      <td>Buzz Hawkins</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M1 - THE FAIRY SANCTUARY</h5><br>
						<h5 style="color:#FF69B4; font-family: fairy_wings; font-weight: bold">ALL DAY - Jenny Dayton & The Fairy Sanctuary</h5>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M2 - BRONTE</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">11:30am</th>
						      <td>SPEAKER/Poet</td>
						      <td>Lisa Wroe</td>
						    </tr>
						    <tr>
						      <th scope="row">12:30pm</th>
						      <td>SPEAKER/Author</td>
						      <td>Angela Blythe</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm</th>
						      <td>SPEAKER/Literary Agent</td>
						      <td>Christine Green</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M3 - DICKENS</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">11:30am – 1:30pm</th>
						      <td>Submissions Literary Critic/Author</td>
						      <td>Bill Broady</td>
						    </tr>
						    <tr>
						      <th scope="row">2pm – 4pm</th>
						      <td>WORKSHOP/Author-Counsellor</td>
						      <td>Joanne Lees</td>
						    </tr>
						  </tbody>
						</table>
						<hr>
						<h5 style="font-weight: bold; text-decoration: underline;">M4 - SHAKESPEARE</h5>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Time</th>
						      <th scope="col">Performace</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">10:30am</th>
						      <td>WORKSHOP/Short Story Writing</td>
						      <td>Carmen Walton</td>
						    </tr>
						    <tr>
						      <th scope="row">11:30am</th>
						      <td>SPEAKER/Oldham Libraries</td>
						      <td>Samuel Thornley</td>
						    </tr>
						    <tr>
						      <th scope="row">12:30pm</th>
						      <td>SPEAKER/Marketing in Publishing</td>
						      <td>Rubbi Bhogal-Wood</td>
						    </tr>
						    <tr>
						      <th scope="row">3pm</th>
						      <td>SPEAKER/Writer</td>
						      <td>Andrew Oldham</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
			<br>
			<div class="col-12">
				<div class="card card-default" style="text-align: center">
								<div class="card-body">
									<h1 style="font-size: 50px">Day 2</h1>
									<h2>Sunday 25th March 2018</h2>
								</div>
								<div class="card-footer">
									<h5 style="font-weight: bold; text-decoration: underline;">MAIN HALL – HOGWARTS - compere Joe Wheeler</h5>
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">Time</th>
									      <th scope="col">Performace</th>
									      <th scope="col">Name</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <th scope="row">12pm</th>
									      <td>DRAMA</td>
									      <td>Funky Fitness & Dance Syndrome</td>
									    </tr>
									    <tr>
									      <th scope="row">12:45pm</th>
									      <td>POETRY</td>
									      <td>Waterhead Academy Pupils</td>
									    </tr>
									    <tr>
									      <th scope="row">2pm</th>
									      <td>POETRY</td>
									      <td>Allan Graham</td>
									    </tr>
									    <tr>
									      <th scope="row">2:20pm</th>
									      <td>POETRY</td>
									      <td>Spike the Poet</td>
									    </tr>
									   	<tr>
									      <th scope="row">2:40pm</th>
									      <td>POETRY</td>
									      <td>E M G Somerwill</td>
									    </tr>
									    <tr>
									      <th scope="row">3pm</th>
									      <td>POETRY</td>
									      <td>Saddleworth School Pupils</td>
									    </tr>
									    <tr>
									      <th scope="row">3:30pm</th>
									      <td>Prize Giving</td>
									      <td>Primary Schools Poetry Competition</td>
									    </tr>
									    <tr>
									      <th scope="row">4:45pm</th>
									      <td>SPEAKER</td>
									      <td>Mike Sweeney - interviewed by Joe Wheeler</td>
									    </tr>
									  </tbody>
									</table>
									<hr>
									<h5 style="font-weight: bold; text-decoration: underline;">M1 - THE FAIRY SANCTUARY</h5><br>
									<h5 style="color:#FF69B4; font-family: fairy_wings; font-weight: bold">ALL DAY - Jenny Dayton & The Fairy Sanctuary</h5>
									<hr>
									<h5 style="font-weight: bold; text-decoration: underline;">M2 - BRONTE</h5>
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">Time</th>
									      <th scope="col">Performace</th>
									      <th scope="col">Name</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <th scope="row">10:30am</th>
									      <td>SPEAKER/Author</td>
									      <td>Barbara Hegab & Policeman Pete</td>
									    </tr>
									    <tr>
									      <th scope="row">12:30pm</th>
									      <td>SPEAKER/Author</td>
									      <td>Geoff Higginbottom</td>
									    </tr>
									    <tr>
									      <th scope="row">2pm</th>
									      <td>SPEAKER/Author</td>
									      <td>Phaedra Patrick</td>
									    </tr>
									    <tr>
									      <th scope="row">3pm</th>
									      <td>SPEAKER/Literary Agent</td>
									      <td>Christine Green</td>
									    </tr>
									  </tbody>
									</table>
									<hr>
									<h5 style="font-weight: bold; text-decoration: underline;">M3 - DICKENS</h5>
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">Time</th>
									      <th scope="col">Performace</th>
									      <th scope="col">Name</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <th scope="row">11:30am</th>
									      <td>SPEAKER/Author</td>
									      <td>Angela Blythe</td>
									    </tr>
									    <tr>
									      <th scope="row">2pm – 4pm</th>
									      <td>WORKSHOP/Art-Writer</td>
									      <td>Pat Baker (2 sessions)</td>
									    </tr>
									  </tbody>
									</table>
									<hr>
									<h5 style="font-weight: bold; text-decoration: underline;">M4 - SHAKESPEARE</h5>
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">Time</th>
									      <th scope="col">Performace</th>
									      <th scope="col">Name</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									      <th scope="row">10:30am</th>
									      <td>WORKSHOP/Author-Counsellor</td>
									      <td>Joanne Lees</td>
									    </tr>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
			</div>
			<div class="d-md-none d-sm-none ">
				<center>
					<div class="col-12 mt-3 mb-2">
						<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890].pdf')}}" download="lit_fest_schedule_2018[v1890].pdf" >
							<button class="btn btn-primary">Download Schedule [PDF | Both Days]</button>
						</a>
					</div>
					<div class="col-12 mt-2 mb-3">
						<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890]day1.jpg')}}" download="lit_fest_schedule_2018[v1890]day1.jpg"  >
							<button class="btn btn-primary ">Download Schedule [JPG | Day 1]</button>
						</a>
						<a href="{{asset('schedule_files/lit_fest_schedule_2018[v1890]day2.jpg')}}" download="lit_fest_schedule_2018[v1890]day2.jpg">
							<button class="btn btn-primary mt-2">Download Schedule [JPG | Day 2]</button>
						</a>
					</div>
					<div class="alert alert-info">
						We can't display our shedule on our website as it will not display correctly on your device, so please download our schedule from above!
					</div>
				</center>

			</div>
			
		<br>
		</div>
			
		<!--<div class="row col-12">
			<div class="col-6 offset-5">
				
			</div>
		</div>-->
	</div>
@endsection