<title>Facilities-ticket | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')

<div class="slim-mainpanel">
<div class="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
        <h6 class="slim-pagetitle">Office {{ $facility->office_no }} Block {{ $facility->block }}</h6>
    </div><!-- slim-pageheader -->

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card card-dash-one mg-t-20">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <i class="icon ion-ios-analytics-outline"></i>
                        <div class="dash-content">
                            <label class="tx-primary">Ticket Date</label>
                            <h2>29.03.18</h2>
                        </div><!-- dash-content -->
                    </div><!-- col-3 -->
                    <div class="col-lg-4">
                        <i class="icon ion-ios-pie-outline"></i>
                        <div class="dash-content">
                            <label class="tx-success">Office No</label>
                            <h2>{{ $facility->office_no }}</h2>
                        </div><!-- dash-content -->
                    </div><!-- col-3 -->
                    <div class="col-lg-4">
                        <i class="icon ion-ios-stopwatch-outline"></i>
                        <div class="dash-content">
                            <label class="tx-purple">Status</label>
                            <h2>{{ $facility->status }}</h2>
                        </div><!-- dash-content -->
                    </div><!-- col-3 -->
                </div><!-- row -->
            </div><!-- card -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card-deck card-deck-sm mg-t-20 mg-x-0"></div>
                    <div class="card tx-center">
                        <div class="card-body pd-40">
                            <div class="row justify-content-center">
                                <div class="wd-sm-300">
                                    <figure class="overlay">
                                        <img src="../images/{{ $facility->image }}" class="img-fluid" alt="">
                                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                                        </figcaption>
                                    </figure>
                                </div><!-- wd-300 -->
                                <div class="wd-sm-300">
                                    <figure class="overlay">
                                        <img src="../images/{{ $facility->image }}" class="img-fluid" alt="">
                                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                                        </figcaption>
                                    </figure>
                                </div><!-- wd-300 -->
                                <div class="wd-sm-300">
                                    <figure class="overlay">
                                        <img src="../images/{{ $facility->image }}" class="img-fluid" alt="">
                                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                                        </figcaption>
                                    </figure>
                                </div><!-- wd-300 -->
                            </div>

                            <p>Issue Type: {{ $facility->issue_type }}</p>
                            <p>Issue Description: {{ $facility->issue_description }}</p>
                            <form class="" method="POST" enctype="multipart/form-data" action="{{url('conferenceForm') }}">
                                {{csrf_field()}}
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Update Status
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Open</a>
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">Resolved</a>
                                </div><!-- dropdown-menu -->
                            </div><!-- dropdown -->
                            </form>
                        </div><!-- card -->
                    </div>
                </div>
                <!-- card -->

            </div>





        </div><!-- col-8 -->




    </div><!-- col-4 -->
</div><!-- row -->

</div><!-- slim-mainpanel -->

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
</body>


@include('partials.footer')