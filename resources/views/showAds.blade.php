<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-Show Ads</title>
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

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="adminDashboard/dist/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="adminDashboard/dist/assets/images/favicon.png" />
    <style>
        /* Custom CSS for scrolling */
        .ads-container {
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
                <div class="filters">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="filterCategory">Category:</label>
                            <select id="filterCategory" class="form-control">
                                <option value="">All</option>
                                <!-- Add your categories here -->
                                <option value="Computer">Computers</option>
                                <option value="Smartphone">Smartphone</option>
                                <option value="Tablet">Tablet</option>
                                <option value="ComputerAccessories">Computer Accessories</option>
                                <option value="MobileAccessories">Mobile Accessories</option>
                                <option value="DigitalCameras">Digital Cameras</option>
                                <!-- ... -->
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="filterCondition">Condition:</label>
                            <select id="filterCondition" class="form-control">
                                <option value="">All</option>
                                <!-- Add your conditions here -->
                                <option value="New">New</option>
                                <option value="Used">Used</option>
                                <!-- ... -->
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="filterLocation">Location:</label>
                            <input type="text" id="filterLocation" class="form-control">
                        </div>

                        <div class="col-md-3">
                            <label for="filterDate">Publish Date:</label>
                            <input type="date" id="filterDate" class="form-control">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Posted Ads</h4>
                                <div class="table-responsive ads-container">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><center>Ads No</center></th>
                                                <th><center>Product</center></th>
                                                <th>Category</th>
                                                {{-- <th><center>Condition</center></th> --}}
                                                <th><center>Location</center></th>
                                                <th><center>Posted Date</center></th>
                                                <th></th>
                                                <th><center>Manage</center></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ads as $ads)
                                                <tr>
                                                    <td><span class="ps-2">{{ $ads->id }}</span></td>
                                                    <td><span class="ps-2">{{ $ads->brand }} {{ $ads->model }}</span></td>
                                                    <td><span class="ps-2">{{ $ads->category }}</span></td>
                                                    {{-- <td><span class="ps-2">{{ $ads->condition }}</span></td> --}}
                                                    <td><span class="ps-2">{{ $ads->location }}</span></td>
                                                    <td><span class="ps-2">{{ $ads->created_at }}</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-primary btn-icon-text">
                                                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                                            <a href="{{ url('view/' . $ads->id) }}" style="text-decoration: none; color: white;">View</a>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-secondary btn-icon-text">
                                                            <i class="mdi mdi-file-check btn-icon-append"></i>
                                                            <a href="{{ route('ads.edit', $ads->id) }}" style="text-decoration: none">Edit</a>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('ads.destroy', $ads->id) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete()">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-danger btn-icon-text">
                                                                <i class="mdi mdi-upload btn-icon-prepend"></i> Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this ad?');
        }

        document.addEventListener('DOMContentLoaded', function () {
            const filterDate = document.getElementById('filterDate');
            const filterCategory = document.getElementById('filterCategory');
            const filterLocation = document.getElementById('filterLocation');
            const filterCondition = document.getElementById('filterCondition');

            const filters = [filterDate, filterCategory, filterLocation, filterCondition];

            filters.forEach(filter => {
                filter.addEventListener('change', filterTable);
            });

            function filterTable() {
                const dateValue = filterDate.value.toLowerCase();
                const categoryValue = filterCategory.value.toLowerCase();
                const locationValue = filterLocation.value.toLowerCase();
                const conditionValue = filterCondition.value.toLowerCase();

                const rows = document.querySelectorAll('tbody tr');

                rows.forEach(row => {
                    const dateCell = row.querySelector('td:nth-child(7)').innerText.toLowerCase();
                    const categoryCell = row.querySelector('td:nth-child(4)').innerText.toLowerCase();
                    const locationCell = row.querySelector('td:nth-child(6)').innerText.toLowerCase();
                    const conditionCell = row.querySelector('td:nth-child(5)').innerText.toLowerCase();

                    const dateMatch = dateValue === '' || dateCell.includes(dateValue);
                    const categoryMatch = categoryValue === '' || categoryCell.includes(categoryValue);
                    const locationMatch = locationValue === '' || locationCell.includes(locationValue);
                    const conditionMatch = conditionValue === '' || conditionCell.includes(conditionValue);

                    if (dateMatch && categoryMatch && locationMatch && conditionMatch) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }
        });
    </script>
    <!-- End custom js for this page -->
</body>
</html>
