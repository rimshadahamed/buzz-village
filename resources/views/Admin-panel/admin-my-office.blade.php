<title>Facilities | Business Village - Connect</title>
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
                                <h2>29.12.18</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-4">
                            <i class="icon ion-ios-pie-outline"></i>
                            <div class="dash-content">
                                <label class="tx-success">Trade License</label>
                                <h2>Valid</h2>
                            </div><!-- dash-content -->
                        </div><!-- col-3 -->
                        <div class="col-lg-4">
                            <i class="icon ion-ios-stopwatch-outline"></i>
                            <div class="dash-content">
                                <label class="tx-purple">Office Size</label>
                                <h2>781 sqft</h2>
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
                                <h6 class="tx-md-20 tx-inverse mg-b-20">Floor Plan</h6>
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


                <div class="section-wrapper mg-t-20">
                    <label class="section-title">Update office Information</label>


                    <div class="form-layout form-layout-2">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Office No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="firstname" value="901" placeholder="office No">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Office Size: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="lastname" value="729sqft" placeholder="sqft">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Space Required: <span class="tx-danger">*</span></label>
                                    <select id="select2-a" class="form-control" data-placeholder="Choose purpose">
                                        <option label="Choose size"></option>
                                        <option value="5" selected>Available</option>
                                        <option value="5" selected>Assigned</option>
                                    </select>
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-md-6 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Assign to Email address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Upload Trade Tenency Contract: <span class="tx-danger">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div></div></div><!-- custom-file -->
                            <div class="col-md-12">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Upload Floorplan: <span class="tx-danger">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div></div></div><!-- custom-file -->

                            <div class="col-md-6">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Tenancy End Date: <span class="tx-danger">*</span></label>
                                    <div class="input-group-text">
                                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                        <input type="text" class="form-control fc-datepicker" placeholder=" MM/DD/YYYY">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">License End Date: <span class="tx-danger">*</span></label>
                                    <div class="input-group-text">
                                        <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                        <input type="text" class="form-control fc-datepicker" placeholder=" MM/DD/YYYY">
                                    </div>
                                </div><!-- input-group-prepend -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Comments: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                                </div>
                            </div><!-- col-4 -->

                        </div><!-- row -->
                        <div class="form-layout-footer bd pd-20 bd-t-0">
                            <button class="btn btn-primary bd-0">Update</button>
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
                            <div class="col-md-6">
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



            </div><!-- col-8 -->




        </div><!-- col-4 -->
    </div><!-- row -->

</div>@include('partials.footer')