<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="adminDashboard\dist\assets/vendors/owl-carousel-2/owl.theme.default.min.css">


    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="adminDashboard\dist\assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="adminDashboard\dist\assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">

            </div>
        </div>

        <!-- partial:partials/_sidebar.html -->
        @include('dashboardPanel')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Users</h5>
                                <div class="row">

                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $userCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Active Users</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">All Users's Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-account-key text-primary ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Today Post Ads</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0"> {{ $todayAdsCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Today's Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-timetable text-danger ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>All Ads</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $adsCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">All Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-database text-success ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Computers & Laptops</h5>
                                <div class="row">

                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $computersCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Computers & Laptops Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">

                                        <i class="icon-lg mdi mdi-laptop text-success ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Smart Phones</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0"> {{ $smartphonesCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Smartphones Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-cellphone text-danger ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Tablets</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $tabletsCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Tablets Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-tablet text-success ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Computer Accessories</h5>
                                <div class="row">

                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $computerAccessoriesCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Computer Accessories Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-server text-primary ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Mobile Accessories</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $mobileAccessoriesCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Mobile Accessoriess Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Digital Cameras</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">{{ $digitalcamarasCount }}</h2>
                                            <p class="text-primary ms-2 mb-0 font-weight-medium">Ads</p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Digital Cameras Ads Count</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-camera text-success ml-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a
                                href="/" target="_blank">2Handz</a>. All rights
                            reserved.</span>

                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="adminDashboard\dist\assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="adminDashboard\dist\assets/vendors/chart.js/chart.umd.js"></script>
    <script src="adminDashboard\dist\assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="adminDashboard\dist\assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="adminDashboard\dist\assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="adminDashboard\dist\assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="adminDashboard\dist\assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="adminDashboard\dist\assets/js/off-canvas.js"></script>
    <script src="adminDashboard\dist\assets/js/misc.js"></script>
    <script src="adminDashboard\dist\assets/js/settings.js"></script>
    <script src="adminDashboard\dist\assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="adminDashboard\dist\assets/js/proBanner.js"></script>
    <script src="adminDashboard\dist\assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
