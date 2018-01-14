@extends('layouts.myappclear')

@section('content')

 <div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift University</span>Forgot Password? <div class="msg">Enter your e-mail address below to reset your password.</div></h1>
        <div class="col-sm-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}    <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
                    <div class="form-line {{ $errors->has('email') ? ' error' : '' }}">
                     <input id="email" type="email" class="form-control"  placeholder="Email" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-raised g-bg-blush2">
                            RESET MY PASSWORD
                        </button>
                    </div>
                    <div class="col-sm-12 text-center"> <a href="{{ route('login') }}">Sign In!</a> </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="theme-bg"></div>
@endsection
