<title>Admin-rewards | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Building</a></li>
                <li class="breadcrumb-item active" aria-current="page">Parking</li>
            </ol>
            <h6 class="slim-pagetitle">Parking</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
            <label class="section-title">My Parking</label>
            <p class="mg-b-20 mg-sm-b-40">View the status of the your parking bay</p>

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                    <tr>
                        <th>Bay No</th>
                        <th>Block</th>
                        <th>Floor</th>
                        <th>Parking Valid Till</th>
                        <th>Status</th>
                        <th>Car Wash</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">81</th>
                        <td>B</td>
                        <td>P1</td>
                        <td>29.01.19</td>
                        <td>Renewed</td>
                        <td>12 wash p.m</td>
                        <td><a href="parking-space.html"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">82</th>
                        <td>B</td>
                        <td>P1</td>
                        <td>29.01.19</td>
                        <td>Due for Renewal</td>
                        <td>None</td>
                        <td><a href="parking-space.html"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- section-wrapper -->


        <div class="section-wrapper mg-t-20">
            <label class="section-title">Need parking Space?</label>
            <p class="mg-b-20 mg-sm-b-40">Send us an inquiry and our team will revert back to you ASAP.</p>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Plan: <span class="tx-danger">*</span></label>
                            <select id="select2-a" class="form-control" data-placeholder="Choose purpose">
                                <option label="Choose block"></option>
                                <option value="Retail" selected>Annual</option>
                                <option value="Commercial">Monthly</option>
                            </select>
                        </div><!-- col-8 -->
                    </div>
                    <div class="col-md-8">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Comments: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="description" value="Any special comments" placeholder="Enter any comments">
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button class="btn btn-primary bd-0">Submit Form</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-group -->
            </div><!-- form-layout -->
        </div><!-- section-wrapper -->




    </div>
</div>




</body>
@include('partials.footer')