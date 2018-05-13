<title>Blogs | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')

<div class="slim-mainpanel">        <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Community</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
            </ol>
            <h6 class="slim-pagetitle">From the Blog</h6>
        </div><!-- slim-pageheader -->

        <!-- blog block -->
        <div class="slim-mainpanel">
            <div class="container pd-t-50">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0"></div>
                        <div class="card card-blog-split">
                            <div class="row no-gutters">
                                <div class="col-md-5 col-lg-6 col-xl-5" style="height: 50%">
                                    <figure>
                                        <img src="../img/img19.jpg" class="img-fit-cover" alt="">
                                    </figure>
                                </div><!-- col-4 -->
                                <div class="col-md-7 col-lg-6 col-xl-7">
                                    <p class="blog-category tx-danger">History</p>
                                    <h5 class="blog-title"><a href="">17 Brilliant Short Novels You Can Read in a Sitting</a></h5>
                                    <p class="blog-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Nascetur ridiculus mus. Donec quam felis, ultricies nec...</p>
                                    <span class="blog-date">Mar 11, 2017, 11:30am</span>
                                </div><!-- col-8 -->
                            </div><!-- row -->
                        </div><!-- card -->
                    </div>
                </div>
            </div>
        </div>

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