@extends('layouts.app')

@section('content_desktop_render')
<div class="container">

    @if(Auth::user()->change_password == 1 )
        <div class="row col-12" style="margin-top: 10%">
            <div class="col-6 " style="color:; text-align: center ">
                <h2 style="font-family: Montserrat">Admin Password Reset Page</h2>
                <br>
                @include('common.errors')
                <div class="alert alert-info" style="text-align: left">
                    <h4 class="alert-heading">
                        Why are you here?
                    </h4>
                    <p>
                        You could have been redirected to this page for a few reasons, for example:
                        <ol>
                            <li>You haven't changed your password for while</li>
                            <li>You have never changed your password</li>
                        </ol>
                        So please change your password to access admin features!
                    </p>
                </div>
            </div>
            <div class="col-6" style="color:">
                <form class="form-horizontal" method="POST" action="{{ route('admin_reset_auth') }}">
                    {{ csrf_field() }}

                    <input type="hidden" id="password" name="password" value="{{Auth::user()->password}}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class=" control-label">E-Mail Address</label>

                    <div class="">
                            <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required  readonly>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class=" control-label">New Password</label>

                        <div class="">
                            <input id="new_password" type="password" class="form-control" name="new_password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class=" control-label">Confirm New Password</label>
                        <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="new_password_conf" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @else
            <div class="alert alert-info">
                You don't need to reset your password at this moment in time
            </div>
        @endif
            
</div>
@endsection
