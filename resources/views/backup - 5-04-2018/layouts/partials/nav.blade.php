<div class="d-lg-block  d-none">
    @if(Config('app.maintenance') == 'active')

        <nav class="navbar navbar-expand-lg navbar-light bg-dark "  style="background-color: 364648;    
            @if($month == 'Dec')
                background-image: url({{asset('images/snow.png')}})
            @endif ">
            <div class="container">
                <div class="navbar-header">


                    <!-- Branding Image -->
                    <a class="navbar-brand text-light" href="{{ url('/') }}" style="color:c0cdcf">
                        Saddleworth Literary Festival  @if(Auth::user() and Auth::user()->admin == 2)<sup><span class="label label-primary">{{Auth::user()->name}}  View</span></sup>@endif
                        <sup>
                            @if(Auth::user() and Auth::user()->admin == 1)
                                <span class="badge badge-danger" >Admin View</span>
                            @else
                            @endif
                        </sup>

                    </a>
                
                </div>

                
                <div class="collapse navbar-collapse justify-content-end" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    @if(Auth::user() and Auth::user()->admin == 1)
                            <ul class="nav ">
                                    <li class="nav-item"><a class="nav-link  alert-info" style="text-decoration: none; margin: 0px;  ">{{config('app.version')}}</a></li>
                                    <li class="nav-item"><a class="nav-link text-light" href="{{route('admin')}}" class="">Dashoard</a></li>
                                    <li class="dropdown nav-item">
                                        <a href="#" class="dropdown-toggle text-light nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-toggle  text-light" role="menu">
                                            <li class="nav-item">
                                                
                                                <a href="{{ route('logout') }}" class="dropdown-item " id="" 
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
        </nav>
        <hr style="border-color: white; margin-top: 0px; padding: 0px">
        @if(Auth::user())
            @if(Auth::user()->admin == 1)
                <div class="alert alert-danger" style="margin-bottom:0px ; border-radius: 0px; text-align: center; position: relative; ">
                    <p>Maintenance Mode Is Active, You Can Only See This View Because Your Account ({{Auth::user()->name}}) Has Been Given Special Privilages To Do So</p>
                    <p>None Admin and guests will be presented with a maintenance mode view.</p>
                </div>
            @endif 
        @endif
    @else
        <nav class="navbar navbar-expand-lg navbar-light bg-dark "  style="background-color: 364648;    
            @if($month == 'Dec')
                background-image: url({{asset('images/snow.png')}})
            @endif ">
            <div class="container">
                <div class="navbar-header">


                    <!-- Branding Image -->
                    <a class="navbar-brand text-light" href="{{ url('/') }}" style="color:c0cdcf">
                        Saddleworth Literary Festival  @if(Auth::user() and Auth::user()->admin == 2)<sup><span class="label label-primary">{{Auth::user()->name}}  View</span></sup>@endif
                        <sup>
                            @if(Auth::user() and Auth::user()->admin == 1)
                                <span class="badge badge-danger" >Admin View</span>
                            @else
                            @endif
                        </sup>

                    </a>
                
                </div>

                
                <div class="navbar-collapse justify-content-end" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @if(Auth::user() and Auth::user()->admin == 1)
                            <ul class="nav ">
                                    <li class="nav-item"><a class="nav-link  alert-info" style="text-decoration: none; margin: 0px;  ">{{config('app.version')}}</a></li>
                                    <li class="nav-item"><a class="nav-link text-light" href="{{route('admin')}}" class="">Dashoard</a></li>
                                    <li class="dropdown nav-item">
                                        <a href="#" class="dropdown-toggle text-light nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu bg-dark" role="menu" style=>
                                            <li class="nav-item ">
                                                
                                                <a href="{{ route('logout') }}" class="dropdown-item text-light nav_link" id="" 
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
        </nav>
        <hr style="border-color: white; margin-top: 0px; padding: 0px">


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
