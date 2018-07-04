<!--
    Copyright of Saddleworth Literary Festival
    Developer: Ryan Barnes
    Developer Email: ryanbpy1@gmail.com
    Framework: Laravel
    Version: 1
    This site is used to publish information regarding the saddleworth literary festival as organised by Grahan Unsworth
-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head> 
    <?php
        use App\Sponsor;
        if (date('d/mh:i:s') < '24/038:20:00' and date('d/mh:i:s') > '25/0308:17:00')
        {
            //
        }else{
            //
        }
    ?>

 
    <meta charset="utf-8">
    <meta name="google-site-verification" content="3tKjaUjBWQDa2wonb5IM5fS0nvKgDdbU7cfAcJH-Qu8" />
    <meta property="og:image" content="{{asset('images/cropped-favicon-1.png')}}">
    <meta name="description" content="Welcome to The Saddleworth Literary Festivals Official Website">
    <meta name="keywords" content="Festival">
    <meta name="author" content="Ryan Barnes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FFFFFF" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}} | @yield('pageTitle')</title> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pretty-checkbox.min.css')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <style type="text/css">

        nav,
        .navbar-toggle_spec {
          -webkit-touch-callout: none;
          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        nav {
          position: fixed;
          z-index: 10;
          background-color: rgba(0,0,0, 0.8) !important;
          width: 100%;
          height: 110%;
          text-align: center;
          display: table;
          color: inherit;
        }

        .nav-hide_spec { display: none; }

        nav ul {
          display: table-cell;
          vertical-align: middle;
          padding-left: 0 !important;
        }

        nav ul li { list-style: none; }

        nav ul li a {
          color: inherit;
          font-weight: bolder;
          text-decoration: none !important;
        }
        .navbar-toggle_spec {
          position: absolute;
          top: 20px;
          left: 20px;
          width: 45px;
          height: 45px;
          z-index: 20;
          cursor: pointer;
          color:white;
        }

        .bar1,
        .bar2,
        .bar3 {
          width: 70%;
          height: 4px;
          margin-bottom: 5px;
          background-color: black;
          transition: all 0.3s ease-in-out;
        }


        .navbar-on .bar1,
        .navbar-on .bar2,
        .navbar-on .bar3 { background-color: white; }

        .navbar-on .bar1 {
          transform-origin: 10% 40%;
          transform: rotate(45deg);
        }

        .navbar-on .bar3 {
          transform-origin: 10% 40%;
          transform: rotate(-45deg);
        }

        .top{
            background-color: white;
            padding: 15px
        }

        .navbar-on .bar2 { background-color: transparent; }
        @-webkit-keyframes blink {
                0%   { border-color:red; }
                50%  { border-color:blue;}
                100% { border-color:red; }
        }
        @-moz-keyframes blink {
                0%   { border-color:red; }
                50%  { border-color:blue;}
                100% { border-color:red; }
        }
        @-ms-keyframes blink {
                0%   { border-color:red; }
                50%  { border-color:blue;}
                100% { border-color:red; }
        }
        .draw {
             -webkit-animation: blink 2s infinite;
             -moz-animation:    blink 2s infinite;
             -ms-animation:     blink 2s infinite;
             border: 2px solid;
        }
        @font-face {
            font-family: 'fairy_wings';
            src: url('{{asset('fonts/fairy_wings-webfont.woff2')}}') format('woff2'),
                 url('{{asset('fonts/fairy_wings-webfont.woff')}}') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        .social{
            color:white;
            transition: 0.3s;
        }
        .unskew_fix{
            transform: skew(5deg) !important;
        }
        
        .rotate_fix{
            transform: rotate(-45deg);
        }

        .social:hover{
            color:#33A5FF;
        }

        .hero {
          transition: 0.3s;
          transform: skew(-5deg);
        }

        .hero2 {
          transform: rotate(45deg);

        }

        .hero_inactive {
          clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
          transition: 0.3s;
          overflow: hidden;
          cursor: not-allowed;
        }
        .hero:hover{
            -webkit-transform: scale(1.2);
            z-index: 1;
            transform: scale(1.2) skew(-5deg);
        }

        .social:hover{
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .nav_link:hover{
            background-color: inherit !important;
        }
        .contact-us {
            position: fixed;
            bottom: 90px;
            right: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            display: block;
            text-decoration: none;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            z-index: 999999;
        }
        .contact-us i {
            color: #fff;
            margin: 0;
            position: relative;
            left: 13px;
            top: 10px;
            font-size: 25px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        .contact-us:hover{
             background: rgba(0, 0, 0, 0.9);
        }
        .return-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            display: block;
            text-decoration: none;
            -webkit-border-radius: 35px;
            -moz-border-radius: 35px;
            border-radius: 35px;
            display: none;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            z-index: 999999;
        }
        .return-to-top i {
            color: #fff;
            margin: 0;
            position: relative;
            left: 18px;
            top: 10px;
            font-size: 25px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        .return-to-top:hover {
            background: rgba(0, 0, 0, 0.9);
        }
        .return-to-top:hover i {
            color: #fff;
            top: 5px;
        }
        .special:hover{
            text-decoration: underline;
        }
        .panel_special_test{
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -ms-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }
        .panel_special_test:hover{
            color:blue;
        }

        .blink_me {
          animation: blinker 0.9s linear infinite;
          -webkit-animation-timing-function:steps(1, end);
        }

        @keyframes blinker {  
          50% { opacity: 0; }

        }
        .page-header{
            border-bottom: 1px solid;
            border-color: white;
            color:white !important;
        }
        .move-right{
            transition: transform  0.8s;
        }
        .move-right:hover{
            transform: translate(20px, 0px);
            
        }
        .nav_link_mobile{
            transition: 0.5s;
            font-family: Montserrat;
            font-weight: 100

        }
        .nav_link_mobile:hover{
            
        }
    </style>
</head>
<?php
$month = Config::get('app.month');;
?>

    <main>
    @if(config('app.maintenance') == "active")
        @if(Auth::user())
            @if(Auth::user()->admin == 1)
                <div class=" d-none d-lg-block bg-dark" style="height: 100%">
                        @yield('scroll')
                        @include('layouts.partials.nav')
                        @yield('content_desktop_render')
                        @if(Auth::user() and Auth::user()->admin == 1)
                            @yield('content_desktop_render_admin')
                        @elseif(Auth::user() and Auth::user()->admin == 2)
                        @elseif(Auth::user() and Auth::user()->admin != 0)
                            <div class="container">
                                <div class="alert alert-danger">
                                    You are not an admin!
                                </div>
                            </div>
                        @endif
                </div>
                <div class="d-xl-none d-lg-none ">
                    @yield('scroll')
                    @include('layouts.partials.nav')
                    @yield('content_mobile_render')
                    @if(Auth::user() and Auth::user()->admin == 1)
                        @yield('content_mobile_render_admin')
                    @elseif(Auth::user() and Auth::user()->admin == 2)

                    @elseif(Auth::user() and Auth::user()->admin != 1)
                        <div class="container">
                            <div class="alert alert-danger">
                                You are not an admin!
                            </div>
                        </div>
                    @endif
                </div>
            @elseif(Auth::user()->admin != 1)
                <div id="app">
                    @include('layouts.partials.nav_maintenance')
                    <div class="container">
                        <div class="alert alert-danger" style="text-align: center">
                            You are not an Admin!
                        </div>
                        <div class="card card-default">
                            <div class="card-header" style="text-align: center">Maintenance Mode</div>
                            <div class="card-body" style="text-align: center">
                                Saddleworth Literary Festival is currently in maintenance mode.
                                <br>
                                We appologise for the inconvenience, we should be back soon
                                <hr>
                                &copy; <?php echo date("Y"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @else
            @include('layouts.partials.nav_maintenance')
            <div class="container " style="margin-top: 10%">
                <div class="card card-default" style="border: 2px solid; border-color: #CF2941; border-radius: 5px ">
                    <div class="card-header bg-danger" style="text-align: center; ">Maintenance Mode</div>
                    <div class="card-body" style="text-align: center">
                        Saddleworth Literary Festival is currently in maintenance mode.
                        <br>
                        We appologise for the inconvenience, we should be back soon
                        <hr>
                        Last updated: {{config('app.maintenance_last_updated')}}
                        <br>
                        &copy; <?php echo date("Y"); ?> Saddleworth Literary Festival
                    </div>
                </div>
            </div>
        @endif
    @else
    <div class="d-none d-lg-block bg-dark" style="min-height: 1000px !important">
            @yield('scroll')
            @include('layouts.partials.nav')
            @yield('content_desktop_render')
            @if(Auth::user() and Auth::user()->admin == 1)
                @yield('content_desktop_render_admin')
            @elseif(Auth::user() and Auth::user()->admin == 2)
            @elseif(Auth::user() and Auth::user()->admin != 0)
                <div class="container">
                    <div class="alert alert-danger">
                        You are not an admin!
                    </div>
                </div>
            @endif




    </div>
    </body>
        <div class="d-xl-none d-lg-none " >
            <a href="javascript:" class="return-to-top"><i class="fa fa-caret-up" ></i></a>
            <a href="#" data-toggle="modal" data-target="#contact-modal"  class="contact-us"><i class="fa fa-envelope"></i></a>
            <div id="contact-modal" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form class="form-vertical" role="form" method="post" action="/contact">
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
                                    <label for="radio" style="width:100%">Your Message*<div class="count pull-right">0/2000</div></label>
                                        <textarea class="form-control textarea_auto_resize message" id="message"  name="message" placeholder="Your message...(please try to keep below 2000 characters)" style="resize: none; min-height: 50px !important; ">{!! old('message') !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            @include('layouts.partials.nav')
            @yield('content_mobile_render')

                 
                @if(Auth::user() and Auth::user()->admin == 1)
                    @yield('content_mobile_render_admin')
                @elseif(Auth::user() and Auth::user()->admin == 2)
                @elseif(Auth::user() and Auth::user()->admin != 0)
                    <div class="container">
                        <div class="alert alert-danger">
                            You are not an admin!
                        </div>
                    </div>
                @endif

        </div>  


    @endif
    </main>

    <!-- Scripts -->

    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>
    <script type="text/javascript">
        $(function(){
          $('.navbar-toggle_spec').click(function(){
            $('.navbar-toggle_spec').toggleClass('navbar-on');
            $('nav').fadeToggle();
            $('nav').removeClass('nav-hide_spec');
          });
        });
    </script> 
    <script type="text/javascript">
        $.fn.extend({
        autoresize: function () {
        $(this).on('change keyup keydown paste cut', function () {
        $(this).height(0).height(this.scrollHeight);
        }).change();
        }
        });

        $('.textarea_auto_resize').autoresize();
    </script>
    <script>
        $(".message").keyup(function(){
          $(".count").text($(this).val().length + '/2000');
        });
    </script>

</html>


