@extends('layouts.special')
<?php
$month = config('app.month');

?>
@section('pageTitle')
    Login
@endsection

@section('content_desktop_render')
    
    <div class="container">

        @if(Session::has('login'))
            <div class="alert alert-danger">
                {{Session::get('login')}}
            </div>
        @endif
        <!--
        <div class="row col-12">
            <div class="col-6" style="height:90%; background-color: red">
                
            </div>
            <div class="col-6" style="height:90%; background-color: blue">
                
            </div>
        </div>-->

        <div class="d-none d-xl-block">
                <div class="container-flex" style="margin-top: -15px">

                <div class="row" style="margin:0px; padding: 0px;margin-top:100px; left:20vw">
                    <div class="col-12" ">
                        <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                        <h2 style="text-align: center; font-family: cdreams;font-weight: thin !important; margin-top: 1%">Admin Login</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12" style="margin-top: 3%">
            <div class="col-8 offset-2" style="color:; ">
                <div class="card card-default" style="">
                    <div class="card-body ">
                        @include('common.errors')
                        @if(App\frontpageoption::where('element_name', 'admin_log_enabled')->get(['data']) == '[{"data":"1"}]')

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="form-text text-muted">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Password</label>

                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="form-text text-muted">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <input type="hidden" name="url" value="{{Session::get('url')}}">
                                <div class="form-group pull-right">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                        
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your
                                            Password?</a>
                                    </div>
                                </div>
                            </form>
                        @else
                            <center>
                                <i class="fa fa-lock fa-5x" aria-hidden="true"></i>
                                <h3 style="font-family: Montserrat">Admin login is currently locked</h3>
                            </center>
                            Lock reason:<br>
                            @foreach(App\frontpageoption::where('element_name', 'admin_log_enabled')->get() as $admin_log_enabled){{$admin_log_enabled->data2}}@endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>

        </div>
    </div>
@endsection
@section('content_mobile_render')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="card card-default">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-lg-4 control-label">E-Mail Address</label>

                            <div class="col-lg-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-lg-4 control-label">Password</label>

                            <div class="col-lg-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6 col-lg-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
