<title>Conference | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

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
            <label class="section-title">My Conference Room Bookings</label>
            <p class="mg-b-20 mg-sm-b-40">View my bookings for my conference rooms</p>

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>Conference Date</th>
                        <th>Time Slot</th>
                        <th>Conference Size</th>
                        <th>Arrangements</th>
                        <th>Status</th>
                        <th>Booked Room</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                    <tr>
                        <th scope="row">{{ $d->req_id }}</th>
                        <td>{{ $d->date }}</td>
                        <td>{{ $d->time }}</td>
                        <td>{{ $d->conf_size }} Guests</td>
                        <td>{{ $d->arrangements }}</td>
                        <td>{{ $d->status }}</td>
                        <td>{{ $d->booked_room }}</td>
                        <td><a href="{{route('myconference',$d->req_id )}}"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- section-wrapper -->


        <div class="section-wrapper mg-t-20">
            <form class="" method="POST" enctype="multipart/form-data" action="{{url('conferenceForm') }}">
                {{csrf_field()}}
            <label class="section-title">Want to book a conference room?</label>
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
                    <div class="col-md-8">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Space Required: <span class="tx-danger">*</span></label>
                            <select id="space_required" name="space_required" class="form-control" data-placeholder="Choose purpose">
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
                            <select id="purpose" name="purpose" class="form-control" data-placeholder="Arrangements">
                                <option label="Choose Arrangement"></option>
                                <option value="Tea & Coffee" selected>Tea & Coffee</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Snacks & Tea">Snacks & Tea</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </div>
                    </div><!-- col-8 -->

                    <div class="col-md-6">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Select Date: <span class="tx-danger">*</span></label>
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                <input name="date" type="text" class="form-control fc-datepicker" placeholder=" MM/DD/YYYY">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Select Date: <span class="tx-danger">*</span></label>
                            <div class="input-group-text">
                                <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                <input id="time" name="time" type="text" class="form-control" placeholder="Set time">
                            </div>
                        </div><!-- input-group-prepend -->
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Comments: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="comments" value="Any Special Requests" placeholder="Enter Comments">
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

        <div class="section-wrapper mg-t-20">
            <label class="section-title">Conference Rooms</label>
            <p class="mg-b-20 mg-sm-b-40">View all conference Rooms in full angles.</p>
            <div class="row">

                <div class="col-lg-4">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img18.jpg" alt="Image">
                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                            <div class="img-option">
                                <a href="my-" class="img-option-link"><div><i class="icon ion-ios-eye"></i><span>360</span></div></a>
                            </div>
                        </figcaption>
                    </div>
                    <div class="card-body bd bd-t-0">
                        <p class="card-text">Conference Room - 1A.</p>
                        <p class="card-text">Included: Projector / Notepads / Water</p>
                        <button class="btn btn-indigo active btn-block mg-b-10">10 Guest</button>
                        <button class="btn btn-success active btn-block mg-b-10">View Location</button>
                    </div>
                </div><!-- card -->

                <div class="col-lg-4">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img18.jpg" alt="Image">
                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                            <div class="img-option">
                                <a href="#" class="img-option-link"><div><i class="icon ion-ios-eye"></i><span>360</span></div></a>
                            </div>
                        </figcaption>
                    </div>
                    <div class="card-body bd bd-t-0">
                        <p class="card-text">Conference Room - 1A</p>
                        <p class="card-text">Included: Projector / Notepads / Water</p>
                        <button class="btn btn-indigo active btn-block mg-b-10">25 Guest</button>
                        <button class="btn btn-success active btn-block mg-b-10">View Location</button>
                    </div>
                </div><!-- card -->
                <div class="col-lg-4">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img18.jpg" alt="Image">
                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                            <div class="img-option">
                                <a href="#" class="img-option-link"><div><i class="icon ion-ios-eye"></i><span>360</span></div></a>
                            </div>
                        </figcaption>
                    </div>
                    <div class="card-body bd bd-t-0">
                        <p class="card-text">Conference Room - 2A</p>
                        <p class="card-text">Included: Projector / Notepads / Water</p>
                        <button class="btn btn-indigo active btn-block mg-b-10">50 Guest</button>
                        <button class="btn btn-success active btn-block mg-b-10">View Location</button>
                    </div>
                </div><!-- card -->
                <div class="col-lg-4 pd-t-30">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img18.jpg" alt="Image">
                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                            <div class="img-option">
                                <a href="#" class="img-option-link"><div><i class="icon ion-ios-eye"></i><span>360</span></div></a>
                            </div>
                        </figcaption>
                    </div>
                    <div class="card-body bd bd-t-0">
                        <p class="card-text">Conference Room - 4C</p>
                        <p class="card-text">Included: Projector / Notepads / Water</p>
                        <button class="btn btn-indigo active btn-block mg-b-10">100 Guest</button>
                        <button class="btn btn-success active btn-block mg-b-10">View Location</button>
                    </div>
                </div><!-- card -->
                <div class="col-lg-4 pd-t-30">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img18.jpg" alt="Image">
                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                            <div class="img-option">
                                <a href="#" class="img-option-link"><div><i class="icon ion-ios-eye"></i><span>360</span></div></a>
                            </div>
                        </figcaption>
                    </div>
                    <div class="card-body bd bd-t-0">
                        <p class="card-text">Conference Room - 10B</p>
                        <p class="card-text">Included: Projector / Notepads / Water</p>
                        <button class="btn btn-indigo active btn-block mg-b-10">5 Guest</button>
                        <button class="btn btn-success active btn-block mg-b-10">View Location</button>
                    </div>
                </div><!-- card -->
                <div class="col-lg-4 pd-t-30">
                    <div class="card bd-0">
                        <img class="img-fluid" src="../img/img18.jpg" alt="Image">
                        <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                            <div class="img-option">
                                <a href="#" class="img-option-link"><div><i class="icon ion-ios-eye"></i><span>360</span></div></a>
                            </div>
                        </figcaption>
                    </div>
                    <div class="card-body bd bd-t-0">
                        <p class="card-text">Conference Room - 3C</p>
                        <p class="card-text">Included: Projector / Notepads / Water</p>
                        <button class="btn btn-indigo active btn-block mg-b-10">25 Guest</button>
                        <button class="btn btn-success active btn-block mg-b-10">View Location</button>
                    </div><!-- card -->
                </div><!-- row -->
            </div><!-- section-wrapper -->


        </div>
    </div>
</div>



</body>
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

@include('partials.footer')