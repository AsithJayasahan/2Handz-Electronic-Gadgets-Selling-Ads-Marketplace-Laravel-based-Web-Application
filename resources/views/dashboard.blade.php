<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard-2Handz</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">


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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/alertstyles.css">

    <!-- Importing font-awesome CDN for icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .error {
            color: red;
            size: 20px;
        }

        form {
            size: 20px;
        }
    </style>
</head>

<body>



    @include('dashboardHeader')



    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Dashboard<span>Hi {{ auth()->user()->name }}</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none;">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">Shop</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                        aria-selected="true">Post Your Add Free</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders"
                                        role="tab" aria-controls="tab-orders" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads"
                                        role="tab" aria-controls="tab-downloads"
                                        aria-selected="false">Caregories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address"
                                        role="tab" aria-controls="tab-address" aria-selected="false">Your
                                        Posts</a>
                                </li>

                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="">Sign Out</a> --}}

                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="nav-link">
                                        Sign Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </aside><!-- End .col-lg-3 -->

                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel"
                                    aria-labelledby="tab-dashboard-link">




                                    <form action="{{ route('post-insert') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class='alert__container'>
                                            @if (Session::has('success'))
                                                <!-- Info alert -->
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
                                                    <i class="fas fa-exclamation-circle alert__icon"></i>
                                                    <p class='alert__text'> {{ Session::get('fail') }}</p>
                                                    <button type="button" class="alert__close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"><i
                                                                class="fas fa-times-circle alert__close"></i></span>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Select the Category * </label>
                                                <select id="category" name="category" class="form-control"
                                                    style="font-size: 13px;">
                                                    <option value="">Select</option>
                                                    <option value="Computer">Computers</option>
                                                    <option value="Smartphone">Smartphone</option>
                                                    <option value="Tablet">Tablet</option>
                                                    <option value="ComputerAccessories">Computer
                                                        Accessories</option>
                                                    <option value="MobileAccessories">Mobile Accessories
                                                    </option>
                                                    <option value="DigitalCameras">Digital Cameras</option>
                                                </select>
                                                @error('category')
                                                    <p class="form-text" style="color: red; size:35px;">
                                                        {{ $message }}</p>
                                                @enderror

                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Select the Brand *</label>
                                                {{-- <select id="brand" name="brand"class="form-control">
                                                </select>
                                                --}}

                                                <input type="text" name="brand" id="brand"
                                                    class="form-control" value="{{ old('brand') }}"
                                                    style="font-size: 13px;">
                                                @error('brand')
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                        </div><!-- End .row -->

                                        <label>Model *</label>
                                        <input type="text" class="form-control" name="model"
                                            value="{{ old('model') }}"style="font-size: 13px;">

                                        @error('model')
                                            <p class="form-text" style="color: red">{{ $message }}</p>
                                        @enderror

                                        <label>Price(LKR)*</label>
                                        <input type="price" class="form-control" name="price"
                                            value="{{ old('price') }}" style="font-size: 13px;">
                                        @error('price')
                                            <p class="form-text" style="color: red">{{ $message }}</p>
                                        @enderror

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Condition * </label>
                                                <select id="condition" name="condition" class="form-control"
                                                    style="font-size: 13px;">
                                                    <option value="">Select</option>
                                                    <option value="BrandNew">New</option>
                                                    <option value="Used">Used</option>
                                                </select>
                                                @error('condition')
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror


                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Select the Distict *</label>

                                                <select id="location" name="location" class="form-control"
                                                    style="font-size: 13px;">
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
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                        </div><!-- End .row -->



                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>Import Image1 * </label>
                                                <input type="file" class="form-control-file" id="image1"
                                                    name="image1" value="{{ old('image1') }}"
                                                    style="font-size: 13px;">
                                                @error('image1')
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-4">
                                                <label>Import Image2 * </label>
                                                <input type="file" class="form-control-file" id="image2"
                                                    name="image2" value="{{ old('image2') }}"
                                                    style="font-size: 13px;">
                                                @error('image2')
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-4">
                                                <label>Import Image3 * </label>
                                                <input type="file" class="form-control-file" id="image3"
                                                    name="image3"
                                                    value="{{ old('image3') }}"style="font-size: 13px;">
                                                @error('image3')
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->


                                        <br>
                                        <label>Description *</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" value="{{ old('description') }}"
                                            style="font-size: 13px;"></textarea>
                                        @error('description')
                                            <p class="form-text" style="color: red">{{ $message }}</p>
                                        @enderror


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Seller Name * </label>
                                                <input type="text" class="form-control" id="contactName"
                                                    name="contactName" value="{{ old('contactName') }}"
                                                    style="font-size: 13px;">
                                                @error('contactName')
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="contactNumber">Contact Number *</label>
                                                <input type="telephone" class="form-control" id="contactNumber"
                                                    name="contactNumber" value="{{ old('contactNumber') }}"
                                                    style="font-size: 13px;">
                                                @error('contactNumber')
                                                    <p class="form-text" style="color: red">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>

                                        {{-- <input type="submit" name="submit" id="submit" value="Post Add" class="btn btn-outline-primary-2"> --}}
                                        <button type="submit" class="btn btn-outline-primary" name="submit"
                                            id="submit" style="font-size: 13px;">
                                            <span>Submit</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>



                                    </form>

                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-orders" role="tabpanel"
                                    aria-labelledby="tab-orders-link">
                                    <table class="table" style="font-size: 13px;">
                                        <tbody>

                                            <tr>

                                                <td><strong>Name:</strong></td>
                                                <td> {{ auth()->user()->name }}</td>
                                                <td><a href="{{ route('userProfile') }}">Edit</a></td>
                                            </tr>
                                            <tr>

                                                <td><strong>Email:</strong></td>
                                                <td> {{ auth()->user()->email }}</td>
                                                <td><a href="{{ route('userProfile') }}">Edit</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i
                                            class="icon-long-arrow-right"></i></a> --}}
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-downloads" role="tabpanel"
                                    aria-labelledby="tab-downloads-link">
                                    <div class="cat-blocks-container">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-lg-2">
                                                <a href="{{ route('computers', ['category' => 'Computer']) }}"
                                                    class="cat-block" style=" text-decoration: none;">
                                                    <figure>
                                                        <span>
                                                            <img src="assets/images/demos/demo-4/cats/1.png"
                                                                alt="Category image">
                                                        </span>
                                                    </figure>

                                                    <h3 class="cat-block-title">Computer & Laptop</h3>
                                                    <!-- End .cat-block-title -->
                                                </a>
                                            </div><!-- End .col-sm-4 col-lg-2 -->



                                            <div class="col-6 col-sm-4 col-lg-2">
                                                <a href="{{ route('smartphones', ['category' => 'Smartphone']) }}"
                                                    class="cat-block" style=" text-decoration: none;">
                                                    <figure>
                                                        <span>
                                                            <img src="assets/images/demos/demo-4/cats/3.png"
                                                                alt="Category image">
                                                        </span>
                                                    </figure>

                                                    <h3 class="cat-block-title">Smart Phones</h3>
                                                    <!-- End .cat-block-title -->
                                                </a>
                                            </div><!-- End .col-sm-4 col-lg-2 -->

                                            <div class="col-6 col-sm-4 col-lg-2">
                                                <a href="{{ route('tablets', ['category' => 'Tablet']) }}"
                                                    class="cat-block" style=" text-decoration: none;">
                                                    <figure>
                                                        <span>
                                                            <img src="assets/images/demos/demo-4/cats/6.png"
                                                                alt="Category image">
                                                        </span>
                                                    </figure>

                                                    <h3 class="cat-block-title">Tablets</h3>
                                                    <!-- End .cat-block-title -->
                                                </a>
                                            </div><!-- End .col-sm-4 col-lg-2 -->

                                            <div class="col-6 col-sm-4 col-lg-2">
                                                <a href="{{ route('ComputerAccessories', ['category' => 'ComputerAccessories']) }}"
                                                    class="cat-block" style=" text-decoration: none;">
                                                    <figure>
                                                        <span>
                                                            <img src="assets/images/demos/demo-4/cats/4.png"
                                                                alt="Category image">
                                                        </span>
                                                    </figure>

                                                    <h3 class="cat-block-title">Computer Accessories</h3>
                                                    <!-- End .cat-block-title -->
                                                </a>
                                            </div><!-- End .col-sm-4 col-lg-2 -->

                                            <div class="col-6 col-sm-4 col-lg-2">
                                                <a href="{{ route('MobileAccessories', ['category' => 'MobileAccessories']) }}"
                                                    class="cat-block" style=" text-decoration: none;">
                                                    <figure>
                                                        <span>
                                                            <img src="assets/images/demos/demo-4/cats/5.png"
                                                                alt="Category image">
                                                        </span>
                                                    </figure>

                                                    <h3 class="cat-block-title">Mobile Accessories</h3>
                                                    <!-- End .cat-block-title -->
                                                </a>
                                            </div><!-- End .col-sm-4 col-lg-2 -->

                                            <div class="col-6 col-sm-4 col-lg-2">
                                                <a href="{{ route('digitalCameras', ['category' => 'DigitalCameras']) }}"
                                                    class="cat-block" style=" text-decoration: none;">
                                                    <figure>
                                                        <span>
                                                            <img src="assets/images/demos/demo-4/cats/2.png"
                                                                alt="Category image">
                                                        </span>
                                                    </figure>

                                                    <h3 class="cat-block-title">Digital Cameras</h3>
                                                    <!-- End .cat-block-title -->
                                                </a>
                                            </div><!-- End .col-sm-4 col-lg-2 -->


                                        </div><!-- End .row -->
                                    </div><!-- End .cat-blocks-container -->
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-address" role="tabpanel"
                                    aria-labelledby="tab-address-link">


                                    {{-- <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $ad->model }}</h5>
                                            <p class="card-text">Price: {{ $ad->price }}</p>
                                            <!-- Add more details here as needed -->
                                        </div>
                                    </div> --}}



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <table class="table table-cart table-mobile" style="font-size: 13px;">
                                                    <thead>
                                                        <tr>
                                                            <th>Model</th>
                                                            <th>Published Date</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($userAds as $ad)
                                                            <tr>
                                                                <td class="product-col">
                                                                    <div class="product">
                                                                        {{-- <figure class="product-media">
                                                                            <a href="#">
                                                                                <img src="{{ $ad->image1 }}"
                                                                                    alt="Product image">
                                                                            </a>
                                                                        </figure> --}}

                                                                        <h3 class="product-title">
                                                                            <a href="{{ url('view/' . $ad->id) }}"
                                                                                style="text-decoration: none;"><small>{{ $ad->brand }}
                                                                                    {{ $ad->model }}</small></a>
                                                                        </h3><!-- End .product-title -->
                                                                    </div><!-- End .product -->
                                                                </td>

                                                                <td class="price-col">
                                                                    <small>{{ $ad->created_at }}</small>
                                                                </td>




                                                                <td>
                                                                    <button class="btn btn-primary mb-2">
                                                                        <a href="{{ url('view/' . $ad->id) }}"
                                                                            style="text-decoration: none; color: white;">View</a>
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <form action="{{ route('ads.destroy', $ad->id) }}"
                                                                        method="POST" style="display: inline;"
                                                                        onsubmit="return confirmDelete()">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger mb-2"
                                                                            style="text-decoration: none; color: white;">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>

                                                </table><!-- End .table table-wishlist -->
                                            </div><!-- End .row -->
                                        </div>






                                    </div><!-- .End .tab-pane -->

                                    <div class="tab-pane fade" id="tab-account" role="tabpanel"
                                        aria-labelledby="tab-account-link">









                                    </div><!-- .End .tab-pane -->
                                </div>
                            </div><!-- End .col-lg-9 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .dashboard -->
            </div><!-- End .page-content -->



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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- </x-app-layout> --}}
    <!-- Importing jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
{{-- </x-app-layout> --}}

</html>
