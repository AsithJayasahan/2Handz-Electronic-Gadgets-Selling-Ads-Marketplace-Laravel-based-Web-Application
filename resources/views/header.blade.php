<div class="page-wrapper">
    <header class="header header-intro-clearance header-4">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <a href="tel:#"><i class="icon-phone"></i>Call: +094 129 6467</a>
                </div><!-- End .header-left -->

                <div class="header-right">

                    <ul class="top-menu">
                        <li>
                            <a href="#">Menu</a>
                            <ul>
                                <li>
                                    <div class="header-dropdown">
                                        @if (Route::has('login'))
                                            <nav class="-mx-3 flex flex-1 justify-end">
                                                @auth
                                    <li>
                                        <a href="{{ url('/dashboard') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            Dashboard
                                        </a>


                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            Sign Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            Sign In
                                        </a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                                Sign Up
                                            </a>
                                    </li>
                                    @endif
                                @endauth
                                </nav>
                                @endif

                            </ul>
                        </li>

                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->

            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>

                    <a href="/" class="logo">
                        <img src="/assets/images/demos/demo-4/logo.png"width="150" height="83">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-center">
                    <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="{{ route('search') }}" method="GET">
                            <div class="header-search-wrapper search-wrapper-wide">
                                <label for="q" class="sr-only">Search</label>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                <input type="search" class="form-control" name="search" id="q"
                                    placeholder="Search Ads ..." required>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->
                </div>

                <div class="header-right">
                    <div class="dropdown compare-dropdown">
                        <ul>
                            <li style="padding-top: 20px">
                                <input type="button" class="btn btn-primary" name="addPostBtn" id="addPostBtn"
                                value="Add Post">
                            </li>
                        </ul>




                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var addPostBtn = document.getElementById('addPostBtn');
                                addPostBtn.addEventListener('click', function() {
                                    if (isLoggedIn()) {
                                        window.location.href = '/dashboard'; // Redirect to dashboard if logged in
                                    } else {
                                        window.location.href = '/login'; // Redirect to login page if not logged in
                                    }
                                });

                                // Function to check if the user is logged in (you need to implement this logic)
                                function isLoggedIn() {
                                    // You can implement this function using your preferred authentication method
                                    // For example, you can check if a user session exists or if there's a token in local storage
                                    // Return true if the user is logged in, false otherwise
                                }
                            });
                        </script>

    </header><!-- End .header -->
