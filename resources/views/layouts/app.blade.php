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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101016611-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101016611-1');
</script>

 
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
        .datepicker{
          z-index: 1100 !important;
        }
        .nav-link{
            font-family: Montserrat;
        }

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
        .nav-hide_spec_desktop { display: none; }
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
          width: 45px !important;
          height: 45px;
          z-index: 20;
          cursor: pointer;
          color:white;
        }
        .navbar-toggle_spec_desktop_closed {
          width: 45px;
          z-index: 20;
          cursor: pointer;
          margin-top:7px;
        }
        .navbar-toggle_spec_desktop_open {
          width: 45px;
          z-index: 20;
          cursor: pointer;
          margin-top:7px;
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
        .bar1_desktop,
        .bar2_desktop,
        .bar3_desktop {
          width: 70%;
          height: 4px;
          margin-bottom: 5px;
          background-color: #515253;
          transition: all 0.3s ease-in-out;
        }
        .bar4_desktop,
        .bar5_desktop,
        .bar6_desktop {
          width: 70%;
          height: 4px;
          margin-bottom: 5px;
          background-color: #515253;
          transition: all 0.3s ease-in-out;
        }
        .navbar-on_desktop .bar1_desktop,
        .navbar-on_desktop .bar2_desktop,
        .navbar-on_desktop .bar3_desktop, {display: none }

        

        .navbar-on_desktop .bar4_desktop,
        .navbar-on_desktop .bar5_desktop,
        .navbar-on_desktop .bar6_desktop { background-color: white; }

        .navbar-on_desktop .bar4_desktop {
          transform-origin: 10% 40%;
          transform: rotate(45deg);
        }
        .navbar-on_desktop .bar5_desktop { background-color: transparent; }
        .navbar-on_desktop .bar6_desktop {
          transform-origin: 10% 40%;
          transform: rotate(-45deg);
        }


        .top{
            background-color: white;
            padding: 15px
        }
        .top_desktop{
            background-color: white;
            padding: 15px;
            transition: 0.3s;

        }
        .nav-shade{
            transition: 0.3s
        }
        .nav-shade:hover{
            color: blue !important;

        }
        .navbar-on .bar2 { background-color: transparent; }

        .navbar-on .bar1,
        .navbar-on .bar2,
        .navbar-on .bar3 { background-color: transparent; }

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
        @font-face {
            font-family: 'cdreams';
            src: url('{{asset('fonts/CaviarDreams.woff')}}') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        .social{
            color: grey !important;
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
        }

        .social:hover{
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }
        html {
            position: relative;
            llmin-height: 100% !important;
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
            border-color: black;
            color:black !important;
            font-family: Montserrat
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
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#edeff5",
      "text": "#838391"
    },
    "button": {
      "background": "#4b81e8"
    }
  },
  "theme": "edgeless",
  "position": "bottom-right"
})});
</script>
</head>
<?php
$month = Config::get('app.month');;
?>

    <main>
        @if(config('app.maintenance') == "active")
            @if(Auth::user())
                @if(Auth::user()->admin == 1)
                    <div class="alert alert-danger" style="text-align: center">
                        Maintenance mode is currently active, the site is unlocked for you because your are an Admin, congrats!
                    </div>
                    <div class="d-none d-lg-block">
                        @yield('content_desktop_render')
                    </div>
                    <div class="d-lg-none d-xl-none">
                        @include('layouts.partials.nav')
                        @yield('content_mobile_render')
                    </div>
                @else
                    @include('layouts.maint_message')
                @endif
            @else
                @include('layouts.maint_message')
            @endif
            
        @else
            @if(Auth::user())
                @if(Auth::user()->admin == 1)
                   <p id="repeat_admin_view" style="background-color: red; text-align: center; position: relative; color:white; font-family: Montserrat; height:20px; overflow: hidden; margin-bottom: 0px"></p>
                   <div class="alert alert-danger"  style="text-align: center; position: relative;  font-family: Montserrat; verflow: hidden; margin-bottom: 0px; border:0px solid; border-radius: 0px">New admin features are still in development</div>
                @endif
            @endif
            <div class="d-none d-lg-block">
                @include('layouts.partials.nav')
                @if(Auth::user() and Auth::user()->admin == 1)
                    @yield('content_desktop_render_admin')
                @endif
                @yield('content_desktop_render')
                
            </div>
            <div class="d-lg-none d-xl-none">
                @include('layouts.partials.nav')
                @if(Auth::user() and Auth::user()->admin == 1)
                    @yield('content_mobile_render_admin')
                @endif
                
                @yield('content_mobile_render')
            </div>
            <div class="d-xl-none d-lg-none " >
            <a href="javascript:" class="return-to-top"><i class="fa fa-caret-up" ></i></a>
              <a data-toggle="modal" data-target="#contact-modal-mobile"  class="contact-us"><i class="fa fa-envelope"></i></a>
                <div id="contact-modal-mobile" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
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
            </div>
        @endif
    </main>

    <!-- Scripts -->

    <!--<div class="row col-12" style="padding: 0px !important; margin:0px !important">
        @/include('layouts.partials.footers')
    </div>-->  
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>
    <script>
        var str = " Admin View &bull; ";
        document.getElementById("repeat_admin_view").innerHTML = str.repeat(150);
    </script>
    <script type="text/javascript">
        $(function(){
          $('.navbar-toggle_spec').click(function(){
            $('.navbar-toggle_spec').toggleClass('navbar-on');
            $('nav').fadeToggle();
            $('nav').removeClass('nav-hide_spec');

          });
        });
    </script> 
{{--     <script>
        jQuery(document).ready(function(){
            if (jQuery(window).width() > 900) {
                var alerted1 = localStorage.getItem('alerted1') || '';
                    if (alerted1 != 'true1') {
                     swal({
                      title: "Hi there!",
                      text: "We have recently updated our site, so if you find anything that is wrong we would love to hear from you! Please email our web developer at: ryan@saddleworthlitfest.co.uk",
                      icon: "info",
                      closeOnClickOutside: true,
                      closeOnEsc: true,
                      button:"Okay",
                    });
                     localStorage.setItem('alerted1','true1');
                    }
            }  
        });
    </script> --}}
    <script type="text/javascript">
        $(function(){
          $('.navbar-toggle_spec_desktop_closed').click(function(){
             $('.navbar-toggle_spec_desktop_closed').removeClass('navbar-toggle_spec_desktop_closed');
            $('.2578').toggleClass(' navbar-toggle_spec_desktop_open ');
            $('.2578').toggleClass(' navbar-on_desktop ');
            $('nav').fadeIn('slow');
            $('.card').removeClass(' fadeOutDown ');
            $('.card').addClass(' fadeInUp ');
           
          });
        });

        $(function(){
          $('.2578').click(function(){
            $('nav').delay(0800).fadeOut('slow');
            $('.2578').removeClass('navbar-on_desktop');
            $('.2578').removeClass('navbar-toggle_spec_desktop_open');
            $('.2572').addClass(' navbar-toggle_spec_desktop_closed ');
            $('.card').removeClass(' fadeInUp ');
            $('.card').addClass(' fadeOutDown ');
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
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</html>


