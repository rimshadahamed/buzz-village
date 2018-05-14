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
                <li class="breadcrumb-item active" aria-current="page">Conference Rooms</li>
            </ol>
            <h6 class="slim-pagetitle">Conference Rooms</h6>
        </div><!-- slim-pageheader -->


        <div class="section-wrapper mg-t-20">
            <label class="section-title">Add a conference room?</label>
            <p class="mg-b-20 mg-sm-b-40">Add a new conference here.</p>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Room No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="12A" placeholder="Enter No">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Room Size: <span class="tx-danger">*</span></label>
                            <select id="select2-a" class="form-control" data-placeholder="Choose purpose">
                                <option label="Choose size"></option>
                                <option value="5" selected>5 guests</option>
                                <option value="10">10 guests</option>
                                <option value="25">25 guests</option>
                                <option value="50">50 guests</option>
                                <option value="100">100 guests</option>
                            </select>
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-4">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Arrangements: <span class="tx-danger">*</span></label>
                            <select id="select2-a" class="form-control" data-placeholder="Arrangements">
                                <option label="Choose Arrangement"></option>
                                <option value="Tea & Coffee" selected>Tea & Coffee</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Snacks & Tea">Snacks & Tea</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Includes: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload 360 Image: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div></div><!-- custom-file -->
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload Location: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div></div><!-- custom-file -->


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