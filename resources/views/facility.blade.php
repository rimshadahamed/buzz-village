<title>Facilities | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Building</a></li>
                <li class="breadcrumb-item active" aria-current="page">Facility Management</li>
            </ol>
            <h6 class="slim-pagetitle">Facility Management</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
            <label class="section-title">Tickets Status of Reported Issues</label>
            <p class="mg-b-20 mg-sm-b-40">View the status of the reported issues</p>

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                    <tr>
                        <th>Case No</th>
                        <th>Issue Type</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                    <tr>
                        <th scope="row">{{ $d->case_ID }}</th>
                        <td>{{ $d->issue_type }}</td>
                        <td>{{ $d->issue_description }}</td>
                        <td>{{ $d->status }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif

            <form class="" method="POST" enctype="multipart/form-data" action="{{url('facilityForm') }}">
                {{csrf_field()}}
            <label class="section-title">Have an issue to report?</label>
            <p class="mg-b-20 mg-sm-b-40">Send us a ticket and our team will revert back to you with a fix.</p>

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
                            <label class="form-control-label">Office No: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="office_no" value="509" placeholder="Enter address">
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-md-4">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Block: <span class="tx-danger">*</span></label>
                            <select id="block" name="block" class="form-control" data-placeholder="Choose block">
                                <option label="Choose block"></option>
                                <option value="A" selected>A</option>
                                <option value="B">B</option>
                            </select>
                        </div><!-- col-8 -->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Issue Type: <span class="tx-danger">*</span></label>
                            <select id="issue_type" name="issue_type" class="form-control" data-placeholder="Choose issue">
                                <option label="Choose issue"></option>
                                <option value="AC not working" selected>AC not working</option>
                                <option value="Leaking ceiling">Leaking ceiling</option>
                                <option value="Common Area">Common Area Issue</option>
                                <option value="Others">Others</option>
                            </select>
                        </div><!-- col-8 -->
                    </div>
                    <div class="col-md-8">
                        <div class="form-group bd-t-0-force">
                            <label class="form-control-label">Describe Issue: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="description" value="What is the issue?" placeholder="Enter Issue Description">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-12">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Upload Images of issue: <span class="tx-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- row -->
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