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
            <li class="breadcrumb-item active" aria-current="page">Parking</li>
        </ol>
        <h6 class="slim-pagetitle">Parking</h6>
    </div><!-- slim-pageheader -->

    <div class="section-wrapper mg-t-20">
        <label class="section-title">My Parking</label>
        <p class="mg-b-20 mg-sm-b-40">View the status of the your parking bay</p>

        <div class="table-responsive">
            <table class="table table-hover mg-b-0">
                <thead>
                <tr>
                    <th>Bay No</th>
                    <th>Block</th>
                    <th>Floor</th>
                    <th>Parking Valid Till</th>
                    <th>Status</th>
                    <th>Car Wash</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    @if( Auth::User()->email == $d->user)
                <tr>
                    <th scope="row">{{ $d->parking_id}}</th>
                    <td>{{ $d->block}}</td>
                    <td>{{ $d->floor}}</td>
                    <td>{{ $d->parking_valid_till}}</td>
                    <td>{{ $d->status}}</td>
                    <td>{{ $d->car_wash}}</td>
                    <td><a href="my-parking.html"><i class="fa fa-eye"></i></a></td>
                </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div><!-- section-wrapper -->


    <div class="section-wrapper mg-t-20">
        <form class="" method="POST" enctype="multipart/form-data" action="{{url('parkingForm') }}">
            {{csrf_field()}}
        <label class="section-title">Need parking Space?</label>
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
                <div class="col-md-4">
                    <div class="form-group mg-md-l--1 bd-t-0-force">
                        <label class="form-control-label mg-b-0-force">Plan: <span class="tx-danger">*</span></label>
                        <select id="plan" name="plan" class="form-control" data-placeholder="Choose purpose">
                            <option label="Choose block"></option>
                            <option value="Annual" selected>Annual</option>
                            <option value="Monthly">Monthly</option>
                        </select>
                        @if ($errors->has('plan'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('plan') }}</strong>
                                    </span>
                        @endif
                    </div><!-- col-8 -->
                </div>
                <div class="col-md-8">
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

<script>
    $(function(){
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