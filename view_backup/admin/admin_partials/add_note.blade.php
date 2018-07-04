
@extends('layouts.app')
<?php
use App\Question;
use App\Attending;
use App\tmpnote;
?>
@section('pageTitle')
  Admin
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection


@section('content_desktop_render_admin')
  <div class="container"> 
    <div class="page-header" style="color:#c0cdcf">
      <h1>{{Auth::user()->name}}'s Dashboard <sup><span class="label label-danger"  style="font-size:15px !important; padding:1px">Admin</span></sup> <a class="pull-right" style="text-decoration: none; color: inherit;">Home</a></h1>
    </div>
  </div>
        <div class="container">
          <div class="col-lg-6 col-md-6 " style="margin-left: 37%">
              <a  href="{{route('sponsors')}}" style="color:inherit;">
                      <button class="btn alert-success" style="width: 50%; height:5%;font-family: sans-serif; font-weight: 700; float: left; font-size: 15px; ">
                             Edit Sponsors
                      </button>  
                  
              </a>
          </div>
      </div>
      <br>
      <div class="container hidden-md">
        @if(Session::has('logout'))
            <div class="alert alert-success">Bye Bye {{Session::get('logout')}}, you have logged out!</div>
        @endif
        @if(Session::has('edited'))
            <div class="alert alert-success">{{Session::get('edited')}}</div>
        @endif
        <a  href="{{route('admin_edit_about')}}" style="cursor: pointer;" id="about_circ"> 

            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1">
                <div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
                    <center>
                        <br>
                        <i class="fa fa-info fa-5x" aria-hidden="true"></i>
                        <h4>Edit About Us</h4> 
                    </center>
                </div>
            </div>
        </a>
        <a  href="#" style="cursor: pointer;" id="about_circ"> 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
                    <div class="panel-body">
                        <center>
                            <i class="fa fa-calendar fa-5x" aria-hidden="true" style="padding-top: 8%"></i>
                            <h4>Edit Upcoming Events</h4>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="{{route('edit_guests')}}" style="cursor: pointer;" id="about_circ"> 
            <div class="col-lg-2 col-md-2">
                <div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
                    <div class="panel-body">
                        <center>
                            <i class="fa fa-address-book fa-5x" aria-hidden="true" style="padding-top: 10%"></i>
                            <h4>Edit Guests {{config('app.next_festival_year')}}</h4>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" style="cursor: pointer;" id="about_circ" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265">
                    <div class="panel-body">
                        <center>
                            <i class="fa fa-star fa-5x" aria-hidden="true" style="padding-top: 10%"></i>
                            <h4>Edit Featuring</h4>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <?php
          if(App\Question::count() > 1)
            {
              $sub = 'Submissions';
              $panel_style = 'opacity:1;  cursor: pointer;';
              $link = ''.route("admin_questions_home").'';
            }elseif(App\Question::count() == 1){
              $sub = 'Submission';
              $panel_style = 'opacity:1; cursor: pointer;';
              $link = ''.route("admin_questions_home").'';
            }else{
              $sub = 'Submissions';
              $panel_style = 'opacity: 0.5; cursor: not-allowed;';
              $link = '#';
            };
        ?>
        <a  href="#"  id="about_circ"> 
            <div class="col-lg-2 col-md-2">
              <a href="<?php echo $link; ?>" style="text-decoration: none; color: inherit">
                <div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265; <?php echo $panel_style; ?>">
                    <div class="panel-body">
                        <center>
                            <i class="fa fa-5x" aria-hidden="true" style="padding-top: 4%">{{App\Question::count()}}</i>
                            <h4>Contact Form <?php echo $sub; ?></h4>
                        </center>
                    </div>
                </div>
              </a>
            </div>
        </a>
    </div>
    <div class="container">
      <div class="col-lg-6 col-md-6">
        <div class="panel panel-default ">
          <div class="panel-heading">
            Admin Panel Welcome
          </div>
          <div class="panel-body">
            <h3>The Circles above will give you access to various tools, such as:</h3>
            <p>-Editing main pages</p>
            <p>-Editing the Guest list</p>
            <p>-Editing Sponsors</p>
            <p>And more..</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            Admin Panel Notes <a href="{{route('admin')}}"><div class="pull-right"><span class="label label-danger" style="font-size: 15px">Cancel</span></div></a>
          </div>
          <div class="panel-body">
              @include('common.errors')
              <form class="form-vertical" role="form" method="POST" action="{{ url('admin/add_note/') }}" style="display: inline">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="note">Note</label>    
                  <textarea name="note" class="form-control textarea_auto_resize" placeholder="Please input your note here!"></textarea>   
                </div>
                <button class="btn btn-primary pull-right" type="submit">Add Note</button>      
              </form>
          </div>
        </div>
      </div>
    </div>
  

@endsection
@section('content_mobile_render')
<html>
    <body>

          <div class="container"> 
            <div class="alert alert-danger">Mobile Admin will be completed soon!</div>
            <div class="page-header" style="color:#c0cdcf; font-size: 19px">
              {{Auth::user()->name}}'s Dashboard <a class="pull-right" style="text-decoration: none; color: inherit;"> Home</a>
            </div>
          </div>
        <div class="container" >
            <a style="color:#5B6265; font-family: Montserrat" style="">
                <div class="panel panel-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;" >
                    <div class="panel-body alert-">
                        <i class="fa fa-star fa-2x" aria-hidden="true"  style="font-size: 20px; "> Edit Sponsors</i>- <a style="color:red; text-decoration: none"> ?</a><i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a " style="color:#5B6265; font-family: Montserrat;" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important;  cursor: not-allowed;  text-decoration: none; opacity: 0.5 "  >
                    <div class="panel-body">
                        <i class="fa fa-info fa-2x" aria-hidden="true"  style="font-size: 20px"> Edit About Us</i> - <a style="color:red; text-decoration: none"> WIP</a>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a  style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;">
                    <div class="panel-body">
                        <i class="fa fa-calendar fa-2x" aria-hidden="true" style="font-size: 20px"> Edit Events</i>- <a style="color:red; text-decoration: none"> ?</a>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a  style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;" >
                    <div class="panel-body">
                        <i class="fa fa-star fa-2x" aria-hidden="true" style="font-size: 20px"> Edit Featuring</i>- <a style="color:red; text-decoration: none"> ?</a>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a  style="color:#5B6265; font-family: Montserrat" >
                <div class="panel panel-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;" >
                    <div class="panel-body">
                        <i class="fa fa-address-book fa-2x" aria-hidden="true" style="font-size: 20px"> Edit Guests {{config('app.next_festival_year')}}</i> - <a style="color:red; text-decoration: none"> WIP</a>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <center  style="opacity: 0.5 !important; cursor: not-allowed !important;">
              <a  style="text-decoration: none; color: inherit; cursor: not-allowed !important;">
                <div class="panel panel-default" style="border-radius:300px !important; height:160px !important; width:160px !important; color:#5B6265; ">
                    <div class="panel-body">
                        <center>
                            <i class="fa fa-5x" aria-hidden="true" style="padding-top: 4%">-</i>
                            <h4>Contact Form Submissions</h4>
                        </center>
                    </div>
                </div>
              </a>
            </center>
        </div>

    </body>
</html>
@endsection