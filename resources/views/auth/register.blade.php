@extends('layouts.myappclear')

@section('content')
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift University</span>Register <span class="msg">Register a new membership</span></h1>
        <div class="col-sm-12">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                </span>
                    <div class="form-line {{ $errors->has('name') ? ' error' : '' }}">
                       <input id="name" type="text" class="form-control" placeholder="Name Surname"  name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong class="font-bold col-pink">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-email"></i>
                </span>
                    <div class="form-line {{ $errors->has('email') ? ' error' : '' }}">
                        <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong class="font-bold col-pink">{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-lock"></i>
                </span>
                    <div class="form-line {{ $errors->has('password') ? ' error' : '' }}">
                        <input id="password" type="password" class="form-control" minlength="6" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong class="font-bold col-pink">{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-lock"></i>
                </span>
                    <div class="form-line {{ $errors->has('password') ? ' error' : '' }}">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">--}}
                    {{--<label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>--}}
                {{--</div>--}}
                <div class="text-center">
                    <button type="submit" class="btn btn-raised g-bg-blush2 waves-effect">
                        Register
                    </button>
                </div>
                <div class="m-t-10 m-b--5 align-center">
                    <a href="{{ route('login') }}">You already have a membership?</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="theme-bg"></div>
@endsection
