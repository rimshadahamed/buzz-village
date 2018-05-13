<title>Add New Parking | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Conference Booking</li>
            </ol>
            <h6 class="slim-pagetitle">Parking Bay: B1-89</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
            <label class="section-title">Update Parking information</label>


            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Assign to Email address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-6">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Parking Valid Till: <span class="tx-danger">*</span></label>
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                <input type="text" class="form-control fc-datepicker" placeholder=" MM/DD/YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Parking Bay No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="B1-90" placeholder="Enter Value">
                        </div>
                    </div><!-- col-4 -->

                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button class="btn btn-primary bd-0">Add Parking</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-group -->
            </div><!-- form-layout -->
        </div><!-- section-wrapper -->


        <div class="section-wrapper mg-t-20">
            <label class="section-title">Update Payment information</label>


            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Receipt No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="9011223311" placeholder="receipt No">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-6 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Cheque No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="lastname" value="1231" placeholder="cheque No">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-6 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Bank Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="lastname" value="Noor Bank" placeholder="bank name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-6 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Assign to Email address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Payment Date: <span class="tx-danger">*</span></label>
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                <input type="text" class="form-control fc-datepicker" placeholder=" MM/DD/YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Amount: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="AED 12400" placeholder="Enter Value">
                        </div>
                    </div><!-- col-4 -->

                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button class="btn btn-primary bd-0">Add Payment</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-group -->
            </div><!-- form-layout -->
        </div><!-- section-wrapper -->

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
    </div><!-- col-4 -->
</div>

</body>
@include('partials.footer')