
@extends('layouts.app')
<?php
use App\Question;
use App\Attending;
include 'make_clickable.php';
?>
@section('pageTitle')
  Admin
@endsection

@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render_admin')
  
	<div class="container">

		@if(Session::has('removed'))
      <script>
        swal({
          title: "Guest Removed!",
          text: "{{ Session::get('removed') }}",
          icon: "error",
          closeOnClickOutside: false,
          closeOnEsc: false,
          button: 'Yep, i know',
        });
     </script>
		@endif
    @if(Session::has('added'))
      <script>
        swal({
          title: "Guest Addedd!",
          text: "{{ Session::get('added') }}",
          icon: "success",
          closeOnClickOutside: false,
          closeOnEsc: false,
          button: 'I know i did!',
        });
     </script>
    @endif
    @if(Session::has('edited'))
      <script>
        swal({
          title: "Guest Edited!",
          text: "{{ Session::get('edited') }}",
          icon: "success",
          closeOnClickOutside: false,
          closeOnEsc: false,
          button: 'Coolio',
        });
     </script>
    @endif
    <div class="row" style="padding: 0 !important; margin: 0 !important">
      <div class="col-lg-2 col-md-2">
        <a href="/admin"  style="color:#5B6265; cursor: pointer">
          <div class="card card-default" >
            <div class="card-body"> 
              <center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
              </div>
          </div>
        </a>
      </div>
    </div>
    <br>
		<div class="page-header" style="color:#c0cdcf">
			<h1>{{Auth::user()->name}}'s Dashboard <sup><span class="badge badge-danger"  style="font-size:15px !important; padding:1px">Admin</span></sup> <a class="pull-right" style="text-decoration: none; color: inherit;">Edit Guests</a></h1>
		</div>
    <br>
    <div class="row" style="margin:0; padding:0">
    	<div class="col-lg-12 col-md-12">
    		<div class="card card-default">
    			<div class="card-header">
    				<h4>Writers / Speakers ({{config('app.next_festival_year')}})<div class="pull-right"><a href="{{route('admin_add_guest')}}"><span class="badge badge-primary" style="cursor: pointer;">Add</span></a></div></h4>
    			</div>
    				<div class="card-body" style="font-family: Montserrat">
              @if( \App\Author::where('deleted', '0')->count())

                    <div class="row">

                          @if( \App\Author::where('deleted', '0')->count())
                              @foreach(\App\Author::where('featured', '1')->orderBy('id', 'desc')->get() as $author)
                                  @if($author->deleted == 0)
                                        <div class="col-lg-3" >
                                          <div class="card card-default" style="margin-bottom:10px; text-align: center; overflow: hidden;  ">
                                  @if($author->featured == 1)
                                    <div class="badge badge-default hero2" style="position: absolute; font-size:20px; width:80px; background-color: #FFD700; border-radius:0px !important;font-weight:500; height: 80px; text-align: left; overflow: hidden; left: -40px; top: -40px"><i class="fa fa-star rotate_fix" style="padding-top:45px; padding-left: 36px; "></i></div>
                                  @endif
                                  <div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
                                    <h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
                                  </div>
                                            <img class="card-img-top" src="{{asset('uploads/writers-speakers/'.$author->image)}}" style="width: 100%; height: 250px; margin:0px !important;">
                                              <div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px; padding: 0px">
                                                <div class="row" style="padding: 0px; margin:0px; font-size: 20px">
                                                  <a class="alert-info col-3" href="#" data-toggle="modal" data-target="#{{$author->id}}" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                      <i class="fa fa-info" ></i>
                                                  </a>
                                                  <form class="alert-danger col-3" action="{{ url('/admin/edit_guest/delete/'.$author->id) }}" method="POST" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                    {{ csrf_field() }}
                                                      <button type="submit" class="special" style="border: none; background-color: #FAD6D9;  cursor: pointer"><i class="fa fa-trash"></i></button>
                                                  </form>
                                                  <form class="alert-warning col-3" action="{{ url('/admin/edit_guest/set_priority/'.$author->id) }}" method="POST" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="star" value="0">
                                                      <button type="submit" class="special alert-warning" style="border: none;  cursor: pointer"><i class="fa fa-star"></i></button>
                                                  </form>
                                                  <a class="alert-success col-3" href="#" data-toggle="modal"  data-target="#{{$author->id}}_edit" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                      <i class="fa fa-pencil"></i>
                                                  </a>
                                                </div>
                                              </div>
                                            
                                          </div>
                                        </div>
                                      @include('admin.admin_partials.guest_modals')
                                      @endif
                                      
                                 @endforeach
                                
                              @foreach(\App\Author::where('featured', '0')->orderBy('id', 'desc')->get() as $author)
                                
                                        @if($author->deleted == 0)
                                          <div class="col-lg-3" >
                                          <div class="card card-default" style="margin-bottom:10px; text-align: center; overflow: hidden;  ">
                                  @if($author->featured == 1)
                                    <div class="badge badge-default hero2" style="position: absolute; font-size:20px; width:80px; background-color: #FFD700; border-radius:0px !important;font-weight:500; height: 80px; text-align: left; overflow: hidden; left: -40px; top: -40px"><i class="fa fa-star rotate_fix" style="padding-top:45px; padding-left: 36px; "></i></div>
                                  @endif
                                    <div class="animated fadeInDown" style=" position: absolute;top:150px; color:white; letter-spacing: -1px; background:rgba(0,0,0,0.7); padding:10px; width:85%">
                                      <h4 style="text-align: left;">{{ucwords(strtolower($author->name))}}<h4>
                                    </div>
                                              <img class="card-img-top" src="{{asset('uploads/writers-speakers/'.$author->image)}}" style="width: 100%; height: 250px; margin:0px !important;">
                                                <div class="card-footer" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border-radius: 0px; padding: 0px">
                                                  <div class="row" style="padding: 0px; margin:0px; font-size: 20px">
                                                    <a class="alert-info col-3" href="#" data-toggle="modal" data-target="#{{$author->id}}" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                        <i class="fa fa-info" ></i>
                                                    </a>
                                                    <form class="alert-danger col-3" action="{{ url('/admin/edit_guest/delete/'.$author->id) }}" method="POST" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                      {{ csrf_field() }}
                                                        <button type="submit" class="special" style="border: none; background-color: #FAD6D9;  cursor: pointer"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    <form class="alert-warning col-3" action="{{ url('/admin/edit_guest/set_priority/'.$author->id) }}" method="POST" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                      {{ csrf_field() }}
                                                      <input type="hidden" name="star" value="1">
                                                        <button type="submit" class="special alert-warning" style="border: none;  cursor: pointer"><i class="fa fa-star-o"></i></button>
                                                    </form>
                                                    <a class="alert-success col-3" href="#" data-toggle="modal" data-target="#{{$author->id}}_edit" style="text-decoration: none; padding: 0px !important; margin: 0px !important">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                  </div>
                                                </div>
                                              
                                            </div>
                                          </div>
                                        @include('admin.admin_partials.guest_modals')
                                        @endif
                                        
                                   @endforeach

                                
                        @else
                    <div class="col-12">
                       <div class="alert alert-danger">
                              No authors have been added for {{Config('app.next_festival_year')}} <br>
                              <b>This area will not be populated in a localhost environment!</b>
                          </div>  
                    </div>
                       

                  @endif
                </div>

              @else
                  <div class="alert alert-danger">
                      No speakers/writers have been added for {{Config('app.next_festival_year')}}
                  </div>

              @endif
          </div>
    		</div>
      </div>
    </div>
  </div>

@endsection