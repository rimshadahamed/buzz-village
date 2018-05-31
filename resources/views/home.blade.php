<title>User Dashboard | Business Village - Connect</title>
<!DOCTYPE html>
<html lang="en">
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

<div class="slim-mainpanel">
    <div class="container pd-t-50">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="tx-inverse mg-b-15">Welcome back, Mohammed!</h3>
                <p class="mg-b-40">Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>

                <h6 class="slim-card-title mg-b-15">Motivation of the day</h6>
                <h4 class="mg-b-15">"Motivation is what gets you started. Habit is what keeps you going."</h6>
                    <div class="row no-gutters">

                    </div><!-- row -->
            </div><!-- col-6 -->

            <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0">
                <div class="card card-quick-post">
                    <h6 class="slim-card-title">Share Your Thoughts</h6>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
                    </div><!-- form-group -->
                    <div class="card-footer">
                        <button class="btn btn-purple">Share Post</button>
                        <nav>
                            <a href=""><i class="icon ion-images"></i></a>
                            <a href=""><i class="icon ion-aperture"></i></a>
                            <a href=""><i class="icon ion-calendar"></i></a>
                        </nav>
                    </div><!-- col-6 -->
                </div><!-- row -->
            </div><!-- card -->
        </div><!-- col-6 -->

        <!-- events block -->
        <div class="section-wrapper mg-t-20">
            <label class="section-title">Upcoming Events</label>
            <p class="mg-b-20 mg-sm-b-40">Next few events at Business Village.</p>

            <div class="row">
                @if ($data->isNotEmpty())
                @foreach($data as $d)
                <div class="col-md">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img21.jpg" alt="Image">
                        <div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
                            <h3 class="tx-white tx-medium mg-b-15">{{ $d->event_name }}s</h3>
                            <h6 class="tx-white-7 tx-13">{{ $d->description }} </h6>
                            <p class="mg-b-0"><a href="single-event.html" class="tx-white">Register</a></p>
                        </div><!-- card-img-overlay -->
                    </div><!-- card -->
                </div><!-- col -->
                @endforeach
                @else
                    <div class="card bd-0">
                            No Events available For this Reference.
                    </div><!-- card -->
                @endif
            </div><!-- row -->
        </div><!-- section-wrapper -->

        <!-- blog block -->
        <div class="slim-mainpanel">
            <div class="container pd-t-50">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="tx-inverse mg-b-15">From the blog</h3>

                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0"></div>
                        <div class="card card-blog-split">
                            <div class="row no-gutters">
                                <div class="col-md-5 col-lg-6 col-xl-5" style="height: 260px;">
                                    <figure>
                                        <img src="../img/img19.jpg" class="img-fit-cover" alt="">
                                    </figure>
                                </div><!-- col-4 -->
                                <div class="col-md-7 col-lg-6 col-xl-7">
                                    <p class="blog-category tx-danger">History</p>
                                    <h5 class="blog-title"><a href="single-blog.html">17 Brilliant Short Novels You Can Read in a Sitting</a></h5>
                                    <p class="blog-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Nascetur ridiculus mus. Donec quam felis, ultricies nec...</p>
                                    <span class="blog-date">Mar 11, 2017, 11:30am</span>
                                </div><!-- col-8 -->
                            </div><!-- row -->
                        </div><!-- card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0"></div>
                        <div class="card card-blog-split">
                            <div class="row no-gutters">
                                <div class="col-md-5 col-lg-6 col-xl-5" style="height: 260px;">
                                    <figure>
                                        <img src="../img/img19.jpg" class="img-fit-cover" alt="">
                                    </figure>
                                </div><!-- col-4 -->
                                <div class="col-md-7 col-lg-6 col-xl-7">
                                    <p class="blog-category tx-danger">History</p>
                                    <h5 class="blog-title"><a href="single-blog.html">17 Brilliant Short Novels You Can Read in a Sitting</a></h5>
                                    <p class="blog-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Nascetur ridiculus mus. Donec quam felis, ultricies nec...</p>
                                    <span class="blog-date">Mar 11, 2017, 11:30am</span>
                                </div><!-- col-8 -->
                            </div><!-- row -->
                        </div><!-- card -->
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        $(function(){
            'use strict'

            $('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#fff',
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                scaleColors: ['#17A2B8', '#006491'],
                values: sample_data,
                normalizeFunction: 'polynomial'
            });

        });
    </script>
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
