@props(['title' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? $title.' | ' : '' }} 
            {{ config('app.name', 'Laravel') }}
        </title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favcon.ico') }}">
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-kanit bg-white antialiased">

        @yield('content')

        
        @stack('app')

        @livewireScripts
    </body>
</html>
