{{--@extends('layouts.app')--}}
@section('content')
@endsection
<div class="hidden">@include('partials.header')</div>

</body>
</html>


<div class="container">
    <div class="row justify-content-center" style="margin-top: 30px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>
                <img src="../img/app-icon.png" style="height: auto;width: 30%; margin-left: auto;margin-right: auto; margin-top: 30px;">

                <div class="card-body">
                    <img src="">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @if(session()->has('login_error'))
                            <div class="alert alert-success">
                                {{ session()->get('login_error') }}
                            </div>
                        @endif
                        <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                            <label for="identity" class="col-md-4 control-label">Email or Username</label>

                            <div class="col-md-12">
                                <input id="identity" type="identity" class="form-control" name="identity"
                                       value="{{ old('identity') }}" autofocus>

                                @if ($errors->has('identity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('identity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>

                                <a class="btn btn-outline-primary" style="width: 100%" href="{{ route('register') }}">
                                   Register
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

