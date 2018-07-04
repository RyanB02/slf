@extends('layouts.app')
@section('pageTitle')
	EP Dash
@endsection
@section('content_desktop_render_admin')
    <div class="container-flex" style="margin-top: -15px">
        <div class="row" style="margin:0px; padding: 0px; @if(Auth::user()) @if(Auth::user()->admin == 1) margin-top:100px !important; @else margin-top:200px; @endif @endif margin-top:200px; left: 30px">
            <div class="col-12" ">
                <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 55px; font-weight: # !important">Saddleworth Literary Festival <sup>{{config('app.next_festival_year')}}</sup></h1>
            </div>
            
        </div>
    </div>
    <div class="container d-none d-xl-block animated fadeIn" style="margin-top:30px;">
        <div class="alert alert-danger">These features are in very early stages</div>
        <div class="row col-12">

            <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none; margin:0px; color:inherit" id="about_circ"> 

                <div class="col-lg-2  ml-5 " style="padding-right: 0px">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265;   ">
                    	<div class="badge badge-success" style=" position: absolute; font-size:20px; width:33%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Edit</div>
                    	@if(App\frontpageoption::where('element_name','front_page_box1')->get(['data']) == '[{"data":"0"}]')
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
		                    	<input type="hidden" name="box_name" value="front_page_box1">
		                    	<input type="hidden" name="data" value="1">
	                    		<button class="btn btn-success" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Enable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@else
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
	                    		<input type="hidden" name="box_name" value="front_page_box1">
		                    	<input type="hidden" name="data" value="0">
	                    		<button class="btn btn-danger" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Disable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@endif
                        <center>
                            <br>
                            <i class="fa fa-info fa-5x unskew_fix_rep" aria-hidden="true"></i>
                            <h4 class="unskew_fix_rep">About Us</h4> 
	                    		@if(App\frontpageoption::where('element_name','front_page_box1')->get(['data']) == '[{"data":"0"}]')
		                    		<span style="color:red; text-decoration: none; ">Disabled</span>
		                    	@endif
                        </center>
                    </div>
                </div>
            </a>
            <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none; color:inherit" id="about_circ"> 
                <div class="col-lg-2  " style="padding-left:0px  !important; margin-left: 5px;  ">
                    <div class="card card-default  text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265; border-">
                    	<div class="badge badge-success" style=" position: absolute; font-size:20px; width:33%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Edit</div>
                    	@if(App\frontpageoption::where('element_name','front_page_box2')->get(['data']) == '[{"data":"0"}]')
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
		                    	<input type="hidden" name="box_name" value="front_page_box2">
		                    	<input type="hidden" name="data" value="1">
	                    		<button class="btn btn-success" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Enable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@else
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
	                    		<input type="hidden" name="box_name" value="front_page_box2">
		                    	<input type="hidden" name="data" value="0">
	                    		<button class="btn btn-danger" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Disable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@endif
                        <div class="card-body">
                            <center>
                                <i class="fa fa-calendar fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 8%"></i>
                                <h4 class="unskew_fix_rep">Upcoming Events</h4>
	                    		@if(App\frontpageoption::where('element_name','front_page_box2')->get(['data']) == '[{"data":"0"}]')
		                    		<span style="color:red; text-decoration: none; ">Disabled</span>
		                    	@endif
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none; color:inherit" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                    	<div class="badge badge-success" style=" position: absolute; font-size:20px; width:33%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Edit</div>
                    	@if(App\frontpageoption::where('element_name','front_page_box3')->get(['data']) == '[{"data":"0"}]')
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
		                    	<input type="hidden" name="box_name" value="front_page_box3">
		                    	<input type="hidden" name="data" value="1">
	                    		<button class="btn btn-success" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Enable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@else
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
	                    		<input type="hidden" name="box_name" value="front_page_box3">
		                    	<input type="hidden" name="data" value="0">
	                    		<button class="btn btn-danger" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Disable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@endif
                        <div class="card-body">
                            <center>
                                <i class="fa fa-address-book fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix_rep"> Guests {{config('app.next_festival_year')}}</h4>
	                    		@if(App\frontpageoption::where('element_name','front_page_box3')->get(['data']) == '[{"data":"0"}]')
		                    		<span style="color:red; text-decoration: none; ">Disabled</span>
		                    	@endif
                            </center>
                        </div>
                    </div>
                </div>
            </a>

            <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none; color:inherit" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                    <div class="card card-default  text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                    	<div class="badge badge-success" style=" position: absolute; font-size:20px; width:33%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Edit</div>
                    	@if(App\frontpageoption::where('element_name','front_page_box4')->get(['data']) == '[{"data":"0"}]')
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
	                    			<input type="hidden" name="box_name" value="front_page_box4">
		                    		<input type="hidden" name="data" value="1">
	                    		<button class="btn btn-success" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Enable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@else
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
	                    		<input type="hidden" name="box_name" value="front_page_box4">
		                    	<input type="hidden" name="data" value="0">
	                    		<button class="btn btn-danger" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Disable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@endif
                        <div class="card-body">
                            <center>
                                <i class="fa fa-star fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix_rep">Featuring</h4>
                                @if(App\frontpageoption::where('element_name','front_page_box4')->get(['data']) == '[{"data":"0"}]')
		                    		<span style="color:red; text-decoration: none; ">Disabled</span>
		                    	@endif
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="#" style="text-decoration: none; color:inherit" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px; ">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                    	<div class="badge badge-success" style=" position: absolute; font-size:20px; width:33%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Edit</div>
                    	@if(App\frontpageoption::where('element_name','front_page_box5')->get(['data']) == '[{"data":"0"}]')
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
		                    	<input type="hidden" name="box_name" value="front_page_box5">
		                    	<input type="hidden" name="data" value="1">
	                    		<button class="btn btn-success" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Enable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@else
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
	                    		<input type="hidden" name="box_name" value="front_page_box5">
		                    	<input type="hidden" name="data" value="0">
	                    		<button class="btn btn-danger" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Disable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@endif
                        <div class="card-body">
                            <center>
                                <i class="fa fa-picture-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix_rep">Gallery</h4>
	                    		@if(App\frontpageoption::where('element_name','front_page_box5')->get(['data']) == '[{"data":"0"}]')
		                    		<span style="color:red; text-decoration: none; ">Disabled</span>
		                    	@endif
                            </center>
                        </div>
                    </div>
                </div>
            <a  href="#" style=" text-decoration: none; color:inherit;" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px; ">
                    <div class="card card-default text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                    	<div class="badge badge-success" style=" position: absolute; font-size:20px; width:33%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Edit</div>
                    	@if(App\frontpageoption::where('element_name','front_page_box6')->get(['data']) == '[{"data":"0"}]')
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
		                    	<input type="hidden" name="box_name" value="front_page_box6">
		                    	<input type="hidden" name="data" value="1">
	                    		<button class="btn btn-success" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Enable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@else
	                    	<form class="form-vertical" role="form" method="post" action="/admin/edit_pages/index/boxstat">
	                    		<input type="hidden" name="box_name" value="front_page_box6">
		                    	<input type="hidden" name="data" value="0">
	                    		<button class="btn btn-danger" type="submit" style=" position: absolute; font-size:20px; width:66%; border-top-right-radius:0px; border-top-left-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500; right:0; padding:0px; height:30px;" >Disable</button>
	                    		{{CSRF_field()}}
							</form>
                    	@endif
                        <div class="card-body">
                            <center>
                                <i class="fa fa-clock-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix_rep">Schedule {{config('app.next_festival_year')}}</h4>
                                @if(App\frontpageoption::where('element_name','front_page_box6')->get(['data']) == '[{"data":"0"}]')
		                    		<span style="color:red; text-decoration: none; ">Disabled</span>
		                    	@endif
                            </center>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection