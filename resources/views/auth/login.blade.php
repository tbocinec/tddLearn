@extends('layouts.myappclear')

@section('content')



<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift University</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="col-sm-12">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line {{ $errors->has('email') ? ' error' : '' }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong class="font-bold col-pink">{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <input type="text" id="email"   value="{{ old('email') }}" class="form-control" name="email" placeholder="email" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line {{ $errors->has('password') ? ' error' : '' }}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong class="font-bold col-pink">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="">
                    <input type="checkbox" name="remember" id="remeber" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : ''}}>
                    <label for="remeber">Remember Me</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">
                        SIGN IN
                    </button>


                    <a href="{{ route('register') }}" class="btn btn-raised waves-effect" >SIGN UP</a>
                </div>
                <div class="text-center"> <a  href="{{ route('password.request') }}">Forgot Password?</a></div>
            </form>
        </div>
    </div>
</div>
<div class="theme-bg"></div>
@endsection
