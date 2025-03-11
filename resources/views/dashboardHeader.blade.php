<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&display=swap');

        .custom-navbar {
            background-color: #E9EAEC;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
            /* Set a base font size for the navbar */
        }

        .navbar .navbar-brand img {
            height: 20px;
            /* Adjust the height of the logo as needed */
        }

        .navbar-nav .nav-item .nav-link {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            font-family: 'Open Sans', sans-serif;
            color: black;
            transition: color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #39f;
            /* Hover color */
        }

        .dropdown-menu {
            font-size: 13px;
            /* Ensure dropdown menus have the same font size */
        }

        .dropdown-item:hover {
            color: #39f;
            /* Hover color */
        }

        .dropdown-item {
            font-size: 13px;
            /* Ensure dropdown items have the same font size */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <a href="/" class="navbar-brand">
            <img src="assets/images/demos/demo-4/logo.png" alt="Molla Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth
                    <!-- Profile Dropdown -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}">
                            @else
                                {{ Auth::user()->name }}
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                            <!-- Account Management -->
                            <a class="dropdown-item" href="{{ route('userProfile') }}">{{ __('Profile') }}</a>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <a class="dropdown-item" href="{{ route('api-tokens.index') }}">{{ __('API Tokens') }}</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    </li>

                    <!-- Team Dropdown (if applicable) -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="teamDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->currentTeam->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="teamDropdown">
                                <!-- Team Management -->
                                <a class="dropdown-item"
                                    href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">{{ __('Team Settings') }}</a>
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <a class="dropdown-item"
                                        href="{{ route('teams.create') }}">{{ __('Create New Team') }}</a>
                                @endcan
                                <div class="dropdown-divider"></div>
                                <!-- Team Switcher -->
                                @if (Auth::user()->allTeams()->count() > 1)
                                    <div class="dropdown-header">{{ __('Switch Teams') }}</div>
                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-switchable-team :team="$team" />
                                    @endforeach
                                @endif
                            </div>
                        </li>
                    @endif
                @endauth


            </ul>
        </div>
    </nav>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
