<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>2Handz-Contact Us</title>
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

    <link rel="stylesheet" href="adminDashboard\dist\assets/css/alertStyle.css">

       <!-- Importing font-awesome CDN for icons  -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
       integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('header')

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="container">
            <div class="page-header page-header-big text-center"
                style="background-image: url('assets/images/contact-header-bg.png')">
                <h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span>
                </h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <div class="page-content pb-0">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                        <p class="mb-2">Use the form below to get in touch with the our team</p>

                        <form action="{{ route('SendMessage') }}" class="contact-form mb-3" method="post">
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

                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </symbol>
                                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </symbol>
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>



                                <div class="col-sm-6">
                                    <label for="cname" class="sr-only">Name</label>
                                    <input type="text" class="form-control" id="cname"
                                        placeholder="Name *" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="form-text" style="color: red">{{ $message }}</small>
                                    @enderror
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label for="cemail" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="cemail"
                                        placeholder="Email *" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="form-text" style="color: red">{{ $message }}</small>
                                    @enderror
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="cphone" class="sr-only">Phone</label>
                                    <input type="tel" class="form-control" id="cphone"
                                        placeholder="Phone Number*" name="phoneNumber" value="{{ old('phoneNumber') }}">
                                    @error('phoneNumber')
                                        <small class="form-text" style="color: red">{{ $message }}</small>
                                    @enderror

                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label for="csubject" class="sr-only">Subject</label>
                                    <input type="text" class="form-control" id="csubject"
                                        placeholder="Subject*" name="subject" value="{{ old('subject') }}">
                                    @error('subject')
                                        <small class="form-text" style="color: red">{{ $message }}</small>
                                    @enderror
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label for="cmessage" class="sr-only">Message</label>
                            <textarea class="form-control" cols="30" rows="4" id="cmessage" placeholder="Message*" name="message"
                                value="{{ old('message') }}"></textarea>
                            @error('message')
                                <small class="form-text" style="color: red">{{ $message }}</small>
                            @enderror

                            <input type="submit" name="submit" id="submit"
                                class="btn btn-outline-primary-2 btn-minwidth-sm">



                        </form><!-- End .contact-form -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->




            </div><!-- End .container -->
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
</body>

</html>
