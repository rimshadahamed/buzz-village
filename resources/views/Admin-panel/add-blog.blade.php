<title>Add-Blog | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')


<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Community</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
            <h6 class="slim-pagetitle">Add Blog</h6>
        </div><!-- slim-pageheader -->


        <div class="section-wrapper mg-t-20">
            <label class="section-title">Add New Blog</label>
            <p class="mg-b-20 mg-sm-b-40">Write a blog here.</p>
            <label class="form-control-label">Blog Title: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="firstname" value="12A" placeholder="Enter No">
            <div id="summernote">Hello, universe!</div>
        </div><!-- section-wrapper -->
        <div class="section-wrapper mg-t-20">
            <label class="section-title">Additional Details</label>


            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Meta Title: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="Blog Meta Name" placeholder="Enter No">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Meta Description: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="Blog Meta Description" placeholder="Enter No">
                        </div>
                    </div><!-- col-4 -->



                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload Feature Image: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div></div><!-- custom-file -->



                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button class="btn btn-primary bd-0">Add Blog</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-group -->
            </div><!-- form-layout -->
        </div><!-- section-wrapper -->

    </div><!-- container -->
</div>

</body>
@include('partials.footer')