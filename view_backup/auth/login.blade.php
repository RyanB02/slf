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
        <div class="row col-12" style="margin-top: 10%">
            <div class="col-6 " style="color:white; text-align: center ">
                <img src="{{asset('images/login_icon.png')}}" style="height: 35%">
                <h2 style="text-align: center" class="mt-5">Saddleworth Literary Festival</h2>
                <h3>Admin Login</h3>
            </div>
            <div class="col-6" style="color:white; ">
                <div class="card card-default" style="border:none">
                    <div class="card-body bg-dark">
                        @include('common.errors')
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
                                    <!--
                                    <a class="btn btn-link" href="{/{ url('/password/reset') }}">Forgot Your
                                        Password?</a>-->
                                </div>
                            </div>
                        </form>
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
