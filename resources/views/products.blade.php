<div class="container for-you">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Latest Ads</h2><!-- End .title -->
        </div><!-- End .heading-left -->

        <div class="heading-right">
            <a href="all-ads" class="title-link">View All Ads <i class="icon-long-arrow-right"></i></a>
        </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="products">
        <div class="row justify-content-center">
            @foreach ($ads as $ads)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="product product-2">
                    <figure class="product-media">
                        {{-- <span class="product-label label-circle label-sale">Sale</span> --}}
                        <a href="{{ url('view/' . $ads->id) }}">
                            <img src={{ $ads->image1 }} alt="Product image"
                                class="product-image">
                        </a>
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">{{ $ads->category }}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="{{ url('view/' . $ads->id) }}">{{ $ads->brand }} {{ $ads->model }}</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">Rs. {{ $ads->price }}</span>
                        </div><!-- End .product-price -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
            @endforeach





        </div><!-- End .row -->
    </div><!-- End .products -->
</div><!-- End .container -->

<div class="mb-4"></div><!-- End .mb-4 -->

<div class="container">
    <hr class="mb-0">
</div><!-- End .container -->
