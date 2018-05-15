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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                       @if ($data->isNotEmpty())
                    @foreach($data as $d)
                    <tr>
                        <th scope="row">{{ $d->case_ID }}</th>
                        <td>{{ $d->issue_type }}</td>
                        <td>{{ $d->issue_description }}</td>
                        <td>{{ $d->status }}</td>
                        <td><a href="facility-ticket.html"><i class="fa fa-eye"></i></a></td>
                    </tr>
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