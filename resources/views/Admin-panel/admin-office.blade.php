<title>Facilities | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Building</a></li>
                <li class="breadcrumb-item active" aria-current="page">Office Management</li>
            </ol>
            <h6 class="slim-pagetitle">Office Management</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper mg-t-20">
            <label class="section-title">Tickets Status of Reported Issues</label>
            <p class="mg-b-20 mg-sm-b-40">View the status of the reported issues</p>

            <div class="table-responsive">
                <table class="table table-hover mg-b-0">
                    <thead>
                    <tr>
                        <th>Office No</th>
                        <th>Company Name</th>
                        <th>Office Size</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">901</th>
                        <td>Ontime</td>
                        <td>1021</td>
                        <td>Renewed</td>
                        <td><a href="my-office.html"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">901</th>
                        <td>Ontime</td>
                        <td>1021</td>
                        <td>Renewed</td>
                        <td><a href="my-office.html"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">901</th>
                        <td>Ontime</td>
                        <td>1021</td>
                        <td>Renewed</td>
                        <td><a href="my-office.html"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
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