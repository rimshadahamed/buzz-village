<title>Admin-Login | Business Village - Connect</title>
<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<div class="signin-wrapper">

    <div class="signin-box">
        <h2 class="slim-logo"><img src="../img/bvpp.jpg"><a href="index.html"> connect<span>.</span></a></h2>
        <h2 class="signin-title-primary">Welcome back!</h2>
        <h3 class="signin-title-secondary">Sign in to continue.</h3>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group mg-b-50">
            <input type="password" class="form-control" placeholder="Enter your password">
        </div><!-- form-group -->
        <a class="btn btn-primary btn-block btn-signin" href="{{route('admin-dashboard')}}">Sign In</a>
        <p class="mg-b-0">Forgot Password? <a href="">Click here</a></p>
    </div><!-- signin-box -->

</div>
@include('partials.footer')







































{{--
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
    </div>
@endif
--}}
