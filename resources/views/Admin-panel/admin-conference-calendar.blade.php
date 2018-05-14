<title>Admin-conference-calendar | Business Village - Connect</title>
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

    </div><!-- container -->
</div>



</body>
@include('partials.footer')