{{-- <x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">


<head>

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/login-images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>2Handz-Sign In</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">

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
                <a href="index.html"><img src="assets/images/logo-white-2.png" alt=""></a>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Login to your <span>Account</span></h2>
                        <p>Don't have an account? <a href="register">Create one here</a></p>
                    </div>

                    <x-validation-errors class="mb-4" />

                    @session('status')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ $value }}
                        </div>
                    @endsession


                    <form class="contact-bx" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">

                                        <label>Your Email</label>
                                        <x-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Password</label>
                                        <x-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group form-forget">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="ml-auto" href="{{ route('password.request') }}" style="padding-left: 60px">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>

                        <div class="col-lg-12 m-b30">

                            <x-button class="btn button-md" name="submit" type="submit" value="Submit" >
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                        {{-- <div class="col-lg-12">
                            <h6>Login with Social media</h6>
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
{{-- </x-guest-layout> --}}



