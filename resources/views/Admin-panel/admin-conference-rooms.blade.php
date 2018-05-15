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
            <form class="" method="POST" enctype="multipart/form-data" action="{{url('admin-conference-rooms') }}">
                {{csrf_field()}}
            <label class="section-title">Add a conference room?</label>
            <p class="mg-b-20 mg-sm-b-40">Add a new conference here.</p>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Room No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="room_no" value="12A" placeholder="">
                            @if ($errors->has('room_no'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('room_no') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Room Size: <span class="tx-danger">*</span></label>
                            <select id="room_size" name="room_size" class="form-control" data-placeholder="Choose Room Size">
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
                            <select id="arrangement" name="arrangement" class="form-control" data-placeholder="Arrangements">
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
                            <input class="form-control" type="text" name="includes" value="Any Special Requests" placeholder="">
                            @if ($errors->has('includes'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('includes') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload 360 Image: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image360" name="image360">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @if ($errors->has('image360'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image360') }}</strong>
                                    </span>
                                @endif
                            </div></div></div><!-- custom-file -->
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload Location: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div></div></div><!-- custom-file -->


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