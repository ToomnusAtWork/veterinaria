@php
    $userRole = Auth::User()?->role()->first()->name;
@endphp
<nav x-data="{ open: false }" class="bg-purp-primary shadow shadow-purp-primary z-50 sticky top-0">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 sticky z-50">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
               @if(isset($mainLogoRoute))
                    @php
                        {{ $appMarkRoute = $mainLogoRoute;}}
                    @endphp
                @else
                    @php
                        {{ $appMarkRoute = route('dashboard'); }}
                    @endphp

               @endif
                <div class="shrink-0 flex items-center">
                    <a href="{{ $appMarkRoute }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        <svg width="24px" height="24px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.4816 14.79C16.4044 14.1496 16.1808 13.5356 15.8281 12.9956C15.4754 12.4556 15.003 12.004 14.4476 11.676C13.7112 11.2339 12.8685 11.0003 12.0096 11.0003C11.1507 11.0003 10.308 11.2339 9.5716 11.676C9.01621 12.004 8.54384 12.4556 8.1911 12.9956C7.83837 13.5356 7.61475 14.1496 7.5376 14.79C7.48943 15.1361 7.35883 15.4655 7.15679 15.7506C6.95475 16.0356 6.68717 16.268 6.3766 16.428C5.65544 16.8014 5.08938 17.4176 4.77833 18.1678C4.46729 18.9179 4.43126 19.7539 4.6766 20.528C4.86627 21.0934 5.19438 21.6022 5.63104 22.0083C6.06769 22.4144 6.59901 22.7048 7.1766 22.853C7.76773 23.0188 8.38931 23.0449 8.99224 22.9291C9.59517 22.8134 10.1629 22.559 10.6506 22.186C11.0413 21.8887 11.5187 21.7277 12.0096 21.7277C12.5005 21.7277 12.9779 21.8887 13.3686 22.186C13.8563 22.559 14.424 22.8134 15.027 22.9291C15.6299 23.0449 16.2515 23.0188 16.8426 22.853C17.4202 22.7048 17.9515 22.4144 18.3882 22.0083C18.8248 21.6022 19.1529 21.0934 19.3426 20.528C19.5879 19.7539 19.5519 18.9179 19.2409 18.1678C18.9298 17.4176 18.3638 16.8014 17.6426 16.428C17.332 16.268 17.0645 16.0356 16.8624 15.7506C16.6604 15.4655 16.5298 15.1361 16.4816 14.79V14.79Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.25977 8.75C9.50241 8.75 10.5098 7.40685 10.5098 5.75C10.5098 4.09315 9.50241 2.75 8.25977 2.75C7.01712 2.75 6.00977 4.09315 6.00977 5.75C6.00977 7.40685 7.01712 8.75 8.25977 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.00977 14.75C4.25241 14.75 5.25977 13.4069 5.25977 11.75C5.25977 10.0931 4.25241 8.75 3.00977 8.75C1.76712 8.75 0.759766 10.0931 0.759766 11.75C0.759766 13.4069 1.76712 14.75 3.00977 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.7598 8.75C17.0024 8.75 18.0098 7.40685 18.0098 5.75C18.0098 4.09315 17.0024 2.75 15.7598 2.75C14.5171 2.75 13.5098 4.09315 13.5098 5.75C13.5098 7.40685 14.5171 8.75 15.7598 8.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0098 14.75C22.2524 14.75 23.2598 13.4069 23.2598 11.75C23.2598 10.0931 22.2524 8.75 21.0098 8.75C19.7671 8.75 18.7598 10.0931 18.7598 11.75C18.7598 13.4069 19.7671 14.75 21.0098 14.75Z" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.00977 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.25977 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.7598 2.75V1.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0098 8.75V7.25" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{ __('Home') }}
                    </x-nav-link>

                   <!-- Navigation Links for cust facing web-->
                    <x-web.navlinks />
                </div>
            </div>

            <div class="hidden sm:flex space-x-5 sm:items-center sm:ml-6">

                <x-shopping-cart>
                    
                </x-shopping-cart>

                 <!-- Navigation Links form pages-->
                 @if (isset( $navlinks))
                    {{ $navlinks }}
                 @endif

                 <!-- Auth Navigation Links -->
                 @auth
                 <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                     {{ __('Dashboard') }}
                 </x-nav-link>
                 @else
                 <x-dropdown align="right" width="30">
                    <x-slot name="trigger">
                        <button type="button" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium text-black hover:text-white active:bg-white transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
                        </button>
                    </x-slot>
                    <x-slot name="content" width="30">
                        <div class="block px-4 py-2">
                            <a href="{{ route('login') }}" :active="request()->routeIs('login')">
                                {{ __('Login') }}
                            </a>
                        </div>
                        <div class="block px-4 py-2 ">
                            <a href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                            </a>
                        </div>
                    </x-slot>
                 </x-dropdown>
                 {{-- <x-primary-button href="{{ route('login') }}" :active="request()->routeIs('login')">
                     {{ __('Login') }}
                 </x-primary-button>
                <div class="Registry bg-blue-300 rounded-full">
                    <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
                        {{ __('Register') }}
                    </x-nav-link>
                </div> --}}
                
                 @endif

                 @auth
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center  px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        @endif
                                        <div class="ml-2">
                                            {{ Auth::user()->name }}
                                        </div>
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>

                        </x-slot>

                        <x-slot name="content">
                            @if($userRole == 'Customer')
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Shop') }}
                            </div>
                            <x-dropdown-link href="{{ route('cart') }}">
                                {{ __('Cart') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="">
                                {{ __('Booking') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="">
                                {{ __('My Appointments') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>
                            @endif
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            {{-- @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif --}}

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="black" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <div class="pt-2 pb-3 space-y-1">

            <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="#">
                {{ __('Services') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="#">
                {{ __('Products') }}
            </x-responsive-nav-link>



            @auth
            @if($userRole == 'Admin')
            <x-responsive-nav-link href="{{ route('manageusers') }}" :active="request()->routeIs('manageusers')">
                {{ __('Manage Users') }}
            </x-responsive-nav-link>
            @endif

            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            @else
            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                {{ __('Register') }}
            </x-responsive-nav-link>

            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-responsive-nav-link>
                        @endcan

                        <!-- Team Switcher -->
                        @if (Auth::user()->allTeams()->count() > 1)
                            <div class="border-t border-gray-200"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="responsive-nav-link" />
                            @endforeach
                        @endif
                    @endif
                </div>
            @endif
        </div>
    </div>
</nav>
