<title>Office | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

<div class="slim-mainpanel">


    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Building</a></li>
                <li class="breadcrumb-item active" aria-current="page">Office</li>
            </ol>
            <h6 class="slim-pagetitle">Office</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
            <label class="section-title">My Office</label>
            <p class="mg-b-20 mg-sm-b-40">View the status of your office</p>

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                    <tr>
                        <th>Office No</th>
                        <th>Block</th>
                        <th>Trade License Validity</th>
                        <th>Tenency End Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($data->isNotEmpty())
                    @foreach($data as $d)
                        @if( Auth::User()->email == $d->user)
                        <tr>
                            <th scope="row">{{ $d->office_no }}</th>
                            <td>Block</td>
                            <td>{{ $d->trade_license_validity }}</td>
                            <td>{{ $d->tenecy_end_date }}</td>
                            <td>{{ $d->status }}</td>
                            <td><a href="{{route('myoffice',$d->office_no )}}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        @endif
                    @endforeach
                    @else
                        <tr>
                            <td colspan="7" style="text-align: center;color: black">
                                No data available For this Reference.
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- section-wrapper -->


        <div class="section-wrapper mg-t-20">

            <form class="" method="POST" enctype="multipart/form-data" action="{{url('officeForm') }}">
                {{csrf_field()}}
            <label class="section-title">Looking for an office?</label>
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
                            <label class="form-control-label">Space Required: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="space_required" value="1000 sqft" placeholder="Space Required">
                            @if ($errors->has('space_required'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('space_required') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-4">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Purpose: <span class="tx-danger">*</span></label>
                            <select id="purpose" name="purpose"class="form-control" data-placeholder="Choose purpose">
                                <option label="Choose block"></option>
                                <option value="Retail" selected>Retail</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                        </div><!-- col-8 -->
                    </div>
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
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload Trade License of issue: <span class="tx-danger">*</span></label>


                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>


                        </div>
                        @if ($errors->has('image'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                        @endif
                    </div><!-- custom-file -->
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

        $('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: '#fff',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            scaleColors: ['#17A2B8', '#006491'],
            values: sample_data,
            normalizeFunction: 'polynomial'
        });

    });
</script>
</body>


@include('partials.footer')