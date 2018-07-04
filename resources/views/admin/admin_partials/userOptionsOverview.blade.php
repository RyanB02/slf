
@extends('layouts.app')
<?php
use App\User;
?>
@section('pageTitle')
  User Options
@endsection

@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render_admin')
  
  <div class="container">

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
      <h1>{{Auth::user()->name}}'s Dashboard <sup><span class="badge badge-danger"  style="font-size:15px !important; padding:1px">Admin</span></sup> <a class="pull-right" style="text-decoration: none; color: inherit;">Edit Users</a></h1>
    </div>
    <br>
    <div class="row" style="margin:0; padding:0">
      <div class="col-lg-12 col-md-12">
        <div class="card card-default">
          <div class="card-header">
            <h4>Users </h4>
          </div>
            <div class="card-body" style="font-family: Montserrat">
              @if( \App\User::count())
                  <center>
                     <table class="table table-striped table-bordered table-condensed">
                         <thead>
                             <tr>
                                <th style="text-align: center">ID</th>
                                 <th style="text-align: center" >Name</th>
                                 <th style="text-align: center">Options</th>
                                 <!--<th class="alert-danger" style="text-align: center">Delete</th>
                                 <th class="alert-success" style="text-align: center">Edit</th>-->
                             </tr>
                         </thead>
                         <tbody>

                                 @foreach(\App\User::orderBy('id', 'desc')->get() as $person)
                                  @if($person->deleted == 0)
                                    <a name="an"></a>
                                      <tr class="@if(Session::has('edited') and $person->id == Session::get('edited_id')) animated flash @endif">
                                        <td>{{$person->id}}</td>
                                          <td style="padding-right: 0px">{{ucwords(strtolower(str_limit($person->name, 25)))}}</td>
                                          <td  style="text-align: center"><a href="#" data-toggle="modal" data-target="#{{$person->id}}">Click here</a></td>
                                          <!--<td class="alert-danger"  style="text-align: center">
                                          <form action="{/{ url('/admin/featuring/delete/'.$person->id) }}" method="POST">
                                            {/{ csrf_field() }}
                                              <button type="submit" class="special" style="border: none; background-color: #FAD6D9; color:#3097d1; cursor: pointer">Click Here</button>
                                          </form>
                                        </td>
                                         <td class="alert-success" style="text-align: center"><a href="#" data-toggle="modal" data-target="#{/{$person->id}}_edit">Click here</a></td>-->
                                      </tr>
                                    @else
                                    @endif
                                    <div id="{{$person->id}}" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
                                      <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header" >
                                              <h4 class="modal-title pull-left">{{ucwords(strtolower($person->name))}}</h4>
                                              <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
                                            </div>
                                            <div class="modal-body" style="text-align: left">
                                                Force Password Reset: 
                                                @if($person->change_password == 0)
                                                  <div class="float-right">
                                                        <div class="pretty p-switch p-fill">
                                                            <input type="checkbox" />
                                                            <div class="state p-checked">
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                  </div>
                                                @else
                                                <div class="float-right">
                                                        <div class="pretty p-switch p-fill">
                                                            <input type="checkbox" />
                                                            <div class="state p-on">
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                  </div>
                                                @endif
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
                                 @endforeach

                         </tbody>
                     </table> 
                  </center>
              @else
                  <div class="alert alert-danger">
                      No users
                  </div>

              @endif
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection