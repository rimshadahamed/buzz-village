<title>my-office | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
            <h6 class="slim-pagetitle">Office 901 Block B</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card card-dash-one mg-t-20">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <i class="icon ion-ios-analytics-outline"></i>
                            <div class="dash-content">
                                <label class="tx-primary">Tenency Validity</label>
                                <h2>{{ $data->tenecy_end_date }}</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-4">
                            <i class="icon ion-ios-pie-outline"></i>
                            <div class="dash-content">
                                <label class="tx-success">Trade License</label>
                                <h2>{{ $data->trade_license_validity }}</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-4">
                            <i class="icon ion-ios-stopwatch-outline"></i>
                            <div class="dash-content">
                                <label class="tx-purple">Office Size</label>
                                <h2>{{ $data->space_required }}</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                    </div><!-- row -->
                </div><!-- card -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-deck card-deck-sm mg-t-20 mg-x-0"></div>
                        <div class="card tx-center">
                            <div class="card-body pd-40">
                                <div class="d-flex justify-content-center mg-b-30">
                                    <img src="../img/icon1.svg" class="wd-100" alt="">
                                </div>
                                <h6 class="tx-md-20 tx-inverse mg-b-20">Tenecy Contact</h6>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
                                <a href="" class="btn btn-primary btn-block">Download Contract Copy</a>
                            </div><!-- card -->
                        </div>
                    </div>
                    <!-- card -->
                    <div class="col-lg-6">
                        <div class="card-deck card-deck-sm mg-t-20 mg-x-0"></div>
                        <div class="card tx-center">
                            <div class="card-body pd-40">
                                <div class="d-flex justify-content-center mg-b-30">
                                    <img src="../img/icon2.svg" class="wd-100" alt="">
                                </div>
                                <h6 class="tx-md-20 tx-inverse mg-b-20">Time Management</h6>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
                                <a href="" class="btn btn-primary btn-block">Download Floorplan</a>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- card -->
                </div>
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