
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

@endsection
@section('content_desktop_render')
<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
    <div class="d-none d-xl-block">
            <div class="container-flex" style="margin-top: -15px">

            <div class="row" style="margin:0px; padding: 0px;margin-top:100px; left:20vw">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: Montserrat; font-size: 50px; font-weight: thin !important">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                </div>
            </div>
        </div>
    </div>
	<div class="container">
		<div class="page-header mt-5  " style="border-color:black; font-family: Montserrat; font-weight: ">
			<h1 style="color:black;text-align: center">Contact Form</h1>
			<p style="color:black;text-align: center">It appears something went wrong, so please review what you have inputted and view the error message</p>
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
		                <label for="radio" style="width:100%">Your Message*<div id="count" class="count pull-right">0/2000</div></label>
		                    <textarea class="form-control textarea_auto_resize message" id="message count"  name="message" placeholder="Your message...(please try to keep below 2000 characters)" style="resize: none; min-height: 50px !important; ">{!! old('message') !!}</textarea>
		                </div>
		                <div class="form-group">
		                    <button type="submit" id="Submit_btn" class="btn btn-primary pull-right">Submit</button>
		                    
		                </div>
		            </div>
		        </div>
		       </div>

    <script>
        $(".message").keyup(function(){
            if ($(this).val().length > 2000) {
                document.getElementById("count").innerHTML = "You are  " + ($(this).val().length-2000 ) + " characters over";
                document.getElementById("count").style.cssText = "color: red; font-family: Montserrat"; 
                document.getElementById("Submit_btn").style.cssText = "color:black; background-color:transparent; border-color:transparent; opacity:1"; 
                document.getElementById("Submit_btn").innerHTML = "Cannot Submit"; 
                document.getElementById("Submit_btn").disabled = true;
                var alerted = localStorage.getItem('alerted') || '';
                if (alerted != 'yes') {
                 swal({
                      title: "You are "+ ($(this).val().length-2000 ) +" character(s) over",
                      text: "Please shorten your message. If you cannot shorten it please directly email us at: info@saddleworthlitfest.co.uk",
                      icon: "info",
                      closeOnClickOutside: true,
                      closeOnEsc: true,
                      button: 'Okay!',
                    });
                 localStorage.setItem('alerted','yes');
                }

                
                
            }else{
                document.getElementsByClassName("count").innerHTML = $(".count").text($(this).val().length + '/2000');
                document.getElementById("count").style.cssText = "color: black; font-family: Montserrat"; 
                document.getElementById("Submit_btn").style.cssText = "cursor: pointer"; 
                document.getElementById("Submit_btn").innerHTML = "Submit"; 
                document.getElementById("Submit_btn").disabled = false;
                localStorage.setItem('alerted','no');
                
            };
        });

    </script>

	</div>
@endsection
