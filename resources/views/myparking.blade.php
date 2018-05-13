<title>My-office | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">my parking</li>
            </ol>
            <h6 class="slim-pagetitle">Parking Bay: B1-89</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card card-dash-one mg-t-20">
                    <div class="row no-gutters">
                        <div class="col-lg-3">
                            <i class="icon ion-ios-analytics-outline"></i>
                            <div class="dash-content">
                                <label class="tx-primary">Valid Till</label>
                                <h2>29.12.18</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                            <i class="icon ion-ios-pie-outline"></i>
                            <div class="dash-content">
                                <label class="tx-success">Plan</label>
                                <h2>Monthly</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                            <i class="icon ion-ios-stopwatch-outline"></i>
                            <div class="dash-content">
                                <label class="tx-purple">Car Wash</label>
                                <h2>On</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                            <i class="icon ion-ios-stopwatch-outline"></i>
                            <div class="dash-content">
                                <label class="tx-purple">Status</label>
                                <h2>Due for Renewal</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                    </div><!-- row -->
                </div><!-- card -->
            </div></div>

        <div class="row row-sm">
            <div class="col-lg-6">
                <div class="section-wrapper mg-t-20">

                    <label class="section-title">Car Wash Service</label><div class="toggle-wrapper">
                        <div class="toggle toggle-light indigo"></div>
                    </div>
                    <p class="mg-b-20 mg-sm-b-40">Manage your car wash service here.</p>

                    <div class="row">

                        <div class="col-lg-8">
                            <p class="mg-b-20 mg-sm-b-40">Select the days of the week for wash.</p>
                            <div class="col-lg-4">

                                <label class="ckbox">
                                    <input type="checkbox"><span>Sunday</span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-8">
                                <label class="ckbox">
                                    <input type="checkbox"><span>Monday</span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-8">
                                <label class="ckbox">
                                    <input type="checkbox"><span>Tuesday</span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-8">
                                <label class="ckbox">
                                    <input type="checkbox"><span>Wednesday</span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-8">
                                <label class="ckbox">
                                    <input type="checkbox"><span>Thursday</span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="col-lg-8">
                                <label class="ckbox">
                                    <input type="checkbox"><span>Saturday</span>
                                </label>
                            </div><!-- col-3 -->
                            <div class="mg-b-20 mg-sm-t-40">
                                <button class="btn btn-primary bd-0">Submit Form</button></div>



                        </div></div>
                </div></div>
            <div class="col-lg-6">
                <div class="section-wrapper mg-t-20">
                    <img class="img-fluid" src="../img/img18.jpg" alt="Image">

                </div></div></div>

        <div class="section-wrapper mg-t-20">
            <label class="section-title">Rental Payments</label>
            <p class="mg-b-20 mg-sm-b-40">View all the payments made till date</p>

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                    <tr>
                        <th>Receipt No#</th>
                        <th>Payment Method</th>
                        <th>Payment Date</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">9011223311</th>
                        <td>Cash</td>
                        <td>29.01.19</td>
                        <td>AED 12560</td>
                    </tr>
                    <tr>
                        <th scope="row">9011223311</th>
                        <td>Cash</td>
                        <td>29.01.19</td>
                        <td>AED 12560</td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- section-wrapper -->





    </div><!-- col-8 -->




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
</body>


@include('partials.footer')