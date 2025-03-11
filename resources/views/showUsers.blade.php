<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-ShowUsers</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="adminDashboard/dist/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="adminDashboard/dist/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="adminDashboard/dist/assets/images/favicon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <style>
        /* Custom CSS for scrolling */
        .users-container {
            max-height: 520px;
            overflow-y: auto;
        }
    </style>
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
                <div class="row" style="height: 520PX;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Registered Users</h4>
                                <div class="table-responsive users-container">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th> User ID </th>
                                                <th> User's Name </th>
                                                <th> User's Email </th>
                                                <th> Account Created Date & Time </th>
                                            </tr>
                                        </thead>
                                        <tbody class="scrollable-table-body">
                                            @foreach ($user as $user)
                                            <tr>
                                                <td class="py-1">{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024
                        <a href="/" target="_blank">2Handz</a>. All rights reserved.
                    </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="adminDashboard/dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="adminDashboard/dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="adminDashboard/dist/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="adminDashboard/dist/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="adminDashboard/dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="adminDashboard/dist/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="adminDashboard/dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="adminDashboard/dist/assets/js/off-canvas.js"></script>
    <script src="adminDashboard/dist/assets/js/misc.js"></script>
    <script src="adminDashboard/dist/assets/js/settings.js"></script>
    <script src="adminDashboard/dist/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="adminDashboard/dist/assets/js/proBanner.js"></script>
    <script src="adminDashboard/dist/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
</html>
