
<div class="hidden">@include('partials.header')</div>
{{--
 <div class="container">
    <div class="row justify-content-center" style="margin-top: 30px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register</div>
                <img src="../img/app-icon.png" style="height: auto;width: 30%; margin-left: auto;margin-right: auto; margin-top: 30px;">

                <div class="card-body">
                    <img src="">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <label for="email" class="col-md-4 control                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-12 control-label">mobile</label>
                            <div class="col-md-12">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            -label">E-Mail Address</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>--}}

<body>

<div class="d-md-flex flex-row-reverse">
    <div class="signin-right">

        <div class="signin-box signup">

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
            <h3 class="signin-title-primary">Get Started!</h3>
            <h5 class="signin-title-secondary lh-4">It's free to signup and only takes a minute.</h5>

            <div class="row row-xs mg-b-10">
                <div class="col-sm"> <input id="name" placeholder="Fullname" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif

                </div>
                <div class="col-sm mg-t-10 mg-sm-t-0"><input type="text" placeholder="Mobile Number" class="form-control" name="mobile" placeholder="Mobile Number"></div>
                @if ($errors->has('mobile'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                @endif
            </div><!-- row -->

            <div class="row row-xs mg-b-10">

                <div class="col-sm">
                    <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                    <div class="col-sm">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    </div>

            </div><!-- row -->

            <button href="" class="btn btn-primary btn-block btn-signin" data-toggle="modal" data-target="#modaldemo2">Sign Up</button>

            <div class="signup-separator"><span>or signup using</span></div>

            <a  href="{{url('/redirect')}}"  class="btn btn-facebook btn-block">Sign Up Using Facebook</a>
            <a href="{{url('/login/twitter')}}" class="btn btn-twitter btn-block">Sign Up Using Twitter</a>

            <p class="mg-t-40 mg-b-0">Already have an account? <a href="">Sign In</a></p>

            </form>
        </div><!-- signin-box -->

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

<!-- SMALL MODAL -->
<div id="modaldemo2" class="modal fade">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Account Verification</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">
                <p class="mg-b-5">Your mobile has recieved a verification code. enter code </p>
                <div class="row row-xs mg-b-10"></div>
                <div class="col-sm"><input type="text" class="form-control" placeholder="Verification Code"></div>
                <p class="mg-t-40 mg-b-0">Didnt get the code? <a href="#">Resend code</a></p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.html'">Verify</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->


</body>
