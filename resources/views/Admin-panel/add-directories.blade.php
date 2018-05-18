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
            <form class="" method="POST" enctype="multipart/form-data" action="{{url('admin-directory') }}">
                {{csrf_field()}}
            <label class="section-title">Add Directory</label>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="companyName" value="Startbucks" placeholder="">
                            @if ($errors->has('companyName'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('companyName') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-6">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Industry: <span class="tx-danger">*</span></label>
                            <select id="industry" name="industry" class="form-control" data-placeholder="Choose purpose">
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
                            <label class="form-control-label">Website: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="website" value="Any Special Requests" placeholder="">
                            @if ($errors->has('website'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Email Address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="email" value="Any Special Requests" placeholder="">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">HR Email Address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="hr_email" value="Any Special Requests" placeholder="">
                            @if ($errors->has('hr_email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('hr_email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Contact Number: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="contact_no" value="Any Special Requests" placeholder="">
                            @if ($errors->has('contact_no'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('contact_no') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Linkedin: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="linkedin" value="Any Special Requests" placeholder="">
                            @if ($errors->has('linkedin'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Office No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="office_no" value="Any Special Requests" placeholder="">
                            @if ($errors->has('office_no'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('office_no') }}</strong>
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

@include('partials.footer')