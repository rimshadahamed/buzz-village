<title>Directory | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')


<div class="slim-mainpanel">
    <div class="container">
        <div class="manager-header">
            <div class="slim-pageheader">
                <ol class="breadcrumb slim-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Directory</li>
                </ol>
                <h6 class="slim-pagetitle">Directory</h6>
            </div><!-- slim-pageheader -->
            <a id="contactNavicon"  href="" class="contact-navicon"><i class="icon ion-navicon-round"></i></a>
        </div><!-- manager-header -->

        <div class="manager-wrapper">
            <div class="manager-right">
                <div class="row row-sm">

                    @foreach($data as $d)

                    <div class="col-sm-6 col-lg-4">
                        <div class="card-contact">
                            <div class="tx-center">
                                <a href=""><img src="../images/{{ $d->image }}" class="card-img" alt=""></a>
                                <h5 class="mg-t-10 mg-b-5"><a href="single-directory.html" class="contact-name">{{ $d->company_name }}</a></h5>
                                <p>{{ $d->description }}</p>
                                <p class="contact-social">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google"></i></a>
                                </p>
                            </div><!-- tx-center -->

                            <p class="contact-item">
                                <span>Phone:</span>
                                <span>{{ $d->contact_number }}</span>
                            </p><!-- contact-item -->
                            <p class="contact-item">
                                <span>Email:</span>
                                <a href="">{{ $d->email }}</a>
                            </p><!-- contact-item -->
                            <p class="contact-item">
                                <span>URL:</span>
                                <a href="">{{ $d->website }}</a>
                            </p><!-- contact-item -->
                        </div><!-- card -->
                    </div><!-- col -->

                    @endforeach

                </div><!-- row -->
{{--
                <a href="" class="btn btn-light btn-block mg-t-20">Load more contacts</a>--}}

            </div><!-- manager-right -->
            <div class="manager-left">
                <nav class="nav">
                    <a href="" class="nav-link active">
                        <span>All Listings</span>
                        <span>120</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>Services</span>
                        <span>16</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>Government Dept</span>
                        <span>68</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>Retail</span>
                        <span>38</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>Others</span>
                        <span>9</span>
                    </a>
                </nav>

                <label class="section-label-sm mg-t-25">Block</label>
                <nav class="nav">
                    <a href="" class="nav-link">
                        <span>A</span>
                        <span>120</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>B</span>
                        <span>160</span>
                    </a>
                </nav>

                <label class="section-label-sm mg-t-25">Location</label>
                <nav class="nav">
                    <a href="" class="nav-link">
                        <span>Gound Floor</span>
                        <span>10</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>1st Floor</span>
                        <span>16</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>2nd Floor</span>
                        <span>15</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>3rd Floor</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>4th Floor</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>5th Floor</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>6th Floor</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>7th Floor</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>8th Floor</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>9th Floor</span>
                        <span>4</span>
                    </a>
                </nav>

                <label class="section-label-sm mg-t-25">Industry</label>
                <nav class="nav">
                    <a href="" class="nav-link">
                        <span>Typing Center</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>IT Company</span>
                        <span>6</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>Travel</span>
                        <span>5</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>Marketing</span>
                        <span>4</span>
                    </a>
                    <a href="" class="nav-link">
                        <span>Interior</span>
                        <span>4</span>
                    </a>
                </nav>
            </div><!-- manager-left -->
        </div><!-- manager-wrapper -->

    </div><!-- container -->
</div>

<script>
    $(function() {
        'use strict';

        $('#contactNavicon').on('click', function(e) {
            e.preventDefault();

            $('.contact-left').toggleClass('d-block');
            $('.contact-right').toggleClass('d-none');
        });
    });
</script>
</body>


@include('partials.footer')