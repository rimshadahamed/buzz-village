<title>Office | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')


<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
            </ol>
            <h6 class="slim-pagetitle">Calendar</h6>
        </div><!-- slim-pageheader -->

        <div class="card pd-25">
            <div id="fullCalendar"></div>
        </div><!-- card -->
        <!-- events block -->
        <div class="section-wrapper mg-t-20">
            <label class="section-title">Upcoming Events</label>
            <p class="mg-b-20 mg-sm-b-40">Next few events at Business Village.</p>

            <div class="row">
                <div class="col-md">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img21.jpg" alt="Image">
                        <div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
                            <p class="tx-white tx-medium mg-b-15">The Cat Prisoner</p>
                            <p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                            <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                        </div><!-- card-img-overlay -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-md mg-t-20 mg-md-t-0">
                    <div class="card bd-0">
                        <img class="card-img img-fluid" src="../img/img22.jpg" alt="Image">
                        <div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
                            <p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
                            <p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                            <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                        </div><!-- card-img-overlay -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-md mg-t-20 mg-md-t-0">
                    <div class="card bd-0">
                        <img class="card-img img-fluid" src="../img/img23.jpg" alt="Image">
                        <div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
                            <p class="tx-white tx-medium mg-b-15">The Green Leaves</p>
                            <p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                            <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                        </div><!-- card-img-overlay -->
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- section-wrapper -->



        <div class="section-wrapper mg-t-20">
            <form class="" method="POST" enctype="multipart/form-data" action="{{url('eventsForm') }}">
                {{csrf_field()}}
            <label class="section-title">Want to organize an event with us?</label>
            <p class="mg-b-20 mg-sm-b-40">Send us an inquiry and our team will revert back to you ASAP.</p>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                            @if ($errors->has('firstname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-8">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Contact Number: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="mobile_no" value="05X XXX XXXX" placeholder="Mobile Number">
                            @if ($errors->has('mobile_no'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-4">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Purpose: <span class="tx-danger">*</span></label>
                            <select id="purpose" name="purpose" class="form-control" data-placeholder="Choose purpose">
                                <option label="Choose block"></option>
                                <option value="Corporate" selected>Corporate</option>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                            @if ($errors->has('purpose'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('purpose') }}</strong>
                                    </span>
                            @endif
                        </div><!-- col-8 -->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Event Date: <span class="tx-danger">*</span></label>
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                <input name="date" type="text" class="form-control fc-datepicker" placeholder=" MM/DD/YYYY">
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload Event Brief: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @if ($errors->has('image'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif

                        </div>

                    </div><!-- custom-file -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Comments: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any special comments" placeholder="Enter any comments">
                            @if ($errors->has('comments'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
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
</div>
<script  type="text/javascript">

    $(document).ready(function (){
        'use strict'

        // Datepicker
        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
        });

        // Toggles
        $('.toggle').toggles({
            on: true,
            height: 26
        });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

        // Time Picker
        $('#tpBasic').timepicker();
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
            $('#tp3').timepicker('setTime', new Date());
        });
    });
</script>
</body>


@include('partials.footer')