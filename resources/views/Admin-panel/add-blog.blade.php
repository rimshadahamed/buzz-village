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

        <form class="" method="POST" enctype="multipart/form-data" action="{{url('blogForm') }}">
            {{csrf_field()}}
        <div class="section-wrapper mg-t-20">
            <label class="section-title">Add New Blog</label>
            <p class="mg-b-20 mg-sm-b-40">Write a blog here.</p>
            <label class="form-control-label">Blog Title: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="title" value="12A" placeholder="">
            @if ($errors->has('title'))
                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
            @endif
            <div id="summernote">Hello, universe!</div>
        </div><!-- section-wrapper -->
        <div class="section-wrapper mg-t-20">
            <label class="section-title">Additional Details</label>


            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Meta Title: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="meta_title" value="Blog Meta Name" placeholder="">
                            @if ($errors->has('meta_title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('meta_title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Meta Description: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="description" value="Blog Meta Description" placeholder="">
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->



                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload Feature Image: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div></div><!-- custom-file -->



                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button class="btn btn-primary bd-0">Add Blog</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-group -->
            </div><!-- form-layout -->
        </div><!-- section-wrapper -->
        </form>

    </div><!-- container -->
</div>

</body>
@include('partials.footer')