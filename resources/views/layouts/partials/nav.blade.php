<div class="d-lg-block  d-none">
    @if(Config('app.maintenance') == 'active')

        <nav class="nav-hide_spec_desktop " style="">
            <div class="container-flex" style="margin-top: -15px">
                <div class="row" style="margin:0px; padding: 0px;margin-top:159px; left: 30px">
                    <div class="col-12" ">
                        <h1 class="animated " style="text-align: center; font-family: Montserrat; font-size: 50px; font-weight: thin !important; color:white">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                    </div>
                </div>
            </div>
            <div class="container d-none d-xl-block animated " style="margin-top:30px;">
                
                <div class="row col-12 ml-5">

                    <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 

                        <div class="col-lg-2  ml-2 " style="padding-right: 0px">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265;   ">
                                <center>
                                    <br>
                                    <i class="fa fa-info fa-5x unskew_fix_rep" aria-hidden="true"></i>
                                    <h4 class="unskew_fix_rep">About Us
                                    </h4> 
                                </center>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none " id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: 5px;  ">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.1s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265; border-">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-calendar fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 8%"></i>
                                        <h4 class="unskew_fix_rep">Upcoming Events</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.2s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-address-book fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                        <h4 class="unskew_fix_rep"> Guests {{config('app.next_festival_year')}}</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.3s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-star fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                        <h4 class="unskew_fix_rep">Featuring</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 " id="about_circ"> 
                        <div class="col-lg-4 " style="padding-left:0px  !important; margin-left: -10px; ">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.4s;border-radius:0px !important; height:160px !important; width:320PX !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-picture-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                        <h4 class="unskew_fix_rep">Gallery</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @if(Auth::user() and Auth::user()->admin == 1)
                    <div class="row col-12 mt-5 ml-3">
                        <div class="col-12">
                            <div class="card card-default animated fadeInUp" style="border-color:#CF2941 !important">
                                <div class="card-header bg-danger" style="border:none; color:white">Admin Quick Panel</div>
                                <div class="card-body" style="text-align: left; font-size: 25px">
                                    <a style="font-family: Montserrat" href="{{route('admin')}}" class="">Dashoard</a>
                                    <a style="float: right !important" href="{{ route('logout') }}" id="" 
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        LOGOUT
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <hr>
                                    <center>
                                        <h4>Logged in as: {{Auth::user()->name}}</h4>
                                        <h4>Acount created: {{Auth::user()->created_at}}</h4>
                                        <h4>Admin Status: {{Auth::user()->admin}}</h4>
                                        <h4>Logged in at: {{Auth::user()->session_start}}</h4>
                                    </center>
                                    
                                </div>
                            </div>
                        </div>

                        
                    </div>
                @elseif(Auth::user())

                @else

                @endif
            </div>
        </nav>
        <div class="top_desktop">
            <div class="container justify-content-end" style="padding: 0px !important; margin-top: 0px !important">
                <ul class="nav "  style="float:right; padding: 0px; margin-top: -7px">
                    <li class="nav-item"><a href="#" class=""><i class="fa fa-home" aria-hidden="true" style="color:black;font-size: 35px; margin-right: 15px; "></i></a></li>
                    <div class="navbar-toggle_spec_desktop_closed 2572 menu nav-shade" title="" >
                      <div class="bar1_desktop"></div>
                      <div class="bar2_desktop"></div>
                      <div class="bar3_desktop"></div>
                    </div>
                    <div class=" 2578 menu nav-shade" title="" >
                      <div class="bar4_desktop"></div>
                      <div class="bar5_desktop"></div>
                      <div class="bar6_desktop"></div>
                    </div>
                </ul>
               <h1 style="font-size: 20px; font-family: Montserrat; text-align: ; margin-top: 5px !important; padding: 0px !important; margin:0px;"> <a href="/" style=" text-decoration: none; color: inherit;">Saddleworth Literary Festival</a></h1>
            </div>

            
        </div>
        <hr style="border-color: white; margin-top: 0px; padding: 0px">

    @else
        <!--<nav class="navbar navbar-expand-lg   "  style="background-color: white !important;  
            @if($month == 'Dec')
                background-image: url({{asset('images/snow.png')}})
            @endif ">
            <div class="container">
                <div class="navbar-header">


                    <!-- Branding Image 
                    <a class="navbar-brand text-dark" href="{{ url('/') }}" style="color:c0cdcf;">
                        Saddleworth Literary Festival  @if(Auth::user() and Auth::user()->admin == 2)<sup><span class="label label-primary">{{Auth::user()->name}}  View</span></sup>@endif
                        <sup>
                            @if(Auth::user() and Auth::user()->admin == 1)
                                <span class="badge badge-danger" >Admin View</span>
                            @else
                            @endif
                        </sup>

                    </a>

                
                </div>


                <nav class="nav-hide_spec_desktop " style="margin-top: -15px !important; padding: 0px !important; font-size: 26pt; color:white">
                  <ul>
                    <li><a href="{{route('about')}}" class="nav_link">About</a></li>
                    <hr style="border-color: white">
                    <li ><a href="{{route('upcoming')}}" class="nav_link">Upcoming Events</a></li>
                    <hr style="border-color: white">
                    <li ><a href="{{route('guests')}}" class="nav_link">Guests {{config('app.next_festival_year')}}</a></li>
                    <hr style="border-color: white">
                    <li><a href="{{route('featuring')}}" class="nav_link">Featuring</a></li>
                    <hr style="border-color: white">
                    <li ><a href="{{route('schedule')}}" class="nav_link">Schedule {{config('app.next_festival_year')}}</a></li>
                    <hr style="border-color: white">
                    <p style="font-size: 10pt">Saddleworth Literary Festival <?php echo date('Y');?>, All rights reserved.</p>
                  </ul>
                </nav>
                <div class="navbar-collapse justify-content-end" id="app-navbar-collapse">
                    <ul class="nav ">
                        <li class="nav-item"><a href="#" class=" "><i class="fa fa-home" aria-hidden="true" style="font-size: 36px; margin-right: 15px; "></i></a></li>
                        <div class="navbar-toggle_spec_desktop menu" title="" style="top:10px !important" >
                          <div class="bar1"></div>
                          <div class="bar2 "></div>
                          <div class="bar3"></div>
                        </div>
                    </ul>
                    <!-- Left Side Of Navbar 
                    @if(Auth::user() and Auth::user()->admin == 1)
                            <ul class="nav ">
                                    <li class="nav-item"><a class="nav-link  alert-info" style="text-decoration: none; margin: 0px;  ">{{config('app.version')}}</a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" href="{{route('admin')}}" class="">Dashoard</a></li>
                                    <li cass="dropdown nav-item">
                                        <a href="#" class="dropdown-toggle text-dark nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu bg-light" role="menu" style=>
                                            <li class="nav-item ">
                                                
                                                <a href="{{ route('logout') }}" class="dropdown-item text-dark nav_link" id="" 
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                            </ul>

                    @endif

            </div>
        </nav>-->
        <nav class="nav-hide_spec_desktop " style="">
            <div class="container-flex" style="margin-top: -15px">
                <div class="row" style="margin:0px; padding: 0px;margin-top:159px; left: 30px">
                    <div class="col-12" ">
                        <h1 class="animated "  style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important; color:white">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                    </div>
                </div>
            </div>
            <div class="container d-none d-xl-block animated " style="margin-top:30px;">
                
                <div class="row col-12 ml-5">

                    <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 

                        <div class="col-lg-2  ml-2 " style="padding-right: 0px">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265;   ">
                                <center>
                                    <br>
                                    <i class="fa fa-info fa-5x unskew_fix_rep" aria-hidden="true"></i>
                                    <h4 class="unskew_fix_rep">About Us
                                    </h4> 
                                </center>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none " id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: 5px;  ">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.1s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265; border-">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-calendar fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 8%"></i>
                                        <h4 class="unskew_fix_rep">Upcoming Events</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.2s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-address-book fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                        <h4 class="unskew_fix_rep"> Guests {{config('app.next_festival_year')}}</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none" id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -10px;">
                            <div class="card card-default text-dark hero animated fadeInUp" style="animation-delay:0.3s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-star fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                        <h4 class="unskew_fix_rep">Featuring</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 " id="about_circ"> 
                        <div class="col-lg-4 " style="padding-left:0px  !important; margin-left: -10px; ">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.4s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-picture-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                        <h4 class="unskew_fix_rep">Gallery</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 " id="about_circ"> 
                        <div class="col-lg-4 " style="padding-left:0px  !important; margin-left: -10px; ">
                            <div class="card card-default  text-dark hero animated fadeInUp" style="animation-delay:0.4s;border-radius:0px !important; height:160px !important; width:160px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-clock-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                        <h4 class="unskew_fix_rep">Schedule</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @if(Auth::user() and Auth::user()->admin == 1)
                    <div class="row col-12 mt-5 ml-3">
                        <div class="col-12">
                            <div class="card card-default animated fadeInUp" style="border-color:#CF2941 !important">
                                <div class="card-header bg-danger" style="border:none; color:white">Admin Quick Panel</div>
                                <div class="card-body" style="text-align: left; font-size: 25px">
                                    <a style="font-family: Montserrat" href="{{route('admin')}}" class="">Dashoard</a>
                                    <a style="float: right !important" href="{{ route('logout') }}" id="" 
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        LOGOUT
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <hr>
                                    <center>
                                        <h4>Logged in as: {{Auth::user()->name}}</h4>
                                        <h4>Acount created: {{Auth::user()->created_at}}</h4>
                                        <h4>Admin Status: {{Auth::user()->admin}}</h4>
                                        <h4>Logged in at: {{Auth::user()->session_start}}</h4>
                                    </center>
                                    
                                </div>
                            </div>
                        </div>

                        
                    </div>
                @elseif(Auth::user())

                @else

                @endif
            </div>
            <div class="container d-none d-lg-block  d-xl-none animated fadeIn" style="margin-top:30px; marg">
                
                <div class="row col-12">

                    <a  href="{{route('about')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                        <div class="col-lg-2 ml-1 " style="padding-right: 0px">
                            <div class="card card-default text-dark hero animated fadeInUp" style="border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265;   ">
                                <center>
                                    <br>
                                    <i class="fa fa-info fa-5x unskew_fix_rep" aria-hidden="true"></i>
                                    <h4 class="unskew_fix_rep">About Us
                                    </h4> 
                                </center>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('upcoming')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                        <div class="col-lg-2  " style="padding-left:0px  !important; margin-left:-1px;  ">
                            <div class="card card-default  text-dark hero animated fadeInUp" style=" animation-delay: 0.1s;border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265; border-">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-calendar fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 8%"></i>
                                        <h4 class="unskew_fix_rep">Upcoming Events</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="{{route('guests')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px;">
                            <div class="card card-default text-dark hero animated fadeInUp" style=" animation-delay: 0.2s;border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-address-book fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                        <h4 class="unskew_fix_rep"> Guests {{config('app.next_festival_year')}}</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a  href="{{route('featuring')}}" style="cursor: pointer; text-decoration: none; margin:0px" id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px;">
                            <div class="card card-default  text-dark hero animated fadeInUp" style=" animation-delay: 0.3s;border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-star fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 10%"></i>
                                        <h4 class="unskew_fix_rep">Featuring</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5; margin:0px" id=""> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px; ">
                            <div class="card card-default text-dark hero animated fadeInUp" style=" animation-delay: 0.3s;border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-picture-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                        <h4 class="unskew_fix_rep">Gallery</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a  href="#" style="cursor: not-allowed; text-decoration: none; opacity: 0.5 ; margin:0px" id="about_circ"> 
                        <div class="col-lg-2 " style="padding-left:0px  !important; margin-left: -16px;">
                            <div class="card card-default text-dark hero animated fadeInUp" style=" animation-delay: 0.4s;border-radius:0px !important; height:160px !important; width:145px !important; color:#5B6265">
                                <div class="card-body">
                                    <center>
                                        <i class="fa fa-clock-o fa-5x unskew_fix_rep" aria-hidden="true" style="padding-top: 3%"></i>
                                        <h4 class="unskew_fix_rep">Schedule {{config('app.next_festival_year')}}</h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @if(Auth::user() and Auth::user()->admin == 1)
                    <div class="row col-12 mt-5 ml-3">
                        <div class="col-12">
                            <div class="card card-default animated fadeInUp" style="border-color:#CF2941 !important">
                                <div class="card-header bg-danger" style="border:none; color:white">Admin Quick Panel</div>
                                <div class="card-body" style="text-align: left; font-size: 25px">
                                    <a style="font-family: Montserrat" href="{{route('admin')}}" class="">Dashoard</a>
                                    <a style="float: right !important" href="{{ route('logout') }}" id="" 
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        LOGOUT
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <hr>
                                    <center>
                                        <h4>Logged in as: {{Auth::user()->name}}</h4>
                                        <h4>Acount created: {{Auth::user()->created_at}}</h4>
                                        <h4>Admin Status: {{Auth::user()->admin}}</h4>
                                        <h4>Logged in at: {{Auth::user()->session_start}}</h4>
                                    </center>
                                    
                                </div>
                            </div>
                        </div>

                        
                    </div>
                @elseif(Auth::user())

                @else

                @endif
            </div>

        </nav>
        <div class="top_desktop">
            <div class="container justify-content-end" style="padding: 0px !important; margin-top: 0px !important">
                <ul class="nav "  style="float:right; padding: 0px; margin-top: -7px">
                    <li class="nav-item"><a href="/" class=""><i class="fa fa-home" aria-hidden="true" style="color:#515253;font-size: 35px; margin-right: 15px; "></i></a></li>
                    <div class="navbar-toggle_spec_desktop_closed 2572 menu nav-shade" style="color:#515253" title="" >
                      <div class="bar1_desktop"></div>
                      <div class="bar2_desktop"></div>
                      <div class="bar3_desktop"></div>
                    </div>
                    <div class=" 2578 menu nav-shade" style="color:#515253" title="" >
                      <div class="bar4_desktop"></div>
                      <div class="bar5_desktop"></div>
                      <div class="bar6_desktop"></div>
                    </div>
                </ul>
               <h1 style="font-size: 20px; font-family: Montserrat; text-align: ; margin-top: 5px !important; padding: 0px !important; margin:0px;"> <a href="/" style=" text-decoration: none; color: inherit;">Saddleworth Literary Festival</a></h1>
            </div>

            
        </div>

    @endif
