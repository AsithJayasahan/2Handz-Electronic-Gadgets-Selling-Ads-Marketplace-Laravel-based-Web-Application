<!DOCTYPE html>
<html lang="en">

<head>


	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>2Handz-Forget Password</title>

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
					<h2 class="title-head">Forget <span>Password</span></h2>
					<p>Login Your Account <a href="login">Click here</a></p>
				</div>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.email') }}" class="contact-bx">
                        @csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
                                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
                            <x-button class="btn button-md">
                                {{ __('Email Password Reset Link') }}
                            </x-button>
							{{-- <button name="submit" type="submit" value="Submit" class="btn button-md">Submit</button> --}}
						</div>
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
