
<div class="bg-light pt-5 pb-6">
    <div class="container trending-products">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Latest Ads</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link"
                            href="all-ads" role="tab">All Ads</a>
                    </li>
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="row">
            <div class="col-xl-5col d-none d-xl-block">
                <div class="banner">
                    <a href="#">
                        <img src="/assets/images/demos/demo-4/banners/banner-4.jpg" alt="banner">
                    </a>
                </div><!-- End .banner -->
            </div><!-- End .col-xl-5col -->

            <div class="col-xl-4-5col">
                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel"
                        aria-labelledby="trending-top-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                            data-toggle="owl"
                            data-owl-options='{
                                        "nav": true,
                                        "dots": false,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":2
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            }
                                        }
                                    }'>



@foreach ($ads as $ads)
<div class="product product-2">
    <figure class="product-media">
        {{-- <span class="product-label label-circle label-new" style="width:70px">{{ $ads->condition }}</span> --}}
        <a href="{{ url('view/' . $ads->id) }}">
            <img src="{{ $ads->image1 }}"
                alt="Product image" class="product-image">
        </a>



        {{-- <div class="product-action">

            <a href="{{ url('view/' . $ads->id) }}" class="btn-product btn-quickview"
                title="Quick view"><span>quick view</span></a>
        </div><!-- End .product-action --> --}}
    </figure><!-- End .product-media -->

    <div class="product-body">
        <div class="product-cat">
            <a href="#">{{ $ads->category }}</a>
        </div><!-- End .product-cat -->
        <h3 class="product-title"><a href="{{ url('view/' . $ads->id) }}">{{ $ads->brand }} {{ $ads->model }}</a></h3><!-- End .product-title -->
        <div class="product-price">
            Rs.{{ $ads->price }}.00
        </div><!-- End .product-price -->
        <div class="ratings-container">

            <span class="ratings-text"> {{ $ads->location }} </span>
        </div><!-- End .rating-container -->


    </div><!-- End .product-body -->
</div><!-- End .product -->

@endforeach



                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->


                </div><!-- End .tab-content -->
            </div><!-- End .col-xl-4-5col -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .bg-light pt-5 pb-6 -->

<div class="mb-5"></div><!-- End .mb-5 -->
