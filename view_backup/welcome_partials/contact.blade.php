<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
@extends('layouts.app')
@section('pageTitle')
	Contact Us
@endsection
<?php
$month = Config::get('app.month');
use Illuminate\Http\Request;
?>
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_mobile_render')
	<div class="container">
		<div class="row">
			<div class="col-5">
				<a href="#" onclick="history.back();" style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center> 
							</div>
					</div>
				</a>
			</div>
		</div>
		<br>
		<div class="card card-default">
			<div class="card-body">
				@if (Session::has('sent'))
                 <script>
			        swal({
			          title: "",
			          text: "{{ Session::get('sent') }}",
			          icon: "success",
			          closeOnClickOutside: false,
			          closeOnEsc: false,
			          button: 'Okay!',
			        });
			     </script>
                @endif
                @if (Session::has('captcha_error'))
                   <div class="alert alert-danger">{{ Session::get('captcha_error') }}</div>
                @endif
                @include('common.errors')

            <form class="form-vertical" role="form" method="post" action="#">
                {{ csrf_field() }}                            
                <div class="form-group">
                    <label for="attendee_name">Please Input Your Name*</label>
                    <input class="form-control" name="name" type="name" id="namemobile" placeholder="John Doe" value="{!! old('name') !!}"  >
                </div>
                <div class="form-group">
                    <label for="attendee_name">Please Input Your Email*</label>
                    <input  class="form-control" type="email" name="email" id="emailmobile" placeholder="johndoe02@doe.com" value="{!! old('email') !!}" >

                </div>
                <div class="form-group">
                <label for="radio" style="width:100%">Your Message*<div class="count pull-right" >0/2000</div></label>
                    <textarea class="form-control textarea_auto_resize message" id="messagemobile" name="message" placeholder="Your message...(please try to keep below 2000 characters)" style="resize: none; min-height: 50px !important; ">{!! old('message') !!}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <input type="button" class="btn btn-default pull-right" style="margin-right:5px" data-toggle="modal" data-target="#PreviewModalMob" value="Preview">
                </div>
            
			</div>
		</div>
	    <script type="text/javascript">
			var namevalmob = document.getElementById('namemobile');
			var emailvalmob = document.getElementById('emailmobile');
			var messagevalmob = document.getElementById('messagemobile');
			namevalmob.onkeyup = namevalmob.onkeypress = function(){
			    document.getElementById('name_prev1_mob').innerHTML = this.value;
			    document.getElementById('name_prev2_mob').innerHTML = this.value;
			}
			emailvalmob.onkeyup = emailvalmob.onkeypress = function(){
			    document.getElementById('email_prev_mob').innerHTML = this.value;
			}
			messagevalmob.onkeyup = messagevalmob.onkeypress = function(){
			    document.getElementById('message_prev_mob').innerHTML = this.value;
			}
	    </script>
	    <div id="PreviewModalMob" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.95);">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header" >
			      	 <h4 class="modal-title">Question by: <span id="name_prev1_mob"></span></h4>
			        <button type="button" class="close" data-dismiss="modal" style="font-size: 30px;">&times;</button>
			       
			      </div>
			      <div class="modal-body">
			        <b>Name:</b> <span id="name_prev2_mob"></span><br>
			        <b>Email:</b> <span id="email_prev_mob"></span><br>
			        <b>Message:</b>
			        <blockquote id="message_prev_mob" style="word-wrap: break-word;"></blockquote>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:left">Close</button>
			      </div>
			      </form>
			    </div>

			  </div>
		</div>
	</div>

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
                <h2 style="font-size: 2.5rem ">Contact Us</h2>
            </div>
            @include('tickets')
        </div>
	</div>
	<div class="container">
		<div class="row col-12" style="padding: 0 !important; margin: 0 !important">
			<div class="col-lg-2 col-xl-2">
				<a href="{{route('welcome')}}"  style="color:#5B6265">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
		</div>
		<br>
		<div class="row col-12" style="padding: 0 !important; margin: 0 !important">
			<div class="card card-default col-12">
				<div class="card-body">
					@if (Session::has('sent'))
                         <script>
					        swal({
					          title: "{{ Session::get('sent') }}",
					          text: "",
					          icon: "success",
					          closeOnClickOutside: false,
					          closeOnEsc: false,
					          button: 'Okay!',
					        });
					     </script>
	                @endif
	                @if (Session::has('captcha_error'))
	                   <div class="alert alert-danger">{{ Session::get('captcha_error') }}</div>
	                @endif
	                @include('common.errors')

		            <form class="form-vertical" role="form" method="post" action="#">
		                {{ csrf_field() }}                            
		                <div class="form-group">
		                    <label for="attendee_name">Please Input Your Name*</label>
		                    <input class="form-control" name="name" type="name" id="name"  placeholder="John Doe" value="{!! old('name') !!}"  >
		                </div>
		                <div class="form-group">
		                    <label for="attendee_name">Please Input Your Email*</label>
		                    <input  class="form-control" type="email" name="email" id="email" placeholder="johndoe02@doe.com" value="{!! old('email') !!}" >

		                </div>
		                <div class="form-group">
		                <label for="radio" style="width:100%">Your Message*<div class="count pull-right">0/2000</div></label>
		                    <textarea class="form-control textarea_auto_resize message" id="message"  name="message" placeholder="Your message...(please try to keep below 2000 characters)" style="resize: none; min-height: 50px !important; ">{!! old('message') !!}</textarea>
		                </div>
		                <div class="form-group">
		                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
		                    <input type="button" class="btn btn-default pull-right" style="margin-right:5px" data-toggle="modal" data-target="#PreviewModal" value="Preview">
		                    
		                </div>
		            </div>
		        </div>
		       </div>
		            <script type="text/javascript">
						var nameval = document.getElementById('name');
						var emailval = document.getElementById('email');
						var messageval = document.getElementById('message');
						nameval.onkeyup = nameval.onkeypress = function(){
						    document.getElementById('name_prev1').innerHTML = this.value;
						    document.getElementById('name_prev2').innerHTML = this.value;
						}
						emailval.onkeyup = emailval.onkeypress = function(){
						    document.getElementById('email_prev').innerHTML = this.value;
						}
						messageval.onkeyup = messageval.onkeypress = function(){
						    document.getElementById('message_prev').innerHTML = this.value;
						}
		            </script>
		            <div id="PreviewModal" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
						<div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header" >
						      	<h4 class="modal-title pull-left">Question by: <span id="name_prev1"></span></h4>
						        <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
						       
						      </div>
						      <div class="modal-body">
						        <b>Name:</b> <span id="name_prev2"></span><br>
						        <b>Email:</b> <span id="email_prev"></span><br>
						        <b>Message:</b>
						        <blockquote id="message_prev" style="word-wrap: break-word;"></blockquote>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:left">Close</button>
						      </div>
						     
						  </div>
						</div>
					</div>
				</form>

	</div>
@endsection