</div>


<div class=" d-lg-none d-xl-none ">
    @if(Config('app.maintenance') == 'active')
        
    @else
        <nav class="nav-hide_spec " style="margin-top: -15px !important; padding: 0px !important; font-size: 26pt; color:white">
          <ul>
            <li><a href="{{route('about')}}" class="nav_link_mobile">About</a></li>
            <hr style="border-color: white">
            <li ><a href="{{route('upcoming')}}" class="nav_link_mobile">Upcoming Events</a></li>
            <hr style="border-color: white">
            <li ><a href="{{route('guests')}}" class="nav_link_mobile">Guests {{config('app.next_festival_year')}}</a></li>
            <hr style="border-color: white">
            <li><a href="{{route('featuring')}}" class="nav_link_mobile">Featuring</a></li>
            <hr style="border-color: white">
            <li ><a href="{{route('schedule')}}" class="nav_link_mobile">Schedule {{config('app.next_festival_year')}}</a></li>
            <hr style="border-color: white">
            <p style="font-size: 10pt">Saddleworth Literary Festival <?php echo date('Y');?>, All rights reserved.</p>
          </ul>
        </nav>
        <div class="top">
            <div class="navbar-toggle_spec menu" title="" >
              <div class="bar1"></div>
              <div class="bar2 "></div>
              <div class="bar3"></div>

            </div>
            <div class="d-none d-sm-block">
                <a href="/" style=" text-decoration: none; color: inherit"><h1 style="font-size: 20px; font-family: Montserrat; text-align: center; margin-top: 5px !important; padding: 0px !important; margin:0px;">Saddleworth Literary Festival</h1></a>
            </div>
            <div class="d-md-none d-sm-none">
                <a href="/" style=" text-decoration: none; color: inherit"><h1 style="font-size: 16px; font-family: sans-serif; text-align: right; margin-top: 5px !important; padding: 0px !important; margin:0px;">Saddleworth Literary Festival</h1></a>
            </div>
            
        </div>
    @endif

</div>
