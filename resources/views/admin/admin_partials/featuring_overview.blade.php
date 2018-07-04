
@extends('layouts.app')
<?php
use App\Question;
use App\Attending;
?>
@section('pageTitle')
  Featuring Guests
@endsection

@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render_admin')
  
	<div class="container">
<br>
		@if(Session::has('removed'))
			<div class="alert alert-danger">{{ Session::get('removed') }}</div>
		@endif
    @if(Session::has('edited'))
        <div class="alert alert-success">{{Session::get('edited')}}</div>
    @endif
    <div class="row" style="padding: 0 !important; margin: 0 !important">
      <div class="col-lg-2 col-md-2">
        <a onclick="history.back();"  style="color:#5B6265; cursor: pointer">
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
			<h1>{{Auth::user()->name}}'s Dashboard <sup><span class="badge badge-danger"  style="font-size:15px !important; padding:1px">Admin</span></sup> <a class="pull-right" style="text-decoration: none; color: inherit;">Edit Featuring</a></h1>
		</div>
    <br>
    <div class="row" style="margin:0; padding:0">
    	<div class="col-lg-12 col-md-12">
    		<div class="card card-default">
    			<div class="card-header">
    				<h4>Featuring <div class="pull-right"><a href="{{route('admin_add_featuring_add')}}"><span class="badge badge-primary" style="cursor: pointer;">Add</span></a></div></h4>
    			</div>
    				<div class="card-body" style="font-family: Montserrat">
              @if( \App\Featured::count())
                  <center>
                     <table class="table table-striped table-bordered table-condensed">
                         <thead>
                             <tr>
                             		<th style="text-align: center">ID</th>
                                 <th style="text-align: center" >Name</th>
                                 <th style="text-align: center">More Info</th>
                                 <th class="alert-danger" style="text-align: center">Remove</th>
                                 <th class="alert-success" style="text-align: center">Edit</th>
                             </tr>
                         </thead>
                         <tbody>

                                 @foreach(\App\Featured::orderBy('id', 'desc')->get() as $person)
                                  @if($person->deleted == 0)
                                    <a name="an"></a>
                                      <tr class="@if(Session::has('edited') and $person->id == Session::get('edited_id')) animated flash @endif">
                                      	<td>{{$person->id}}</td>
                                          <td style="padding-right: 0px">{{ucwords(strtolower(str_limit($person->name, 25)))}}</td>
                                          <td  style="text-align: center"><a href="#" data-toggle="modal" data-target="#{{$person->id}}">Click here</a></td>
                                          <td class="alert-danger"  style="text-align: center">
                                          <form action="{{ url('/admin/featuring/delete/'.$person->id) }}" method="POST">
                                            {{ csrf_field() }}
                          				            <button type="submit" class="special" style="border: none; background-color: #FAD6D9; color:#3097d1; cursor: pointer">Click Here</button>
                          				        </form>
                                      	</td>
                                         <td class="alert-success" style="text-align: center"><a href="#" data-toggle="modal" data-target="#{{$person->id}}_edit">Click here</a></td>
                                      </tr>
                                    @else
                                    @endif
                                    @include('admin.admin_partials.featuring_modals')

                                 @endforeach

                         </tbody>
                     </table>	
                  </center>
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