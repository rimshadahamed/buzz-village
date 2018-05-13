<title>Rewards | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.topmenu')

<div class="slim-mainpanel">
    <div class="container pd-t-50">
        <div class="row">
            <div style="text-align:center;">
                <h4 class="mg-b-5">Download the App to Collect & Redeem</h4>
                <p><img src="../img/mobile_store.png"></p>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-blog">
                    <figure class="card-item-img bg-mantle">
                        <img class="img-fluid" src="../img/img24.jpg" alt="Image">
                    </figure>
                    <div class="card-body">
                        <p class="blog-category">Restuarant</p>
                        <h5 class="blog-title"><a href="">Subway</a></h5>
                        <p class="blog-text">Enjoy a meal with subway! eat a sandwich 5 times and the 6th time is on us! .</p>
                        <p class="blog-links">
                        <div class="btn-wrapper">
                            <a href="" class="btn btn-primary"><i class="fa fa-phone mg-r-5"></i>Call</a>
                            <a href="" class="btn btn-primary mg-l-1"><i class="fa fa-envelope mg-r-5"></i>Email</a>
                            <a href="" class="btn btn-success mg-l-auto"><i class="fa fa-star"></i>Collect 5</a>
                        </div><!-- btn-wrapper -->
                        </p>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
            <div class="col-lg-6">
                <div class="card card-blog">
                    <figure class="card-item-img bg-mantle">
                        <img class="img-fluid" src="../img/img24.jpg" alt="Image">
                    </figure>
                    <div class="card-body">
                        <p class="blog-category">Restuarant</p>
                        <h5 class="blog-title"><a href="">Starbucks</a></h5>
                        <p class="blog-text">Enjoy a coffee with starbucks! buy a coffee 5 times and the 6th time is on us! </p>
                        <p class="blog-links">
                        <div class="btn-wrapper">
                            <a href="" class="btn btn-primary"><i class="fa fa-phone mg-r-5"></i>Call</a>
                            <a href="" class="btn btn-primary mg-l-1"><i class="fa fa-envelope mg-r-5"></i>Email</a>
                            <a href="" class="btn btn-success mg-l-auto"><i class="fa fa-star"></i>Collect 6</a>
                        </div><!-- btn-wrapper -->
                        </p>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>


            <div class="col-lg-6 pd-t-20">
                <div class="card card-blog">
                    <figure class="card-item-img bg-mantle">
                        <img class="img-fluid" src="../img/img24.jpg" alt="Image">
                    </figure>
                    <div class="card-body">
                        <p class="blog-category">Restuarant</p>
                        <h5 class="blog-title"><a href="">Cha Cha Chai</a></h5>
                        <p class="blog-text">Enjoy from any of our combos! buy 5 combos and the 6th one is on us.</p>
                        <p class="blog-links">
                        <div class="btn-wrapper">
                            <a href="" class="btn btn-primary"><i class="fa fa-phone mg-r-5"></i>Call</a>
                            <a href="" class="btn btn-primary mg-l-1"><i class="fa fa-envelope mg-r-5"></i>Email</a>
                            <a href="" class="btn btn-success mg-l-auto"><i class="fa fa-star"></i>Collect 5</a>
                        </div><!-- btn-wrapper -->
                        </p>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
            <div class="col-lg-6 pd-t-20">
                <div class="card card-blog">
                    <figure class="card-item-img bg-mantle">
                        <img class="img-fluid" src="../img/img24.jpg" alt="Image">
                    </figure>
                    <div class="card-body">
                        <p class="blog-category">Restuarant</p>
                        <h5 class="blog-title"><a href="">Freejna</a></h5>
                        <p class="blog-text">Enjoy from any of our combos! buy 5 combos and the 6th one is on us.</p>
                        <p class="blog-links">
                        <div class="btn-wrapper">
                            <a href="" class="btn btn-primary"><i class="fa fa-phone mg-r-5"></i>Call</a>
                            <a href="" class="btn btn-primary mg-l-1"><i class="fa fa-envelope mg-r-5"></i>Email</a>
                            <a href="" class="btn btn-success mg-l-auto"><i class="fa fa-star"></i>Collect 5</a>
                        </div><!-- btn-wrapper -->
                        </p>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>

        </div>
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