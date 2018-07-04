
@extends('layouts.app')
<?php
use App\Author;
use App\Sponsor;
$month = Config::get('app.month');;
?>
<?php
    $date = strtotime("March 24, 2018 12:00 AM");

    $remaining = $date - time();
    $days_remaining = floor($remaining / 86400  + 1);
    $hours_remaining = floor(($remaining % 86400) / 3600 + 1);
?>
@section('pageTitle')
    Home
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('meta')
    
@endsection

@section('content_desktop_render')
    <div class="jumbotron" style="text-align: center; font-family: Montserrat; 
        @if($month == 'Dec')
            background-image: url({{asset('images/bg2.jpg')}}); 
        @else
            background-image: url({{asset('images/bg1.jpg')}}); 
        @endif
        background-size:100%;  margin-top: -25px !important; margin-bottom: 0px; background-repeat: no-repeat; background-color: inherit">

        <div class="container" style="margin-top: -25px;"">
            <div class="jumbotron" style=" padding:5px;background-color: rgba(0,0,0,0.5);color: white; font-weight: 700; font-size: 20px !important; ">
                <h1 style="opacity: 2 !important; font-size: 3.5rem !important">Saddleworth Literary Festival</h1>
                <hr style="border-color: white; margin:1px ">
                <h2 style="font-size: 2.5rem ">Home</h2>
            </div>
            @include('tickets')
            <br>
        </div>
    </div>

    <div class="container" style="margin-top: 20px">
        @if(Session::has('logged_ext_user'))
            @include(Session::get('logged_ext_user'))
        @endif
        @if(Session::has('logout'))
            <script>
                swal({
                  title: "Logged Out!",
                  text: "C'ya Later",
                  icon: "success",
                  closeOnClickOutside: false,
                  closeOnEsc: false,
                  button:"C'ya",
                });
            </script>
        @endif
    <div class="row col-12">
        <div class="alert alert-primary col-12" style="text-align: center">We are done for 2018 and so our website may seem a little barebones but <b>we will be back in 2019</b>! So, watch this space!</div>
    </div>
        
    </div>
    <br>

    <div class="container d-none d-xl-block">
        
        <div class="row col-12 ml-4">

            <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 

                <div class="col-lg-2  ml-2 " style="padding-right: 0px">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265;   ">
                        <center>
                            <br>
                            <i class="fa fa-info fa-5x unskew_fix" aria-hidden="true"></i>
                            <h4 class="unskew_fix">About Us
                            </h4> 
                        </center>
                    </div>
                </div>
            </a>
            <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2  " style="padding-left:0px  !important; margin-left: 5px;  ">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265; border-">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-calendar fa-5x unskew_fix" aria-hidden="true" style="padding-top: 8%"></i>
                                <h4 class="unskew_fix">Upcoming Events</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-address-book fa-5x unskew_fix" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix"> Guests {{config('app.next_festival_year')}}</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>

            <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-star fa-5x unskew_fix" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix">Featuring</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 " id="about_circ"> 
                <div class="col-lg-4 " style="padding-left:0px  !important; margin-left: -10px; ">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-picture-o fa-5x unskew_fix" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix">Gallery</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container d-none d-lg-block d-xl-none">
        
        <div class="row col-13 ml-2">
            <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 

                <div class="col-lg-2 " style="padding-right: 0px">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265;  ">
                        <center>
                            <br>
                            <i class="fa fa-info fa-5x unskew_fix" aria-hidden="true"></i>
                            <h4 class="unskew_fix">About Us</h4> 
                        </center>
                    </div>
                </div>
            </a>
            <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2  " style="padding-left:0px  !important; margin-left: -14px;margin-right: -15px  ">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265; border-">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-calendar fa-5x unskew_fix" aria-hidden="true" style="padding-top: 8%"></i>
                                <h4 class="unskew_fix">Upcoming Events</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -14px; margin-right: -15px ">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-address-book fa-5x unskew_fix" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix"> Guests {{config('app.next_festival_year')}}</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>

            <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -14px; margin-right: -15px ">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-star fa-5x unskew_fix" aria-hidden="true" style="padding-top: 10%"></i>
                                <h4 class="unskew_fix">Featuring</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
            <a  href="{{route('schedule')}}" style="cursor: pointer; text-decoration: none " id="about_circ"> 
                <div class="col-lg-4 " style="padding-left:0px  !important; margin-left: -14px; margin-right: -15px ">
                    <div class="card card-default bg-light text-dark hero" style="border-radius:0px !important; height:160px !important; width:320px !important; color:#5B6265">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-clock-o fa-5x unskew_fix" aria-hidden="true" style="padding-top: 3%"></i>
                                <h4 class="unskew_fix">Schedule {{config('app.next_festival_year')}} & Currently Performing Guests</h4>
                            </center>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    

    <br>
    <div class="container">
        <div class="">
            <div class="card card-default bg-light text-dark">
                <div class="card-header" style="text-align: center">Welcome</div>
                <div class="card-body" style="text-align: center;">
                    <div class="row col-13">
                        <div class="col-12" style="font-size: 15px">
                            Welcome to The Saddleworth Literary Festival's Official Site
                            <br>
                            Click one of the cards above to view information about us!
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-none d-xl-block">
            <div class="row mt-2">
                <div class="col-6">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww..facebook.com%2FSaddleworthLiteraryFestival&tabs=timeline&width=500&height=1000&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="500" height="1000" style="border:none;overflow:; border-radius: 5px" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
                <div class="col-6">
                    <a class="twitter-timeline" data-width="900" data-height="1000" data-theme="light" href="https://twitter.com/SaddleworthLit?ref_src=twsrc%5Etfw">Tweets by SaddleworthLit</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block d-xl-none">
            <div class="row mt-2">
                <div class="col-6">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww..facebook.com%2FSaddleworthLiteraryFestival&tabs=timeline&width=400&height=1000&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="400" height="1000" style="border:none;overflow:; border-radius: 5px" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
                <div class="col-6 float-right">
                    <a class="twitter-timeline" data-width="400" data-height="1000" data-theme="light" href="https://twitter.com/SaddleworthLit?ref_src=twsrc%5Etfw">Tweets by SaddleworthLit</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
    <div id="SubmitModal" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" >
                <h4 class="modal-title pull-left">Submit Work to Bill Broady</h4>
                <button type="button" class="close pull-right" data-dismiss="modal" style="font-size: 30px;">&times;</button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{asset('/uploads/writers-speakers/1509462446.jpg')}}" style="border-radius: 10px; width:100%">

                    </div>
                    <div class="col-lg-7">
                        <h2>To submit your piece of work, email:<br> BillBroady@hotmail.co.uk</h2>
                    </div>

                </div>
                <br>
                <div class="row col-12">
                    <blockquote class="blockquote">
                       @foreach(App\Author::where('id', '6')->get() as $bill){!! nl2br(e($bill->desc)) !!}@endforeach
                    </blockquote>
                    
                </div>
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
    <div id="PoetryCompModal" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content" st>
              <div class="modal-body" style="padding: 0px; margin:0px;">
                <img src="{{asset('images/poetry_comp_full.png')}}" style="width:100%;border-top-right-radius:5px;border-top-left-radius:5px; ">
                </div>
                <div class="modal-body">
                    <div class="alert alert-info"><i class="fa fa-info-circle " aria-hidden="true" style="clear: both"></i> Please note that this competition is for young writers</div>
                <b>
                    We are pleased to announce the first major collaborative project run by the
                    Dovestone Learning Partnership. We will be working together to enthuse and
                    inspire youngsters to create an original poem to be judged by students from
                    OSFC and published authors appearing at the Saddleworth Literary Festival.
                    <br><br>• Deadline for submissions is the 28th February 2018
                    <br>• There will be prizes for the winners alongside the opportunity to publish
                    and share your work at the festival of the authors at the Literary Festival.
                    <br>• For further details please see your child’s class teacher.
                </b>
                <br><br>
                <p style="color:grey; text-align: center">
                    A poetry competition run by the Dovestone Learning Partnership.<br>
                    In conjunction with the Saddleworth Literary Festival 24.03.18 & 25.03.18
                </p>
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
@endsection
@section('content_mobile_render')

