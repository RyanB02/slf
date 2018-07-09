
@extends('layouts.app')
<?php
use App\Question;
use App\Attending;
use App\tmpnote;
?>
<?php
    $date = strtotime("April 2019");
    $remaining = $date - time();
    $days_remaining = floor($remaining / 86400);
    $hours_remaining = floor(($remaining % 86400) / 3600 + 1);
?>
@section('pageTitle')
  Admin
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection


@section('content_desktop_render_admin')
  <div class="container mt-5"> 
    @if(Session::has('logout'))
        <div class="alert alert-success">Bye Bye {{Session::get('logout')}}, you have logged out!</div>
    @endif
    @if(Session::has('edited'))
        <div class="alert alert-success">{{Session::get('edited')}}</div>
    @endif
    @if(Session::has('pass_changed'))
     <script>
        swal({
          title: "Password Changed!",
          text: "Thank you! Carry on Admining!",
          icon: "success",
          closeOnClickOutside: false,
          closeOnEsc: false,
        });
     </script>
    @endif
    <div class="page-header" >
      <h1>{{Auth::user()->name}}'s Dashboard <sup><span class="badge badge-danger"  style="font-size:15px !important; padding:1px">Admin</span></sup> <a class="pull-right" style="text-decoration: none; color: inherit;">Home</a></h1>
    </div>
  </div>
      <br>

  <div class="container ">
      <div class="card card-default" style="border-radius: 0px; margin-top: 0px; border-color: #F3F2F3; margin-bottom: 20px" >
        <div class="card-body" style="padding: 15px;  text-align: center; height: 100%; ">
            <i class="fa fa-2x" aria-hidden="true" style="font-size: 20px; color:#30343A; font-weight: 800; font-family: sans-serif;   "><?php echo $days_remaining; ?> Days till festival!</i> 
        </div>
      </div>
    <div class="d-none d-xl-block">
    <div class="row ml-5" >
        <a  href="{{route('edit_pages_index')}}" style="text-decoration: none; color: inherit" id="about_circ"> 

            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1" style="">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-success" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>
                    <center>
                        <br>

                        <i class="fa fa-pencil fa-5x" aria-hidden="true"></i>
                        <h5 style="padding-top: 5px">Edit Pages</h5> 
                    </center>
                </div>
            </div>
        </a>
        <a  href="#" style="text-decoration: none; color: inherit" id="about_circ"> 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-dark" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500;">Under dev</div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-calendar fa-5x" aria-hidden="true" ></i>
                            <h5 style="padding-top: 5px">Edit Upcoming Events</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="{{route('edit_guests')}}" style="text-decoration: none; color: inherit" id="about_circ"> 
            <div class="col-lg-2 col-md-2">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-primary" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">UPDATED!</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-address-book fa-5x" aria-hidden="true" ></i>
                            <h5 style="padding-top: 5px">Edit Guests {{config('app.next_festival_year')}}</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="{{route('admin_add_featuring')}}" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-warning" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Functional</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-star fa-5x" aria-hidden="true" ></i>
                            <h5 style="padding-top: 5px">Edit Featuring</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <?php
          if(App\Question::count() > 1)
            {
              $sub = 'Submissions';
              $card_style = 'opacity:1;  cursor: pointer;';
              $link = ''.route("admin_questions_home").'';
            }elseif(App\Question::count() == 1){
              $sub = 'Submission';
              $card_style = 'opacity:1; cursor: pointer;';
              $link = ''.route("admin_questions_home").'';
            }else{
              $sub = 'Submissions';
              $card_style = 'opacity: 0.7; cursor: not-allowed;';
              $link = '#';
            };
        ?>
        <a  href="{{route('admin_add_sponsor')}}" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" >
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-warning" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Functional</div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-money fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Add Sponsors</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
      </div>

      <br>
      <div class="row ml-5">
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                           <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">User Options</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Timetable</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-clipboard fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Event Management (WIP)</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">WIP</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-cog fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Site Settings</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
      </div>
    </div>
