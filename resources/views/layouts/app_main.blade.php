<!--
    Copyright of Saddleworth Literary Festival
    Developer: Ryan Barnes
    Developer Email: ryanbpy1@gmail.com
    Framework: Laravel
    Version: 3
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pretty-checkbox.min.css')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <style type="text/css">
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
        @font-face {
            font-family: 'cdreams';
            src: url('{{asset('fonts/CaviarDreams.woff')}}') format('woff');
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

        .social{
            margin: 20px;
            text-decoration: none !important
        }
        .social_m{
            margin: 4px;
            text-decoration: none !important;
            transition: 0.3s;
        }

        .hero:hover{
            -webkit-transform: scale(1.2);
            z-index: 1;
        }

        .social_m:hover{
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            color:#4A99FD !important;
        }

        .social:hover{
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            color:#4A99FD !important;
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
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 30px;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 40px;
            margin-left: 50px;
        }

        .testing_grad{

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
                   <div class="alert alert-danger"  style="text-align: center; position: relative;  font-family: Montserrat; overflow: hidden; margin-bottom: 0px; border:0px solid; border-radius: 0px">New admin features are still in development</div>
                @endif
            @endif
            <div class="d-none d-lg-block" >
                @yield('content_desktop_render')    
                
                
            </div>
            <div class="d-lg-none d-xl-none">
                @include('layouts.partials.nav')
                @yield('content_mobile_render')
            </div>
             <div class="d-xl-none d-lg-none " >
                <a href="javascript:" class="return-to-top"><i class="fa fa-caret-up" ></i></a>
                <a href="#" data-toggle="modal" data-target="#contact-modal-mobile"  class="contact-us"><i class="fa fa-envelope"></i></a>
                <div id="contact-modal-mobile" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form class="form-vertical ff1" role="form" method="post" action="/" id="">
                                        {{ csrf_field() }}                            
                                        <div class="form-group">
                                            <label for="attendee_name">Please Input Your Name*</label>
                                            <input class="form-control name" name="name" type="name" id="name"  placeholder="John Doe" value="{!! old('name') !!}"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="attendee_name">Please Input Your Email*</label>
                                            <input  class="form-control email" type="email" name="email" id="email" placeholder="johndoe02@doe.com" value="{!! old('email') !!}" >

                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="attendee_name">Mobile Number (optional) | Please follow format: 07700 900796 (UK only/no need to use +44)</label>
                                            <input  class="form-control" type="text" name="mobile" id="mobile" placeholder="07700 900796" value="{!! old('mobile') !!}" data-format="(ddd) ddd-dddd">

                                        </div>  --}}
                                        <div class="form-group">
                                        <label for="radio" style="width:100%">Your Message*<div class="count pull-right">0/2000</div></label>
                                            <textarea class="form-control textarea_auto_resize message msg" id="message"  name="message" placeholder="Your message...(please try to keep below 2000 characters)" style="resize: none; min-height: 50px !important; ">{!! old('message') !!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="g-recaptcha g-recaptcha-mobile" data-sitekey="6LcH_2AUAAAAAN6zztFOtzRSxm9anSa3G0s67Lsk"></div>
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

            <div class="d-none d-lg-block " >
                <div id="contact-modal-desktop" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form class="form-vertical ff2" role="form" method="post" action="/" id="">
                                        {{ csrf_field() }}                            
                                        <div class="form-group">
                                            <label for="attendee_name">Please Input Your Name*</label>
                                            <input class="form-control name_desktop_verif" name="name" type="name" id="name_desktop" autocomplete='name'  placeholder="John Doe" value="{!! old('name') !!}"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="attendee_name">Please Input Your Email*</label>
                                            <input  class="form-control email_desktop_verif" type="email" name="email" id="email_desktop" placeholder="johndoe02@doe.com" autocomplete='email' value="{!! old('email') !!}" >

                                        </div>
                                        {{--<div class="form-group">
                                            <label for="attendee_name">Mobile Number (optional) | Please follow format: 07700 900796 (UK only/no need to use +44)</label>
                                            <input  class="form-control" type="text" name="mobile" id="mobile_desktop" placeholder="07700 900796" value="{!! old('mobile') !!}" data-format="(ddd) ddd-dddd">

                                        </div>  --}}
                                        <div class="form-group">
                                        <label for="radio" style="width:100%">Your Message*<div class="count pull-right" id="count"></div></label>
                                            <textarea class="form-control textarea_auto_resize message msg_desktop_verif" id="message_desktop"  name="message" placeholder="Your message...(please try to keep below 2000 characters)" style="resize: none; min-height: 50px !important; ">{!! old('message') !!}</textarea>
                                        </div>
                                         <div class="form-group">
                                            <div class="g-recaptcha g-recaptcha-desktop" data-sitekey="6LcH_2AUAAAAAN6zztFOtzRSxm9anSa3G0s67Lsk"></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary pull-right" id="Submit_btn">Submit</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                </form>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var nameval = document.getElementById('name_desktop');
                            var emailval = document.getElementById('email_desktop');
                            // var mobileval = document.getElementById('mobile_desktop');
                            var messageval = document.getElementById('message_desktop');                            
                            nameval.onkeyup = nameval.onkeypress = function(){
                                document.getElementById('name_prev2').innerHTML = this.value;
                            }
                            emailval.onkeyup = emailval.onkeypress = function(){
                                document.getElementById('email_prev').innerHTML = this.value;
                            }
                            // mobileval.onkeyup = mobileval.onkeypress = function(){
                            //     document.getElementById('mobile_prev').innerHTML = this.value;
                            // }
                            messageval.onkeyup = messageval.onkeypress = function(){
                                document.getElementById('message_prev').innerHTML = this.value;
                            }
                        </script>
                        <div class="modal-content" style="margin-top: 5px">
                              <div class="modal-header" >
                                <h4 class="modal-title pull-left">Submission Preview</h4>
                               
                              </div>
                              <div class="modal-body">
                                <form class="form-vertical" role="form" method="#" action="#">
                                        {{ csrf_field() }}                            
                                        <div class="form-group">
                                            <label for="attendee_name">Name:</label><br>
                                            <h4 id="name_prev2" style="font-family: Montserrat; color:grey; overflow: hidden"></h4>
                                        </div>
                                        <div class="form-group">
                                            <label for="attendee_name">Email:</label><br>
                                            <h4 id="email_prev" style="font-family: Montserrat; color:grey; overflow: hidden"></h4>

                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="attendee_name">Mobile:</label><br>
                                            <h4 id="mobile_prev" style="font-family: Montserrat; color:grey; overflow: hidden"></h4>

                                        </div> --}}
                                        <div class="form-group">
                                        <label for="radio" style="width:100%">Message:<div class="count pull-right">0/2000</div></label><br>
                                           <blockquote id="message_prev" style="font-family: Montserrat; color:grey; word-wrap: break-word;"></blockquote>
                                        </div>
                                </form>
                              </div>
                             
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        @endif
    </main>
    @if(Session::has('send_fail'))
        
    @endif

    <!-- Scripts -->

    <!--<div class="row col-12" style="padding: 0px !important; margin:0px !important">
        @/include('layouts.partials.footers')
    </div>-->  
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    
    <script src="{{asset('js/scroll.js')}}"></script>
    <script>
        $(function(){
            $('.ff1').submit(function(event){
                var verif_inc;
                var verif_name;
                var verif_email;
                var verif_msg;
                var verified = document.getElementsByClassName('g-recaptcha-mobile')[0].value;
                var name = document.getElementsByClassName('name')[0].value;
                var email = document.getElementsByClassName('email')[0].value;
                var msg = document.getElementsByClassName('msg')[0].value;
                if(verified.length === 0){
                    verif_inc = 1;   
                    verif_inc_dat = "Recaptcha is required \n";             
                }
                if(verified.length > 0){
                    verif_inc = 0;   
                    verif_inc_dat = "";  
                }
                if(name.length === 0){
                    verif_name = 1;
                    verif_name_dat = "Name is required \n";
                }
                if(name.length > 0){
                    verif_name = 0;   
                    verif_name_dat = "";  
                }
                if(email.length === 0){
                    verif_email = 1;
                    verif_email_dat = "Email is required \n";
                }
                if(email.length > 0){
                    verif_email = 0;   
                    verif_email_dat = "";  
                }
                if (msg.length === 0) {
                    verif_msg = 1;
                    verif_msg_dat = "Message is required \n"
                }
                if(msg.length > 0){
                    verif_msg = 0;   
                    verif_msg_dat = "";  
                }
                if(verif_inc === 1 || verif_name === 1 || verif_email === 1 || verif_msg === 1){
                    event.preventDefault();
                    swal({
                      title: "Warning",
                      text: verif_name_dat + verif_email_dat + verif_msg_dat + verif_inc_dat,
                      icon: "error",
                      closeOnClickOutside: true,
                      closeOnEsc: true,
                      button:"Okay",
                    });
                    
                }
            })
        });
    </script>
    <script>
        $(function(){
            $('.ff2').submit(function(event){
                var verif_inc;
                var verif_name;
                var verif_email;
                var verif_msg;
                var verified = document.getElementsByClassName('g-recaptcha-desktop')[0].value;
                var name = document.getElementsByClassName('name_desktop_verif')[0].value;
                var email = document.getElementsByClassName('email_desktop_verif')[0].value;
                var msg = document.getElementsByClassName('msg_desktop_verif')[0].value;
                if(verified.length === 0){
                    verif_inc = 1;   
                    verif_inc_dat = "Recaptcha is required \n";             
                }
                if(verified.length > 0){
                    verif_inc = 0;   
                    verif_inc_dat = "";  
                }
                if(name.length === 0){
                    verif_name = 1;
                    verif_name_dat = "Name is required \n";
                }
                if(name.length > 0){
                    verif_name = 0;   
                    verif_name_dat = "";  
                }
                if(email.length === 0){
                    verif_email = 1;
                    verif_email_dat = "Email is required \n";
                }
                if(email.length > 0){
                    verif_email = 0;   
                    verif_email_dat = "";  
                }
                if (msg.length === 0) {
                    verif_msg = 1;
                    verif_msg_dat = "Message is required \n"
                }
                if(msg.length > 0){
                    verif_msg = 0;   
                    verif_msg_dat = "";  
                }
                if(verif_inc === 1 || verif_name === 1 || verif_email === 1 || verif_msg === 1){
                    event.preventDefault();
                    swal({
                      title: "Warning",
                      text: verif_name_dat + verif_email_dat + verif_msg_dat + verif_inc_dat,
                      icon: "error",
                      closeOnClickOutside: true,
                      closeOnEsc: true,
                      button:"Okay",
                    });
                    
                }
            })
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
    @if(Auth::user() && Auth::user()->admin  == 1)
        <script>
            var str = " Admin View - ";
            document.getElementById("repeat_admin_view").innerHTML = str.repeat(150);
        </script>
    @endif
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
            if ($(this).val().length > 2000) {
                document.getElementById("count").innerHTML = "You are  " + ($(this).val().length-2000 ) + " characters over";
                document.getElementById("count").style.cssText = "color: red; font-family: Montserrat"; 
                document.getElementById("Submit_btn").style.cssText = "color:black; background-color:transparent; border-color:transparent; opacity:1"; 
                document.getElementById("Submit_btn").innerHTML = "Cannot Submit"; 
                document.getElementById("Submit_btn").disabled = true;
                var alerted = localStorage.getItem('alerted') || '';
                if (alerted != 'yes') {
                 swal({
                      title: "You are "+ ($(this).val().length-2000 ) +" character(s) over",
                      text: "Please shorten your message. If you cannot shorten it please directly email us at: info@saddleworthlitfest.co.uk",
                      icon: "info",
                      closeOnClickOutside: true,
                      closeOnEsc: true,
                      button: 'Okay!',
                    });
                 localStorage.setItem('alerted','yes');
                }

                
                
            }else{
                document.getElementsByClassName("count").innerHTML = $(".count").text($(this).val().length + '/2000');
                document.getElementById("count").style.cssText = "color: black; font-family: Montserrat"; 
                document.getElementById("Submit_btn").style.cssText = "cursor: pointer"; 
                document.getElementById("Submit_btn").innerHTML = "Submit"; 
                document.getElementById("Submit_btn").disabled = false;
                localStorage.setItem('alerted','no');
                
            };
        });

    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</html>


