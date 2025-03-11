<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile-2Handz</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">

    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminDashboard/dist/assets/css/style.css">


</head>

<body>
    <x-app-layout>
        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
                <div class="col-md-12 p-0 m-0">
                </div>
            </div>
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                    <a class="sidebar-brand brand-logo" href="/"><img src="/adminDashboard/dist/assets/images/logo.svg" alt="logo" /></a>
                    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/adminDashboard/dist/assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <ul class="nav">
                    <li class="nav-item profile">
                        <div class="profile-desc">
                            <div class="profile-pic">
                                <div class="count-indicator">
                                    <img class="img-xs rounded-circle" src="/adminDashboard/dist/assets/images/faces/face15.jpg" alt="">
                                    <span class="count bg-success"></span>
                                </div>
                                <div class="profile-name">
                                    <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                                    <span>{{ auth()->user()->usertype }}</span>
                                </div>
                            </div>
                            <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-cog text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-onepassword text-info"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-calendar-today text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                    </div>
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
                </ul>
            </nav>
            <div class="container-fluid page-body-wrapper">
                <nav class="navbar p-0 fixed-top d-flex flex-row">
                    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/adminDashboard/dist/assets/images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                            <span class="mdi mdi-menu"></span>
                        </button>
                        <ul class="navbar-nav w-100">
                            <li class="nav-item w-100">
                                <form action="{{ route('search') }}" method="GET" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                    <input type="text" class="form-control" placeholder="Search Ads">
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown d-none d-lg-block">
                                <a class="nav-link btn btn-primary create-new-button" id="createbuttonDropdown" href="/postAds">+ Post New Ads</a>
                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                    <div class="navbar-profile">
                                        <img class="img-xs rounded-circle" src="/adminDashboard/dist/assets/images/faces/face15.jpg" alt="">
                                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}</p>
                                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                    <h6 class="p-3 mb-0">Profile</h6>
                                    <div class="dropdown-divider"></div>
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
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item preview-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
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
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                            <span class="mdi mdi-format-line-spacing"></span>
                        </button>
                    </div>
                </nav>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Users Profile</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                                            @livewire('profile.update-profile-information-form')
                                                            <x-section-border />
                                                        @endif
                                                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                                            <div class="mt-10 sm:mt-0">
                                                                @livewire('profile.update-password-form')
                                                            </div>
                                                            <x-section-border />
                                                        @endif
                                                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                                                            <div class="mt-10 sm:mt-0">
                                                                @livewire('profile.delete-user-form')
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a
                                    href="/" target="_blank">2Handz</a>. All rights
                                reserved.</span>

                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="/adminDashboard/dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/adminDashboard/dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="/adminDashboard/dist/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/adminDashboard/dist/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/adminDashboard/dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/adminDashboard/dist/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="/adminDashboard/dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/adminDashboard/dist/assets/js/off-canvas.js"></script>
    <script src="/adminDashboard/dist/assets/js/misc.js"></script>
    <script src="/adminDashboard/dist/assets/js/settings.js"></script>
    <script src="/adminDashboard/dist/assets/js/todolist.js"></script>
    <script src="/adminDashboard/dist/assets/js/proBanner.js"></script>
    <script src="/adminDashboard/dist/assets/js/dashboard.js"></script>
</body>

</html>