<div class="d-none d-lg-block d-xl-none">
    <div class="row" >
      <a  href="{{route('edit_pages_index')}}" style="text-decoration: none; color: inherit" id="about_circ"> 
            <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1" style="">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-success" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">NEW!</div>
                    <center>
                        <br>

                        <i class="fa fa-pencil fa-5x" aria-hidden="true"></i>
                        <h5 style="padding-top: 5px">Edit Pages</h5> 
                    </center>
                </div>
            </div>
        </a>
        <a  href="#" style="text-decoration: none; color: inherit" id="about_circ"> 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-dark" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500;">Under dev</div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-calendar fa-5x" aria-hidden="true" ></i>
                            <h5 style="padding-top: 5px">Edit Upcoming Events</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="{{route('edit_guests')}}" style="text-decoration: none; color: inherit" id="about_circ"> 
            <div class="col-lg-2 col-md-2">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-primary" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">UPDATED!</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-address-book fa-5x" aria-hidden="true" ></i>
                            <h5 style="padding-top: 5px">Edit Guests {{config('app.next_festival_year')}}</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="{{route('admin_add_featuring')}}" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-warning" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Functional</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-star fa-5x" aria-hidden="true" ></i>
                            <h5 style="padding-top: 5px">Edit Featuring</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <?php
          if(App\Question::count() > 1)
            {
              $sub = 'Submissions';
              $card_style = 'opacity:1;  cursor: pointer;';
              $link = ''.route("admin_questions_home").'';
            }elseif(App\Question::count() == 1){
              $sub = 'Submission';
              $card_style = 'opacity:1; cursor: pointer;';
              $link = ''.route("admin_questions_home").'';
            }else{
              $sub = 'Submissions';
              $card_style = 'opacity: 0.7; cursor: not-allowed;';
              $link = '#';
            };
        ?>
        <a  href="{{route('admin_add_sponsor')}}" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" >
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-warning" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">Functional</div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-money fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Add Sponsors</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
      </div>
      <br>
      <div class="row">
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;" >
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                           <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">User Options</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-clock-o fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Timetable</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-clipboard fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Event Management (WIP)</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">                        
                        <center>
                            <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">WIP</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
        <a  href="#" id="about_circ" style="text-decoration: none; color: inherit" > 
            <div class="col-lg-2 col-md-2" style="opacity: 0.5; cursor: not-allowed;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265">
                    <div class="badge badge-danger" style=" position: absolute; font-size:20px; width:100%; border-top-right-radius:3px; border-top-left-radius:3px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;font-weight:500">WIP</div>
                    <div class="card-body">
                        <center>
                            <i class="fa fa-cog fa-5x" aria-hidden="true"></i>
                            <h5 style="padding-top: 5px">Site Settings</h5>
                        </center>
                    </div>
                </div>
            </div>
        </a>
      </div>
    </div>
    </div>
    <br>
    <div class="container">
      <div class="row col-12">
        <div class="col-12">
            <div class="alert alert-warning">
                Panels with the 'functional' tag on them do work but they need to be refreshed/re-thought out because they aren't the most efficient
            </div>
        </div>
        
        <div class="col-6">
          <div class="card card-default">
            <div class="card-header">Contact Form Submissions</div>
            <div class="card-body">
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
        <div class="col-6">
          <div class="card card-default">
            <div class="card-header">Contact Form Stats</div>
            <div class="card-body" style="padding:0 ">
              <div class="row" style="padding: 0 !important; margin:0 !important ">
                <div class="col-12 alert-info" style="text-align: center">
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
        <!--
        <div class="col-lg-6 col-md-6">
          <div class="card card-default">
            <div class="card-header">
              Options
            </div>
            <div class="card-body">
              
              <div class="pretty p-switch p-fill ">
                  <input  type="checkbox" disabled>
                  <div class="state p-primary p-off">
                      <label>Beta Mode - coming soon</label>
                  </div>
              </div>
              <br>
              <div class="pretty p-switch p-fill ">
                  <input type="checkbox" disabled>
                  <div class="state p-primary p-off">
                      <label>Maintenance mode - coming soon</label>
                  </div>
              </div>
              <br>
            
              <div class="pretty p-switch p-fill ">
                  <input type="checkbox" disabled>
                  <div class="state p-primary p-off">
                      <label>Ticket Alert - coming soon</label>
                  </div>
              </div>
              -->
            </div>
          </div>



  


@endsection
@section('content_mobile_render')
<html>
    <body>
          <div class="container"> 
            @if(Session::has('edited'))
              <div class="alert alert-success">{{Session::get('edited')}}</div>
            @endif
            <div class="alert alert-danger">Mobile Admin will be completed soon!</div>
            <div class="page-header" style="color:#c0cdcf; font-size: 19px">
              {{Auth::user()->name}}'s Dashboard <a class="pull-right" style="text-decoration: none; color: inherit;"> Home</a>
            </div>
          </div>
        <div class="container" >
            <a style="color:#5B6265; font-family: Montserrat" style="">
                <div class="card card-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;" >
                    <div class="card-body alert-">
                        <i class="fa fa-star fa-2x" aria-hidden="true"  style="font-size: 20px; "> Edit Sponsors</i>- <a style="color:red; text-decoration: none"> ?</a><i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('admin_edit_about')}}" style="color:#5B6265; font-family: Montserrat;" >
                <div class="card card-default" style="background-color: #F4F4F4 !important; text-decoration: none; "  >
                    <div class="card-body">
                        <i class="fa fa-info fa-2x" aria-hidden="true"  style="font-size: 20px"> Edit About Us</i>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a  style="color:#5B6265; font-family: Montserrat" >
                <div class="card card-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;">
                    <div class="card-body">
                        <i class="fa fa-calendar fa-2x" aria-hidden="true" style="font-size: 20px"> Edit Events</i>- <a style="color:red; text-decoration: none"> ?</a>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a  style="color:#5B6265; font-family: Montserrat" >
                <div class="card card-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;" >
                    <div class="card-body">
                        <i class="fa fa-star fa-2x" aria-hidden="true" style="font-size: 20px"> Edit Featuring</i>- <a style="color:red; text-decoration: none"> ?</a>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <a  style="color:#5B6265; font-family: Montserrat" >
                <div class="card card-default" style="background-color: #F4F4F4 !important;opacity: 0.5 !important; cursor: not-allowed;" >
                    <div class="card-body">
                        <i class="fa fa-address-book fa-2x" aria-hidden="true" style="font-size: 20px"> Edit Guests {{config('app.next_festival_year')}}</i> - <a style="color:red; text-decoration: none"> WIP</a>  <i class="fa fa-caret-right fa-2x pull-right" aria-hidden="true" style="font-size: 20px"></i>
                    </div>
                </div>
            </a>
            <center  style="opacity: 0.5 !important; cursor: not-allowed !important;">
              <a  style="text-decoration: none; color: inherit; cursor: not-allowed !important;">
                <div class="card card-default" style=" height:160px !important; width:160px !important; color:#5B6265; ">
                    <div class="card-body">
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
<script>
       
        if(screen && screen.width < 993){
            
    
        
     swal({
					          title: "Locked",
					          text: "Mobile Admin is currently not available",
					          icon: "error",
					          closeOnClickOutside: false,
					          closeOnEsc: false,
					          button: false,
					        });
     
}

					       
			 </script>
</html>
@endsection
