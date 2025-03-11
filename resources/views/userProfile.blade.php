

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile-2Handz</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include('dashboardHeader')

<x-app-layout>

            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" style="text-decoration: none">Home</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard" style="text-decoration: none">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#">Shop</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </div><!-- End .container -->

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

                {{-- <x-section-border /> --}}
            @endif

            {{-- @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif --}}

            {{-- <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div> --}}

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                {{-- <x-section-border /> --}}

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>










