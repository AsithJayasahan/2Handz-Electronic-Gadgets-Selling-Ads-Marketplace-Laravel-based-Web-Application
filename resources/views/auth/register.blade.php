<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="2hand : Sign Up" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="/assets/login-images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/login-images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>2Handz-Sign Up</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">

    <!-- All PLUGINS CSS ============================================= -->

    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/login-css/assets.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/login-css/typography.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/login-css/shortcodes/shortcodes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/login-css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/login-css/color/color-1.css') }}">


</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url(assets/login-images/background/bg1.png);">

            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Sign Up <span>Now</span></h2>
                        <p>Login Your Account <a href="login">Click here</a></p>
                    </div>

                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="contact-bx">
                        @csrf
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Name</label>
                                        {{-- <input name="dzName" type="text" required="" class="form-control"> --}}
                                        <x-input id="name" class="form-control" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Email Address</label>
                                        <x-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autocomplete="username" />
                                        {{-- <input name="dzName" type="email" required="" class="form-control"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Password</label>
                                        <x-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="new-password" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Confirm Password</label>
                                        <x-input id="password_confirmation" class="form-control" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 m-b30">
                                <x-button class="ms-4" name="submit" type="submit" value="Submit" class="btn button-md">
                                    {{ __('Register') }}
                                </x-button>

                                {{-- <button name="submit" type="submit" value="Submit" class="btn button-md">Sign
                                    Up</button> --}}
                            </div>
                            {{-- <div class="col-lg-12">
                                <h6>Sign Up with Social media</h6>
                                <div class="d-flex">
                                    <a class="btn flex-fill m-r5 facebook" href="#"><i
                                            class="fa fa-facebook"></i>Facebook</a>
                                    <a class="btn flex-fill m-l5 google-plus" href="#"><i
                                            class="fa fa-google-plus"></i>Google Plus</a>
                                </div>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- External JavaScripts -->
    <script src="{{ asset('/assets/login-js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/counter/counterup.min.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/masonry/masonry.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/masonry/filter.js') }}"></script>
    <script src="{{ asset('/assets/login-vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('/assets/login-js/functions.js') }}"></script>
    <script src="{{ asset('/assets/login-js/contact.js') }}"></script>

</body>

</html>
