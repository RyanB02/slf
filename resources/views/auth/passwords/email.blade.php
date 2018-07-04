@extends('layouts.app')

@section('content_desktop_render')

    <div class="d-none d-xl-block">
            <div class="container-flex" style="margin-top: -15px">

            <div class="row" style="margin:0px; padding: 0px;margin-top:100px; left:20vw">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">Saddleworth Literary Festival<sup>{{config('app.next_festival_year')}}</sup></h1>
                    <h2 class="animated fadeIn" style="text-align: center; font-family: cdreams;font-weight: thin !important; margin-top: 1%">Password Reset</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 3%">
        <div class="row col-12">
            <div class="col-8 offset-2">
                <div class="card card-default">

                    <div class="card-body">
                        <h4 style="font-family: Montserrat; text-align: center">    
                            Due to this site only allowing admin users, you cannot reset your password yourself.<br>
                            This may seem like an inconvenience but is a security feature.<br>
                            To have your password reset please email our web master:<br>
                            <a style="text-decoration: none; font-family: cdreams; color:blue">ryan@saddleworthlitfest.co.uk</a><br><br>
                            Or submit a request here:<br>

                        </h4>
                        <!--@if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-4 control-label">E-Mail Address</label>

                                <div class="col-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-6 offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>-->
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
