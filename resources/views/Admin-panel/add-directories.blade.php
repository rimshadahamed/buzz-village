<title>Add-Directories | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Building</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Directory</li>
            </ol>
            <h6 class="slim-pagetitle">Add Directory</h6>
        </div><!-- slim-pageheader -->


        <div class="section-wrapper mg-t-20">
            <label class="section-title">Add Directory</label>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="Startbucks" placeholder="Enter No">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-6">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Industry: <span class="tx-danger">*</span></label>
                            <select id="select2-a" class="form-control" data-placeholder="Choose purpose">
                                <option label="Choose size"></option>
                                <option value="5" selected>IT</option>
                                <option value="10">Retail</option>
                                <option value="25">Government</option>
                                <option value="50">Marketing</option>
                                <option value="100">Interiors</option>
                            </select>
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Feature Image: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div></div><!-- custom-file -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Website: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Email Address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">HR Email Address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Contact Number: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Linkedin: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Office No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
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

@include('partials.footer')