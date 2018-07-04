<!--
    Copyright of Saddleworth Literary Festival
    Developer: Ryan Barnes
    Developer Email: ryanbpy1@gmail.com
    Framework: Laravel
    Version: 1
    This site is used to publish information regarding the saddleworth literary festival as organised by Grahan Unsworth
-->

<?php
$month = (Config::get('app.month'));  
?>
<body class="bg-" style="
    @if($month == 'Dec')
        background-image: url({{asset('images/snow.png')}});
    @endif
 ">

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('favicon.ico') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
        <div class="d-none d-lg-block">
            @include('layouts.partials.special')
            @yield('content_desktop_render')
            @yield('content_desktop_render_admin')
        </div>
        <div class="d-xl-none d-lg-none">
            @include('layouts.partials.special')
            @yield('content_mobile_render')
        </div>
    </body>
    
</html>
