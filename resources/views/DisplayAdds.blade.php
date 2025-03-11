<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-Ads</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="2Handz - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="2Handz">
    <meta name="application-name" content="2Handz">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">

    <style>
        .scrollable-ads {
            max-height: 600px;
            /* Set the max height as per your design */
            overflow-y: auto;
        }
    </style>
</head>

<body>
    @include('header')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Product List -->
                <div class="row scrollable-ads">
                    @foreach ($add as $item)
                        <div class="col-md-12 product-col" style="padding-bottom: 30px">
                            <div class="row p-2 bg-white border rounded">
                                <div class="col-md-3 mt-1">
                                    <a href="{{ url('view/' . $item->id) }}">
                                        <img class="img-fluid img-responsive rounded product-image"
                                            src="{{ asset($item->image3) }}"></a>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <h5>{{ $item->brand }} {{ $item->model }}</h5>
                                    <a href="">{{ $item->category }}</a>
                                    <div class="d-flex flex-row">
                                        <div></div><span>{{ $item->created_at }}</span>
                                    </div>
                                    <div class="mt-1 mb-1 spec-1">
                                        <a href=""><i
                                                class="fa-solid fa-location-dot"></i>{{ $item->location }}</a>
                                    </div>
                                    <div class="mt-1 mb-1 spec-1"></div>
                                </div>
                                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                    <div class="d-flex flex-row align-items-center">
                                        <h4 class="mr-1">Rs.{{ $item->price }}.00</h4>
                                    </div>
                                    <h6 class="text-success">{{ $item->condition }}</h6>
                                    <div class="d-flex flex-column mt-4">
                                        <a href="{{ url('view/' . $item->id) }}">
                                            <button class="btn btn-primary btn-sm" type="button">Details</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <!-- Categories and Locations Widgets -->
                <div class="widget widget-cats">
                    <h3 class="widget-title">Categories</h3>
                    <ul>
                        <li><a href="{{ route('computers', ['category' => 'Computer']) }}">Computers &
                                Laptops<span>3</span></a></li>
                        <li><a href="{{ route('digitalCameras', ['category' => 'DigitalCameras']) }}">Digital
                                Cameras<span>{{ $totaldigitalcamerasCount }}</span></a></li>
                        <li><a
                                href="{{ route('smartphones', ['category' => 'Smartphone']) }}">Smartphones<span>{{ $totalPhonesCount }}</span></a>
                        </li>
                        <li><a href="{{ route('tablets', ['category' => 'Tablet']) }}">Tablets<span>{{ $totaltabletsCount }}</span></a></li>
                        <li><a href="{{ route('ComputerAccessories', ['category' => 'ComputerAccessories']) }}">Computer
                                Accessories<span>{{ $totalcomputeraccessoriesCount }}</span></a></li>
                        <li><a href="{{ route('MobileAccessories', ['category' => 'MobileAccessories']) }}">Mobile
                                Accessories<span>{{ $totalPhonesaccessoriesCount }}</span></a></li>
                    </ul>
                </div>
                <div class="widget widget-cats">
                    <h3 class="widget-title">Categories</h3>
                <ul>
                    <li><a href="{{ route('FindAdsByLocation', 'Colombo') }}">Colombo<span>{{ $colomboCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Gampaha') }}">Gampaha<span>{{ $GampahaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Kalutara') }}">Kalutara<span>{{ $KalutaraCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Kandy') }}">Kandy<span>{{ $KandyCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Matale') }}">Matale<span>{{ $MataleCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Nuwara Eliya') }}">Nuwara Eliya<span>{{ $NuwaraEliyaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Galle') }}">Galle<span>{{ $GalleCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Matara') }}">Matara<span>{{ $MataraCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Hambantota') }}">Hambantota<span>{{ $HambantotaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Jaffna') }}">Jaffna<span>{{ $JaffnaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Kilinochchi') }}">Kilinochchi<span>{{ $KilinochchiCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Mannar') }}">Mannar<span>{{ $MannarCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Mullaitivu') }}">Mullaitivu<span>{{ $MullaitivuCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Vavuniya') }}">Vavuniya<span>{{ $VavuniyaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Batticaloa') }}">Batticaloa<span>{{ $BatticaloaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Ampara') }}">Ampara<span>{{ $AmparaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Trincomalee') }}">Trincomalee<span>{{ $TrincomaleeCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Kurunegala') }}">Kurunegala<span>{{ $KurunegalaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Puttalam') }}">Puttalam<span>{{ $PuttalamCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Anuradhapura') }}">Anuradhapura<span>{{ $AnuradhapuraCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Polonnaruwa') }}">Polonnaruwa<span>{{ $PolonnaruwaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Badulla') }}">Badulla<span>{{ $BadullaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Monaragala') }}">Monaragala<span>{{ $MonaragalaCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Ratnapura') }}">Ratnapura<span>{{ $RatnapuraCount }}</span></a></li>
                    <li><a href="{{ route('FindAdsByLocation', 'Kegalle') }}">Kegalle<span>{{ $KegalleCount }}</span></a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('footer')

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-4.js"></script>
</body>

</html>
