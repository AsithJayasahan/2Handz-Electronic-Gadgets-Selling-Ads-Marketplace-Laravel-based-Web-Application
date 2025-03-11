<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <!-- Add your custom CSS if any -->
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body>

    <main class="main">
        <div class="intro-slider-container mb-5">
            <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
                data-owl-options='{
                "dots": true,
                "nav": false,
                "autoplay": true,
                "autoplayTimeout": 5000,
                "responsive": {
                    "1200": {
                        "nav": true,
                        "dots": false
                    }
                }
            }'>
                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-1.png);">
                    <div class="container intro-content">
                        <div class="row justify-content-end">
                            <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                <h3 class="intro-subtitle text-third">Your Free Marketplace</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h4 class="intro-title">List Your Tech for Free on 2Handz </h4>
                                <h4 class="intro-title"></h4><!-- End .intro-title -->

                                <div class="intro-price">
                                    {{-- <sup class="intro-old-price">$349,95</sup>
                                    <span class="text-third">
                                        $279<sup>.99</sup>
                                    </span> --}}
                                </div><!-- End .intro-price -->

                                <a href="all-ads" class="btn btn-primary btn-round">
                                    <span>Show Ads</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-lg-11 offset-lg-1 -->
                        </div><!-- End .row -->
                    </div><!-- End .intro-content -->
                </div><!-- End .intro-slide -->

                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-2.png);">
                    <div class="container intro-content">
                        <div class="row justify-content-end">
                            <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                <h3 class="intro-subtitle text-primary">The Best Place to Buy & Sell Tech Accessories!</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title">Upgrade Your Gadgets with 2Handz</h1>
                                <!-- End .intro-title -->

                                <div class="intro-price">
                                    {{-- <sup>Today:</sup>
                                    <span class="text-primary">
                                        $999<sup>.99</sup>
                                    </span> --}}
                                </div><!-- End .intro-price -->

                                <a href="all-ads" class="btn btn-primary btn-round">
                                    <span>Show Ads</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-md-6 offset-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .intro-content -->
                </div><!-- End .intro-slide -->
            </div><!-- End .intro-slider owl-carousel owl-simple -->

            <span class="slider-loader"></span><!-- End .slider-loader -->
        </div><!-- End .intro-slider-container -->

        <!-- Add your JavaScript files here -->
        <script src="jquery.min.js"></script>
        <script src="owl.carousel.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".intro-slider").owlCarousel({
                    dots: true,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    responsive: {
                        1200: {
                            nav: true,
                            dots: false
                        }
                    }
                });
            });
        </script>
    </main>

</body>

</html>
