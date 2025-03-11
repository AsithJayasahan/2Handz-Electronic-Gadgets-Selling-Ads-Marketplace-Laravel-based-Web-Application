<footer class="footer">

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="widget widget-about">
                        <img src="/assets/images/demos/demo-4/logo-footer.png" class="footer-logo" alt="Footer Logo"
                            width="105" height="25">
                        <p>
                            Welcome to 2Handz, your ultimate destination for buying and selling laptops, computers,
                            smartphones, and accessories. We provide a platform where you can post free advertisements
                            for all your tech needs. </p>

                        <div class="widget-call">
                            <i class="icon-phone"></i>
                            Got Question? Call us 24/7
                            <a href="tel:#">+94 77 1296 467</a>
                        </div><!-- End .widget-call -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->


                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Our Categories</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{ route('computers', ['category' => 'Computer']) }}" >Computer & Laptop</a></li>
                            <li><a href="{{ route('smartphones', ['category' => 'Smartphone']) }}">Smart Phones</a></li>
                            <li><a href="{{ route('tablets', ['category' => 'Tablet']) }}" ">Tablets</a></li>
                            <li><a href="{{ route('ComputerAccessories', ['category' => 'ComputerAccessories']) }}">Computer Accessories</a></li>
                            <li><a href="{{ route('MobileAccessories', ['category' => 'MobileAccessories']) }}">Mobile Accessories</a></li>
                            <li><a href="{{ route('digitalCameras', ['category' => 'DigitalCameras']) }}">Digital Cameras</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="login">Sign In</a></li>
                            <li><a href="register">Sign Up</a></li>
                            <li><a href="about">About 2Handz</a></li>
                            <li><a href="contact">Contact us</a></li>
                            <li><a href="#services">Our Services</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © 2024 2Handz. All Rights Reserved.</p>
            <!-- End .footer-copyright -->

        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="{{ route('search') }}" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>


        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab"
                    role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab"
                    aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                aria-labelledby="mobile-menu-link">
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="login">Sign In</a>
                        </li>
                        <li>
                            <a href="register">Sign Up</a>
                        </li>
                        <li>
                            <a href="about">About 2Handz</a>
                        </li>
                        <li>
                            <a href="contact" class="sf-with-ul">Contact Us</a>
                        </li>


                </nav><!-- End .mobile-nav -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                <nav class="mobile-cats-nav">
                    <ul class="mobile-cats-menu">
                        {{-- <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                        <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li> --}}
                        <li><a href="{{ route('computers', ['category' => 'Computer']) }}">Computer & Laptop</a></li>
                        <li><a href="{{ route('smartphones', ['category' => 'Smartphone']) }}">Smart Phones</a></li>
                        <li><a href="{{ route('tablets', ['category' => 'Tablet']) }}">Tablets</a></li>
                        <li><a href="{{ route('ComputerAccessories', ['category' => 'ComputerAccessories']) }}">Computer Accessories</a></li>
                        <li><a href="{{ route('MobileAccessories', ['category' => 'MobileAccessories']) }}">Mobile Accessories</a></li>
                        <li><a href="{{ route('digitalCameras', ['category' => 'DigitalCameras']) }}">Digital Cameras </a></li>
                    </ul><!-- End .mobile-cats-menu -->
                </nav><!-- End .mobile-cats-nav -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                    class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                    class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
