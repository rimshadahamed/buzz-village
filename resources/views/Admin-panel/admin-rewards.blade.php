<title>Admin-rewards | Business Village - Connect</title>
@include('partials.header')

<body class="dashboard-4">

@include('partials.admin-topmenu')
<div class="slim-mainpanel">
    <div class="container pd-t-50">
        <div class="row">
            <div style="text-align:center;">
                <h4 class="mg-b-5">Download the App to Collect & Redeem</h4>
                <p><img src="../img/mobile_store.png"></p>

            </div>
        </div>
        <div class="row">

              @foreach($data as $d)

            <div class="col-lg-6">
                <div class="card card-blog">
                    <figure class="card-item-img bg-mantle">
                        <img class="img-fluid" src="../images/{{ $d->image }}" alt="Image">
                    </figure>
                    <div class="card-body">
                        <p class="blog-category">{{ $d->company_name }}</p>
                      {{--  <h5 class="blog-title"><a href="">Subway</a></h5>--}}
                        <p class="blog-text">{{ $d->description }}</p>
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

              @endforeach

        </div>
    </div>
</div>



</body>
@include('partials.footer')