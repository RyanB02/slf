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
<body class="bg-dark" style="
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
</head>
        <div class="d-none d-lg-block">
            @include('layouts.partials.special')
            @yield('content_desktop_render')
        </div>
        <div class="d-xl-none d-lg-none">
            @include('layouts.partials.special')
            @yield('content_mobile_render')
        </div>
    </body>
</html>
