{{--@extends('layouts.app')--}}
@section('content')
@endsection
<div class="hidden">@include('partials.header')</div>

</body>
</html>
<body>

<div class="d-md-flex flex-row-reverse">
    <div class="signin-right">

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

        <div class="signin-box">
            <h2 class="signin-title-primary">Welcome back!</h2>
            <h3 class="signin-title-secondary">Sign in to continue.</h3>
            @if(session()->has('login_error'))
                <div class="alert alert-success">
                    {{ session()->get('login_error') }}
                </div>
            @endif

            <div class="form-group">
                <input id="identity" type="" class="form-control" name="identity"
                       placeholder="Enter your email"   autofocus>

                @if ($errors->has('identity'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('identity') }}</strong>
                                    </span>
                @endif
            </div><!-- form-group -->
            <div class="form-group mg-b-50">
                <input id="password" type="password" class="form-control" placeholder="Enter your password" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div><!-- form-group -->

          {{--  <div class="form-group">
                <div class="col-md-12 ">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>--}}
            <button class="btn btn-primary btn-block btn-signin" type="submit">Sign In</button>
            <p class="mg-b-0">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
        </div>

        </form>

    </div><!-- signin-right -->
    <div class="signin-left">
        <div class="signin-box">
            <h2 class="slim-logo"><img src="../img/bvpp.jpg"><a href=""> connect<span>.</span></a></h2>

            <p>We are excited to launch Business Village | Connect. A new way to engage with the business village community and find out whats happening around the area. Business Village is the center and the pulse of the Small & Medium enterprise businesses. Sign up and engage with our community.</p>

            <p>Browse our site and learn how you can be a part of the community.</p>

            <p><a href="" class="btn btn-outline-secondary pd-x-25">Learn More</a></p>

            <p class="tx-12">&copy; Copyright 2018. All Rights Reserved.</p>
        </div>
    </div><!-- signin-left -->
</div><!-- d-flex -->





</body>

