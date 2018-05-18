<title>Add-Rewards | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Building</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Rewards</li>
            </ol>
            <h6 class="slim-pagetitle">Add Rewards</h6>
        </div><!-- slim-pageheader -->


        <div class="section-wrapper mg-t-20">
            <form class="" method="POST" enctype="multipart/form-data" action="{{url('admin-rewards') }}">
                {{csrf_field()}}
            <label class="section-title">Add Rewards</label>
            <p class="mg-b-20 mg-sm-b-40">Add a new rewards campaign.</p>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="company_name" value="Startbucks" placeholder="">
                            @if ($errors->has('company_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-6">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Collection Count: <span class="tx-danger">*</span></label>
                            <select id="collection_count" name="collection_count" class="form-control" data-placeholder="Choose purpose">
                                <option label="Choose size"></option>
                                <option value="5" selected>4</option>
                                <option value="10">5</option>
                                <option value="25">6</option>
                                <option value="50">7</option>
                                <option value="100">8</option>
                            </select>
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="description" value="Any Special Requests" placeholder="">
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Feature Image: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="feature_image" name="feature_image">
                                @if ($errors->has('feature_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feature_image') }}</strong>
                                    </span>
                                @endif
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div></div><!-- custom-file -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Terms & Conditions: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="terms_conditions" value="Any Special Requests" placeholder="">
                            @if ($errors->has('terms_conditions'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('terms_conditions') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->



                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button class="btn btn-primary bd-0">Submit Form</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-group -->
            </div><!-- form-layout -->
            </form>
        </div><!-- section-wrapper -->




    </div>
</div>



</body>
@include('partials.footer')