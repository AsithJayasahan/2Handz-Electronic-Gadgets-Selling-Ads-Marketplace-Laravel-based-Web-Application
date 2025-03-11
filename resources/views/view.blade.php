<!DOCTYPE html>
<html lang="en">


<!-- molla/product.html  22 Nov 2019 09:54:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-Ads</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="2Handz - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg" color="#666666')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="2Handz">
    <meta name="application-name" content="2Handz">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider/nouislider.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-4.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-4.css')}}">


    <style>

        #phone {
            display: none;
            text-align: center;
            font-size: 20px;
            padding-top: 0%;
            /* Initially hides the element with id "phone" */
        }
    </style>

</head>

<body>

    @include('header')

    <div class="container quickView-container">
        <div class="quickView-content">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                        <div class="product-left">
                            <a href="#one" class="carousel-dot active">
                                <img src="{{ asset($add->image1) }}">
                            </a>
                            <a href="#two" class="carousel-dot">
                                <img src="{{ asset($add->image2) }}">
                            </a>
                            <a href="#three" class="carousel-dot">
                                <img src="{{ asset($add->image3) }}">
                            </a>

                        </div>
                        <div class="product-right">
                            <div class="owl-carousel owl-theme owl-nav-inside owl-light mb-0" data-toggle="owl" data-owl-options='{
                                "dots": false,
                                "nav": false,
                                "URLhashListener": true,
                                "responsive": {
                                    "900": {
                                        "nav": true,
                                        "dots": true
                                    }
                                }
                            }'>
                                <div class="intro-slide" data-hash="one">
                                    <img src="{{ asset($add->image1) }}" alt="Image Desc">
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide" data-hash="two">
                                    <img src="{{ asset($add->image2) }}" alt="Image Desc">
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide" data-hash="three">
                                    <img src="{{ asset($add->image3) }}" alt="Image Desc">

                                </div><!-- End .intro-slide -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h2 class="product-title">{{ $add->brand }} {{ $add->model }}</h2>
                    <h3 class="product-price">Rs.{{ $add->price }}</h3>

                    <div class="ratings-container">
                        <span class="ratings-text">Posted on: {{ $add->created_at }}, {{ $add->location }}</span>
                    </div><!-- End .rating-container -->



                    <div class="row">
                        <dt class="col-3">Brand</dt>
                        <dd class="col-9">{{ $add->brand }}</dd>

                        <dt class="col-3">Model:</dt>
                        <dd class="col-9">{{ $add->model }}</dd>

                        <dt class="col-3">Condition</dt>
                        <dd class="col-9">{{ $add->condition }}</dd>

                        <dt class="col-3">Location</dt>
                        <dd class="col-9">{{ $add->location }}</dd>

                        <hr>
                        <dt class="col-3">description</dt>
                        <br><p class="product-txt">{{ $add->description }}</p>


                    </div>

                    {{-- <div class="product-details-action">
                        <div class="details-action-wrapper">
                            <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                            <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                        </div><!-- End .details-action-wrapper -->
                        <a href="#" class="btn-product btn-cart" onclick="show();"><span>Contact Number</span></a>
                        <a id="phone" href="tel:{{ $add->contactNumber }}">{{ $add->contactNumber }}</a>
                    </div> --}}


                    <div class="product-details-action">
                        <span>For Sale by: {{ $add->contactName }}</span><br>
                        <input type="button" id="show" name="" value="Click to Show Phone Number"
                            onclick="show();" class="btn-product btn-cart"><br>
                        {{-- <a id="show" href="#" onclick="show();">View phone</a><br> --}}

                        <a id="phone" href="tel:{{ $add->contactNumber }}">{{ $add->contactNumber }}</a>
                    </div>



                    <div class="product-details-footer">
                        <div class="product-cat">
                            <span>Category:</span>
                            <a href="#">{{ $add->category }}</a>,
                            <a href="#">{{ $add->brand }}</a>,
                            <a href="#">{{ $add->location }}</a>
                        </div><!-- End .product-cat -->

                        <div class="social-icons social-icons-sm">
                            <span class="social-label">Share:</span>
                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plugins JS File -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/superfish.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.elevateZoom.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>


    <script>
        document.getElementById("show").onclick = function() {
            show();
        };

        function show() {
            document.getElementById("phone").style.display = "block";
        }
    </script>





</body>

</html>
