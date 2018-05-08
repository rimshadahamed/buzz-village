<title>my-conference-booking | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Conference Booking</li>
            </ol>
            <h6 class="slim-pagetitle">Request No: {{ $conf->req_id }}</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card card-dash-one mg-t-20">
                    <div class="row no-gutters">
                        <div class="col-lg-3">
                            <i class="icon ion-ios-analytics-outline"></i>
                            <div class="dash-content">
                                <label class="tx-primary">Booking Date</label>
                                <h2>{{ $conf->date }}</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                            <i class="icon ion-ios-pie-outline"></i>
                            <div class="dash-content">
                                <label class="tx-success">Time Slot</label>
                                <h2>{{ $conf->time }}</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                            <i class="icon ion-ios-stopwatch-outline"></i>
                            <div class="dash-content">
                                <label class="tx-purple">No of Guests</label>
                                <h2>{{ $conf->conf_size }} Guests</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                            <i class="icon ion-ios-stopwatch-outline"></i>
                            <div class="dash-content">
                                <label class="tx-purple">Status</label>
                                <h2>{{ $conf->status }}</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                    </div><!-- row -->
                </div><!-- card -->

                <div class="section-wrapper mg-t-20">
                    <label class="section-title">Booked Room</label>
                    <p class="mg-b-20 mg-sm-b-40">View all conference Rooms in full angles.</p>
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="card bd-0">
                                <img class="img-fluid" src="../img/img18.jpg" alt="Image">
                                <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                                    <div class="img-option">
                                        <a href="#" class="img-option-link"><div><i class="icon ion-ios-eye"></i><span>360</span></div></a>
                                    </div>
                                </figcaption>
                            </div>
                            <div class="card-body bd bd-t-0">
                                <p class="card-text">Conference Room - {{ $conf->booked_room }}.</p>
                                <p class="card-text">Included: Projector / Notepads / Water</p>
                                <button class="btn btn-indigo active btn-block mg-b-10">{{ $conf->conf_size }} Guests</button>
                                <button class="btn btn-success active btn-block mg-b-10">View Location</button>
                            </div>
                        </div><!-- card -->

                        <div class="col-lg-4">
                            <div class="card bd-0">
                                <p>Project included</p>
                                <p>{{ $conf->arrangements }}</p>
                            </div></div>

                    </div></div>

                <div class="section-wrapper mg-t-20">
                    <label class="section-title">Rental Payments</label>
                    <p class="mg-b-20 mg-sm-b-40">View all the payments made till date</p>

                    <div class="table-responsive">
                        <table class="table table-hover mg-b-0">
                            <thead>
                            <tr>
                                <th>Receipt No#</th>
                                <th>Cheque No</th>
                                <th>Bank</th>
                                <th>Payment Date</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">9011223311</th>
                                <td>1231</td>
                                <td>Noor Bank</td>
                                <td>29.01.19</td>
                                <td>AED 12560</td>
                            </tr>
                            <tr>
                                <th scope="row">9011223311</th>
                                <td>1231</td>
                                <td>Noor Bank</td>
                                <td>29.01.19</td>
                                <td>AED 12560</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div><!-- section-wrapper -->





            </div><!-- col-8 -->




        </div><!-- col-4 -->
    </div><!-- row -->

</div><!-- container -->
</div><!-- slim-mainpanel -->



</body>


@include('partials.footer')