<html >


    <div class="container-flex">
        <div class="container">
            <div class="page-header" style="margin-top: 15px; color: rgba(0,0,0,0.7) !important;border-color: rgba(0,0,0,0.6) !important ">
                <h1 style="font-family: Montserrat; text-align: center">Welcome</h1>
            </div>

            <div class="card card-default mt-2">
                <div class="card-body" style="text-align: center">
                    <h4>Thank You!</h4>
                    We are done for 2018 and so our website may seem a little barebones but <b>we will be back in 2019</b>! So, watch this space!<br>
                    P.S we will be updating our website so it doesn't look so bare, once again we thank you for your support! Without you there would be no festival!
                </div>
            </div>
            <div class="card card-default mt-2 mb-2" >
                <div class="card-body">
                    <center>
                        <h4 style="margin-top: 0px; font-family: Montserrat; font-weight: 600">Sponsors (Click logos to visit website)</h4>
                        @foreach(App\Sponsor::orderBy('id', 'asc')->get() as $sponsor)
                            <a href="{{$sponsor->website}}" target="_blank">
                                <img style="max-width: 100px; max-height: 70px; margin-left:5px " class="social" src="{{asset('uploads/sponsors/'.$sponsor->image)}}"> 
                            </a>
                        @endforeach
                        </div>
                       
                    </center>

                </div>
            </div>
        </div>
       
    </div>


    

</html>


@endsection
