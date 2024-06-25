<x-urgent-banner />
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