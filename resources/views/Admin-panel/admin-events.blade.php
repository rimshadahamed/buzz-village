<title>Add-Blog | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')
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
            <form class="" method="POST" enctype="multipart/form-data" action="{{url('admin-eventsForm') }}">
                {{csrf_field()}}
            <label class="section-title">Add an event</label>
            <p class="mg-b-20 mg-sm-b-40"></p>

            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Event Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="event_name" value="John Paul" placeholder="">
                            @if ($errors->has('event_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('event_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="description" value="McDoe" placeholder=" ">
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="  ">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Website: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="website" value="johnpaul@yourdomain.com" placeholder="">
                            @if ($errors->has('website'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Social: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="social" value="johnpaul@yourdomain.com" placeholder="">
                            @if ($errors->has('social'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('social') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-8">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Contact Number: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="contact_no" value="05X XXX XXXX" placeholder="">
                            @if ($errors->has('contact_no'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('contact_no') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-4">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Purpose: <span class="tx-danger">*</span></label>
                            <select id="purpose" name="purpose" class="form-control" data-placeholder="Choose purpose">
                                <option label="Choose block"></option>
                                <option value="Retail" selected>Corporate</option>
                                <option value="Commercial">Public</option>
                                <option value="Commercial">Private</option>
                            </select>
                        </div><!-- col-8 -->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Event Date: <span class="tx-danger">*</span></label>
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                <input type="text" name="date" class="form-control fc-datepicker" placeholder=" MM/DD/YYYY">
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
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