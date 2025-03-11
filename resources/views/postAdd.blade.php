<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-Post Ads</title>
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
        .error {
            color: red;
        }
    </style>
</head>

<body>
    @include('header')




    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">My Account<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="dashboard">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4 col-lg-3">
                            <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab"
                                        href="#tab-dashboard" role="tab" aria-controls="tab-dashboard"
                                        aria-selected="true">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders"
                                        role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads"
                                        role="tab" aria-controls="tab-downloads"
                                        aria-selected="false">Downloads</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address"
                                        role="tab" aria-controls="tab-address" aria-selected="false">Your
                                        Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account"
                                        role="tab" aria-controls="tab-account" aria-selected="false">
                                        Post Your Add Free</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sign Out</a>
                                </li>
                            </ul>
                        </aside><!-- End .col-lg-3 -->

                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel"
                                    aria-labelledby="tab-dashboard-link">
                                    <p>Hello <span class="font-weight-normal text-dark">User</span> (not <span
                                            class="font-weight-normal text-dark">User</span>? <a href="#">Log
                                            out</a>)
                                        <br>
                                        From your account dashboard you can view your <a href="#tab-orders"
                                            class="tab-trigger-link link-underline">recent orders</a>, manage your <a
                                            href="#tab-address" class="tab-trigger-link">shipping and billing
                                            addresses</a>, and <a href="#tab-account" class="tab-trigger-link">edit
                                            your password and account details</a>.
                                    </p>
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-orders" role="tabpanel"
                                    aria-labelledby="tab-orders-link">
                                    <p>No order has been made yet.</p>
                                    <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-downloads" role="tabpanel"
                                    aria-labelledby="tab-downloads-link">
                                    <p>No downloads available yet.</p>
                                    <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-address" role="tabpanel"
                                    aria-labelledby="tab-address-link">
                                    <p>The following addresses will be used on the checkout page by default.</p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card card-dashboard">
                                                <div class="card-body">
                                                    <h3 class="card-title">Billing Address</h3><!-- End .card-title -->

                                                    <p>User Name<br>
                                                        User Company<br>
                                                        John str<br>
                                                        New York, NY 10001<br>
                                                        1-234-987-6543<br>
                                                        yourmail@mail.com<br>
                                                        <a href="#">Edit <i class="icon-edit"></i></a>
                                                    </p>
                                                </div><!-- End .card-body -->
                                            </div><!-- End .card-dashboard -->
                                        </div><!-- End .col-lg-6 -->

                                        <div class="col-lg-6">
                                            <div class="card card-dashboard">
                                                <div class="card-body">
                                                    <h3 class="card-title">Shipping Address</h3>
                                                    <!-- End .card-title -->

                                                    <p>You have not set up this type of address yet.<br>
                                                        <a href="#">Edit <i class="icon-edit"></i></a>
                                                    </p>
                                                </div><!-- End .card-body -->
                                            </div><!-- End .card-dashboard -->
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-account" role="tabpanel"
                                    aria-labelledby="tab-account-link">

                                    <form action="{{ route('post-insert') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            @if (Session::has('sucuss'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif

                                            @if (Session::has('fail'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ Session::get('fail') }}
                                                </div>
                                            @endif

                                            <div class="col-sm-6">
                                                <label>Select the Category * </label>
                                                <select id="category" name="category" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="Computer">Computers</option>
                                                    <option value="Smartphone">Smartphone</option>
                                                    <option value="Tablet">Tablet</option>
                                                    <option value="ComputerAccessories">Computer Accessories</option>
                                                    <option value="MobileAccessories">Mobile Accessories</option>
                                                    <option value="DigitalCameras">Digital Cameras</option>
                                                </select>
                                                @error('category')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror

                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Select the Brand *</label>
                                                <select id="brand" name="brand"class="form-control">
                                                </select>
                                                @error('brand')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                        </div><!-- End .row -->

                                        <label>Model *</label>
                                        <input type="text" class="form-control" name="model">

                                        @error('model')
                                            <small class="form-text" style="color: red">{{ $message }}</small>
                                        @enderror

                                        <label>Price(LKR)*</label>
                                        <input type="price" class="form-control" name="price">
                                        @error('price')
                                            <small class="form-text" style="color: red">{{ $message }}</small>
                                        @enderror

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Condition * </label>
                                                <select id="condition" name="condition" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="BrandNew">New</option>
                                                    <option value="Used">Used</option>
                                                </select>
                                                @error('condition')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror


                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Select the Distict *</label>

                                                <select id="location" name="location" class="form-control">
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
                                                @error('location')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                        </div><!-- End .row -->




                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Import Image1 * </label>
                                                <input type="file" class="form-control-file" id="image1"
                                                    name="image1">
                                                @error('image1')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-4">
                                                <label>Import Image2 * </label>
                                                <input type="file" class="form-control-file" id="image1"
                                                    name="image1">
                                                @error('image2')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-4">
                                                <label>Import Image3 * </label>
                                                <input type="file" class="form-control-file" id="image3"
                                                    name="image3">
                                                @error('image3')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->


                                        <br>
                                        <label>Description *</label>
                                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                        @error('description')
                                            <small class="form-text" style="color: red">{{ $message }}</small>
                                        @enderror


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Seller Name * </label>
                                                <input type="text" class="form-control" id="contactName"
                                                    name="contactName">
                                                @error('contactName')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="contactNumber">Contact Number *</label>
                                                <input type="telephone" class="form-control" id="contactNumber"
                                                    name="contactNumber">
                                                @error('contactNumber')
                                                    <small class="form-text"
                                                        style="color: red">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        {{-- <input type="submit" name="submit" id="submit" value="Post Add" class="btn btn-outline-primary-2"> --}}
                                        <button type="submit" class="btn btn-outline-primary-2" name="submit"
                                            id="submit">
                                            <span>Submit</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>



                                    </form>
                                </div><!-- .End .tab-pane -->
                            </div>
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .dashboard -->
        </div><!-- End .page-content -->


        <script>
            // Get references to the dropdowns
            const category = document.getElementById('category');
            const brand = document.getElementById('brand');

            // Define the options for the second dropdown based on the selection in the first dropdown
            const options = {
                Computer: ['', 'Apple', 'Dell', 'HP', 'Lenovo', 'Asus', 'Acer', 'Microsoft', 'MSI', 'Samsung', 'Toshiba',
                    'Sony', 'Huawei', 'LG', 'Razer', 'Gigabyte', 'Fujitsu', 'Panasonic', 'Alienware', 'Vaio',
                    'Chromebook'
                ],
                Smartphone: ['', 'Apple', 'Samsung', 'Huawei', 'Xiaomi', 'Oppo', 'Vivo', 'OnePlus', 'Google (Pixel)',
                    'Motorola', 'Sony', 'LG', 'HTC', 'Nokia', 'ASUS', 'Lenovo', 'Realme', 'TCL', 'ZTE', 'Alcatel',
                    'Meizu', 'BlackBerry', 'Honor', 'Micromax', 'Infinix', 'Tecno', 'Itel', 'Lava', 'Karbonn',
                    'Symphony'
                ],
                Tablet: ['', 'Apple', 'Samsung', 'Huawei', 'Lenovo', 'Amazon', 'Microsoft', 'Asus', 'Google', 'Sony',
                    'Xiaomi',
                    'LG', 'Acer', 'Alcatel', 'Barnes & Noble', 'Dell', 'HP', 'RCA', 'Toshiba', 'Panasonic', 'Vankyo'
                ],
                DigitalCameras: ['', 'Canon', 'Nikon', 'Sony', 'Panasonic', 'Fujifilm', 'Olympus', 'Leica', 'Pentax',
                    'Samsung',
                    'Ricoh', 'GoPro', 'DJI', 'YI Technology', 'Insta360', 'Kodak', 'Polaroid', 'Casio', 'Sigma',
                    'Hasselblad', 'Phase One'
                ],
                SmartWatch: ['', 'Apple', 'Samsung', 'Garmin', 'Fitbit', 'Huawei', 'Fossil', 'Xiaomi', 'Amazfit',
                    'TicWatch', 'Mobvoi', 'Withings', 'Polar', 'Suunto', 'TAG Heuer', 'Oppo', 'LG', 'Honor', 'Casio',
                    'Sony', 'Moto'
                ]
            };

            // Event listener for change in the first dropdown
            category.addEventListener('change', function() {
                // Clear previous options in the second dropdown
                brand.innerHTML = '';

                // Get the selected option from the first dropdown
                const selectedOption = this.value;

                // Populate options in the second dropdown based on the selected option
                options[selectedOption].forEach(option => {
                    const optionElement = document.createElement('option');
                    optionElement.textContent = option;
                    optionElement.value = option;
                    brand.appendChild(optionElement);
                });
            });
        </script>
    </main><!-- End .main -->
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
