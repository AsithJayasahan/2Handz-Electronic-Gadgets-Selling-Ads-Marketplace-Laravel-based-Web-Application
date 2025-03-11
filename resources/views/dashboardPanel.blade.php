<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/"><img src="adminDashboard\dist\assets/images/logo.png"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="/"><img src="adminDashboard\dist\assets/images/logo.png"
                alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    {{-- <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="adminDashboard\dist\assets/images/faces/face15.jpg"
                            alt="">
                        <span class="count bg-success"></span>
                    </div> --}}
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                        <span>{{ auth()->user()->usertype }}</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                        class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-cog text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Profile</p>
                        </div>
                    </a>


                    <div class="dropdown-divider"></div>
                                           <!-- Log Out -->
                                           <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                    <a href="{{ route('logout') }}" class="dropdown-item preview-item" onclick="event.preventDefault(); this.closest('form').submit();">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                        </div>
                    </form>
                    </a>
                </div>
            </div>
        </li>






        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/dashboard">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/showUsers">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/showAds">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Ads</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="/postAds">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Post Ads</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/messages">
                <span class="menu-icon">
                    <i class="mdi mdi-message"></i>
                </span>
                <span class="menu-title">Messages</span>
            </a>
        </li>



    </ul>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="/"><img style="width: 30px;"
                    src="adminDashboard\dist\assets/images/logo-mini.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                    {{-- <form action="{{ route('search') }}" method="GET"> --}}
                    <form action="{{ route('search') }}" method="GET"
                        class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        <input type="text" class="form-control" placeholder="Search Ads">
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link btn btn-primary create-new-button" id="createbuttonDropdown" href="/postAds">+
                        Post New Ads</a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                        aria-labelledby="createbuttonDropdown">
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                        <div class="navbar-profile">

                            <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}</p>
                            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                    </a>


                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                        aria-labelledby="profileDropdown">
                        <h6 class="p-3 mb-0">Profile</h6>
                        <div class="dropdown-divider"></div>

                        <!-- Profile Link -->
                        <a class="dropdown-item preview-item" href="{{ route('profile.show') }}">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-account text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">{{ __('Profile') }}</p>
                            </div>
                        </a>

                        <!-- API Tokens Link (conditional) -->
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" href="{{ route('api-tokens.index') }}">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-key text-warning"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">{{ __('API Tokens') }}</p>
                                </div>
                            </a>
                        @endif

                        <div class="dropdown-divider"></div>

                        <!-- Log Out -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">{{ __('Log Out') }}</p>
                                </div>
                            </a>
                        </form>
                    </div>


                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </div>
    </nav>
