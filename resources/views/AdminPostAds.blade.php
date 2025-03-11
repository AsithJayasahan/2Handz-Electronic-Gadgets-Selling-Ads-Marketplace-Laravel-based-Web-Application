<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-Post Ads</title>
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
    <link rel="stylesheet" href="adminDashboard\dist\assets/css/alertStyle.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="adminDashboard\dist\assets/images/favicon.png" />

    <!-- Importing font-awesome CDN for icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
            </div>
        </div>
        <!-- partial:../../partials/_sidebar.html -->
        @include('dashboardPanel')


        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Post An Ads</h4>
                            <form action="{{ route('post-insert') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class='alert__container'>

                                    @if (Session::has('success'))
                                        <div class='alert alert__primary spacer' role='alert'>
                                            <i class="fas fa-check-circle alert__icon"></i>
                                            <p class='alert__text'> {{ Session::get('success') }}</p>
                                            <button type="button" class="alert__close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i
                                                        class="fas fa-times-circle alert__close"></i></span>
                                            </button>
                                        </div>
                                    @endif

                                    @if (Session::has('fail'))
                                        <!-- Danger alert -->
                                        <div class='alert alert__error spacer' role='alert'>
                                            <i class="fas fa-minus-circle alert__icon"></i>
                                            <p class='alert__text'> {{ Session::get('fail') }}</p>
                                            <button type="button" class="alert__close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true"><i
                                                        class="fas fa-times-circle alert__close"></i></span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                                <p class="card-description"> Ads info </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Choose Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="category" name="category">
                                                    <option value="">Select</option>
                                                    <option value="Computer">Computers</option>
                                                    <option value="Smartphone">Smartphone</option>
                                                    <option value="Tablet">Tablet</option>
                                                    <option value="ComputerAccessories">Computer Accessories
                                                    </option>
                                                    <option value="MobileAccessories">Mobile Accessories</option>
                                                    <option value="DigitalCameras">Digital Cameras</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('category')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Brand Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="brand"
                                                    id="brand" placeholder="eg: Samsung"
                                                    value="{{ old('brand') }}" />
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('brand')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Model</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="model"
                                                    id="model" placeholder="eg:Galaxy S20 Ultra "
                                                    value="{{ old('model') }}" />
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('model')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-primary text-white">Rs.</span>
                                                    </div>
                                                    <input type="number" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)" id="price"
                                                        name="price" value="{{ old('price') }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-8">
                                                        @error('price')
                                                            <small class="form-text"
                                                                style="color: red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">City</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="location" name="location">
                                                    <option value="">Select District</option>
                                                    <option value="Ampara">Ampara</option>
                                                    <option value="Anuradhapura">Anuradhapura</option>
                                                    <option value="Badulla">Badulla</option>
                                                    <option value="Batticaloa">Batticaloa</option>
                                                    <option value="Colombo">Colombo</option>
                                                    <option value="Galle">Galle</option>
                                                    <option value="Gampaha">Gampaha</option>
                                                    <option value="Hambantota">Hambantota</option>
                                                    <option value="Jaffna">Jaffna</option>
                                                    <option value="Kalutara">Kalutara</option>
                                                    <option value="Kandy">Kandy</option>
                                                    <option value="Kegalle">Kegalle</option>
                                                    <option value="Kilinochchi">Kilinochchi</option>
                                                    <option value="Kurunegala">Kurunegala</option>
                                                    <option value="Mannar">Mannar</option>
                                                    <option value="Matale">Matale</option>
                                                    <option value="Matara">Matara</option>
                                                    <option value="Monaragala">Monaragala</option>
                                                    <option value="Mullaitivu">Mullaitivu</option>
                                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                                    <option value="Puttalam">Puttalam</option>
                                                    <option value="Ratnapura">Ratnapura</option>
                                                    <option value="Trincomalee">Trincomalee</option>
                                                    <option value="Vavuniya">Vavuniya</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('location')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Condition</label>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="condition" id="condition" value="BrandNew" checked>
                                                        Brand New </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="condition" id="condition" value="Used"> Used
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('condition')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Image-1</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image1" class="file-upload-default">
                                                <div class="input-group col-xs-6 d-flex align-items-center">

                                                    <input type="file" class="form-control-file " id="image1"
                                                        name="image1" value="{{ old('image1') }}"
                                                        style="font-size: 13px;">
                                                </div>

                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-8">
                                                        @error('image1')
                                                            <small class="form-text"
                                                                style="color: red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Image-2</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image2" class="file-upload-default">
                                                <div class="input-group col-xs-6 d-flex align-items-center">
                                                    <input type="file" class="form-control-file " id="image2"
                                                        name="image2" value="{{ old('image2') }}"
                                                        style="font-size: 13px;">
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-8">
                                                        @error('image2')
                                                            <small class="form-text"
                                                                style="color: red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Image-3</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image3" class="file-upload-default">
                                                <div class="input-group col-xs-6 d-flex align-items-center">
                                                    <input type="file" class="form-control-file " id="image3"
                                                        name="image3" value="{{ old('image3') }}"
                                                        style="font-size: 13px;">
                                                </div>
                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-8">
                                                        @error('image3')
                                                            <small class="form-text"
                                                                style="color: red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="description" value="{{ old('description') }}" name="description" rows="4"
                                                    name="description"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('description')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <p class="card-description"> Seller Details </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="contactName"
                                                    id="contactName" value="{{ old('contactName') }}" />
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('contactName')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Contact No</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="contactNumber"
                                                    name="contactNumber" value="{{ old('contactNumber') }}" />
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-8">
                                                    @error('contactNumber')
                                                        <small class="form-text"
                                                            style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-primary mb-2" name="submit"
                                                id="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
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

    <!-- Importing jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>
