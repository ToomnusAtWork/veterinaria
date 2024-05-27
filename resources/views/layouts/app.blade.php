<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favcon.ico') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-REM antialiased">
        <x-banner />

        <div class="min-h-screen bg-white">
            <x-navigation-menu>
                
                <!-- Pass the main logo from page to the nav menu component-->
                <x-slot name="mainLogoRoute">
                    @isset($mainLogoRoute)
                        {{ $mainLogoRoute }}
                    @endisset
                </x-slot>

                <!-- Pass the nav links from page to the nav menu component-->
                <x-slot name="navlinks">
                    @isset($navlinks)
                        {{ $navlinks }}             
                    @endif
            </x-slot>
            </x-navigation-menu>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
