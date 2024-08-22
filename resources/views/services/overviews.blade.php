@extends('layouts.app', ['title' => 'Service'])
@section('content')
    <!-- Service banner section -->
    <div class="bg-service-banner w-full bg-cover bg-no-repeat min-h-screen">
        <div class="flex">
            <div class="absolute h-full inset-y-1/2">
                <h1 class="flex text-7xl sm:text-8xl sm:ml-32 ml-10 font-semibold text-black">บริการนัดคิว</h1>
            </div>
        </div>
    </div>

    <!-- Small tab section -->
    <div x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton) {
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton) {
            this.$refs.tabMarker.style.width = tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height = tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left = tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent) {
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        }
    }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="relative w-full">

        <div x-ref="tabButtons"
            class="relative flex items-center justify-between w-full h-16 p-1 text-gray-500 border-b bg-gray-100 rounded-lg select-none">
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                class="relative z-20 inline-flex items-center justify-center w-full h-full sm:px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap">Healthcare
                Treatment</button>
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                class="relative z-20 inline-flex items-center justify-center w-full h-full sm:px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap">Clinical
                Service</button>
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                class="relative z-20 inline-flex items-center justify-center w-full h-full sm:px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap">Find
                Veterinian</button>
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                class="relative z-20 inline-flex items-center justify-center w-full h-full sm:px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap">Fun
                Facts</button>
            <div x-ref="tabMarker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out" x-cloak>
                <div class="w-full h-full bg-white rounded-md shadow-sm"></div>
            </div>
        </div>
        <div class="relative w-full content">
            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative">
                <!-- Tab Content 1 - Healthcare Treatment -->
                <div class="border-x border-b shadow-sm text-neutral-900">
                    <div class="bg-cobberstone py-10">
                        <div x-data="{ isSettingsPanelOpen: false }">
                            {{-- <div>
                                <!-- Filter Panel -->
                                <div class="relative z-40 2xl:hidden" role="dialog" aria-modal="true">
                                    <div
                                        x-transition:enter="transition duration-300 ease-in-out"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition duration-300 ease-in-out"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        x-show="isSettingsPanelOpen"
                                        @click="isSettingsPanelOpen = false"
                                        class="fixed inset-0 z-10 bg-black bg-opacity-25"
                                        aria-hidden="true"
                                    ></div>
                    
                                    <!-- White Panel -->
                                    <section
                                        x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
                                        x-transition:enter-start="-translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="-translate-x-full"
                                        x-show="isSettingsPanelOpen"
                                        @keydown.escape="isSettingsPanelOpen = false"
                                        class="fixed inset-y-0 z-40 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
                                    >
                                        <div class="absolute right-0 p-2 transform translate-x-full">
                                            <!-- close button -->
                                            <button @click="isSettingsPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring"
                                                >
                                                    <span class="sr-only">Close menu</span>
                                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                            </button>
                                        </div>
                                        <h2 class="sr-only">Search panel</h2>
                                        <!-- Panel content -->
                                        <div class="flex flex-col h-screen">
                                            <!-- Panel header (Search input) -->
                                            <div
                                            class="relative flex-shrink-0 px-4 py-8 text-gray-400 border-b dark:border-primary-darker dark:focus-within:text-light focus-within:text-gray-700"
                                            >
                                            <span class="absolute inset-y-0 inline-flex items-center px-4">
                                                <svg
                                                class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                                />
                                                </svg>
                                            </span>
                                            <input
                                                x-ref="searchInput"
                                                type="text"
                                                class="w-full py-2 pl-10 pr-4 border rounded-full dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring"
                                                placeholder="Search..."
                                            />
                                            </div>
                    
                                            <!-- Panel content (Search result) -->
                                            <div class="flex-1 px-4 pb-4 space-y-4 overflow-y-hidden h hover:overflow-y-auto">
                                            <h3 class="py-2 text-sm font-semibold text-gray-600 dark:text-light">History</h3>
                                            <a href="#" class="flex space-x-4">
                                                <div class="flex-shrink-0">
                                                <img class="w-10 h-10 rounded-lg" src="build/images/cover.jpg" alt="Post cover" />
                                                </div>
                                                <div class="flex-1 max-w-xs overflow-hidden">
                                                <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Header</h4>
                                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                                    Lorem ipsum dolor, sit amet consectetur.
                                                </p>
                                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Post </span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex space-x-4">
                                                <div class="flex-shrink-0">
                                                <img class="w-10 h-10 rounded-lg" src="build/images/avatar.jpg" alt="Ahmed Kamel" />
                                                </div>
                                                <div class="flex-1 max-w-xs overflow-hidden">
                                                <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h4>
                                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                                    Last activity 3h ago.
                                                </p>
                                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Offline </span>
                                                </div>
                                            </a>
                                            <a href="#" class="flex space-x-4">
                                                <div class="flex-shrink-0">
                                                <img class="w-10 h-10 rounded-lg" src="build/images/cover-2.jpg" alt="K-WD Dashboard" />
                                                </div>
                                                <div class="flex-1 max-w-xs overflow-hidden">
                                                <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                                                <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                </p>
                                                <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Updated 3h ago. </span>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                    <section>
                                </div>
                            </div> --}}

                            <main class="mx-auto lg:max-w-7xl my-5 px-4 sm:px-6 lg:px-8 bg-white rounded-3xl">
                                {{-- Top section --}}
                                <section aria-labelledby="products-heading" class="pb-8 pt-6">
                                    <h2 id="products-heading" class="sr-only">Services</h2>
                                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                                        {{-- opening hour --}}
                                        <div class="hidden lg:block">
                                            <div class="m-4">
                                                <div class="flex flex-col">
                                                    <div class="">
                                                        <h1>Opening hour</h1>
                                                    </div>
                                                    <table class="mt-4">
                                                        <tr>
                                                            <td> Mon </td>
                                                            <td> 09:00 - 18:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td> Tue </td>
                                                            <td> 09:00 - 18:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td> Wed </td>
                                                            <td> 09:00 - 18:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td> Thru </td>
                                                            <td> 09:00 - 18:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td> Fri </td>
                                                            <td> 09:00 - 18:00</td>
                                                        </tr>
                                                        <tr>
                                                            <td> Sat </td>
                                                            <td> 09:00 - 18:00</td>
                                                        </tr>
                                                        <tr class="text-rose-400">
                                                            <td clas> Sun </td>
                                                            <td> Closed </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Product grid -->
                                        <div
                                            class="lg:col-span-3 flex flex-col flex-wrap gap-2  md:flex-row mt-3 pb-7 h-max ">
                                            <!-- Your content -->
                                            <div class="w-full">
                                                <div
                                                    class="flex items-baseline justify-between border-b border-gray-200 py-2">
                                                    <div class="w-1/3 float-right m-4">
                                                        <h1>Healthcare Treatment</h1>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div x-data="{ showSortMenu: false, selectedSort: 'Most Popular' }"
                                                            class="relative inline-block text-left">
                                                            <div>
                                                                <button @click=" showSortMenu =! showSortMenu"
                                                                    type="button"
                                                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                                                    id="menu-button" aria-expanded="false"
                                                                    aria-haspopup="true">
                                                                    <span x-text="selectedSort"></span>
                                                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                            <!--
                                                                              Dropdown menu, show/hide based on menu state.
                                                    
                                                                              Entering: "transition ease-out duration-100"
                                                                                From: "transform opacity-0 scale-95"
                                                                                To: "transform opacity-100 scale-100"
                                                                              Leaving: "transition ease-in duration-75"
                                                                                From: "transform opacity-100 scale-100"
                                                                                To: "transform opacity-0 scale-95"
                                                                            -->
                                                            <div x-cloak x-show="showSortMenu"
                                                                @click.away="showSortMenu = false"
                                                                class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                                role="menu" aria-orientation="vertical"
                                                                aria-labelledby="menu-button" tabindex="-1">
                                                                <div class="py-1" role="none" x-data="{ selectedIndex: 0 }">
                                                                    <!--
                                                                                      Active: "bg-gray-100", Not Active: ""
                                                    
                                                                                      Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                                                                    -->
                                                                    <a href="#"
                                                                        :class="(selectedIndex === 0) ?
                                                                        'font-medium text-gray-900' :
                                                                        'text-gray-500'"
                                                                        class="text-gray-500 block px-4 py-2 text-sm"
                                                                        role="menuitem" tabindex="-1" id="menu-item-0"
                                                                        wire:click.prevent='sortByMostPopular(Most_Popular)'
                                                                        @click="showSortMenu = false; selectedIndex = 0; selectedSort = 'Most Popular'
                                    
                                                                       ">Most
                                                                        Popular</a>
                                                                    <a href="#"
                                                                        :class="(selectedIndex === 1) ?
                                                                        'font-medium text-gray-900' :
                                                                        'text-gray-500'"
                                                                        class="text-gray-500 block px-4 py-2 text-sm"
                                                                        role="menuitem" tabindex="-1" id="menu-item-1"
                                                                        wire:click.prevent='sortByMostPopular("MostPopular")'
                                                                        @click="showSortMenu = false; selectedIndex = 1; selectedSort = 'Best Rating' ">Best
                                                                        Rating</a>
                                                                    <a href="#"
                                                                        :class="(selectedIndex === 2) ?
                                                                        'font-medium text-gray-900' :
                                                                        'text-gray-500'"
                                                                        class="text-gray-500 block px-4 py-2 text-sm"
                                                                        role="menuitem" tabindex="-1" id="menu-item-2"
                                                                        wire:click.prevent='sortByMostPopular("Newest")'
                                                                        @click="showSortMenu = false; selectedIndex = 2; selectedSort = 'Newest' ">Newest</a>
                                                                    <a href="#"
                                                                        :class="(selectedIndex === 3) ?
                                                                        'font-medium text-gray-900' :
                                                                        'text-gray-500'"
                                                                        class="text-gray-500 block px-4 py-2 text-sm"
                                                                        role="menuitem" tabindex="-1" id="menu-item-3"
                                                                        wire:click.prevent='sortByMostPopular("PriceLowToHigh")'
                                                                        @click="showSortMenu = false; selectedIndex = 3; selectedSort = 'Price: Low to High' ">Price:
                                                                        Low to High</a>
                                                                    <a href="#"
                                                                        :class="(selectedIndex === 4) ?
                                                                        'font-medium text-gray-900' :
                                                                        'text-gray-500'"
                                                                        class="text-gray-500 block px-4 py-2 text-sm"
                                                                        role="menuitem" tabindex="-1" id="menu-item-4"
                                                                        wire:click.prevent='sortByMostPopular("PriceHighToLow")'
                                                                        @click="showSortMenu = false; selectedIndex = 4; selectedSort = 'Price: High to Low' ">Price:
                                                                        High to Low</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="button"
                                                            class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                                                            <span class="sr-only">View grid</span>
                                                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        <button type="button"
                                                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                                            <span class="sr-only">Filters</span>
                                                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        {{-- <button x-on:click = "isSettingsPanelOpen=!isSettingsPanelOpen" type="button"
                                                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6">
                                                            <span aria-hidden="true">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                    <line x1="4" y1="21" x2="4" y2="14">
                                                                    </line>
                                                                    <line x1="4" y1="10" x2="4" y2="3">
                                                                    </line>
                                                                    <line x1="12" y1="21" x2="12" y2="12">
                                                                    </line>
                                                                    <line x1="12" y1="8" x2="12" y2="3">
                                                                    </line>
                                                                    <line x1="20" y1="21" x2="20" y2="16">
                                                                    </line>
                                                                    <line x1="20" y1="12" x2="20" y2="3">
                                                                    </line>
                                                                    <line x1="1" y1="14" x2="7" y2="14">
                                                                    </line>
                                                                    <line x1="9" y1="8" x2="15" y2="8">
                                                                    </line>
                                                                    <line x1="17" y1="16" x2="23" y2="16">
                                                                    </line>
                                                                </svg>
                                                            </span>
                                                        </button> --}}
                                                    </div>
                                                </div>


                                            </div>
                                            @foreach ($services as $service)
                                                @if ($service->is_hidden == false)
                                                    <x-service-card :service="$service" />
                                                @endif
                                            @endforeach
                                            <div class="w-full">
                                                <div class="flex justify-end mt-5 mx-2">
                                                    {{ $services->links() }}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </main>

                            {{-- Small Icon --}}
                            <div
                                class=" sm:hidden z-10 fixed right-0 rounded-full bottom-0 mr-5 mb-5 sm:mr-6 sm:mb-6 shadow-2xl">
                                <div
                                    class="flex items-center justify-center bg-teal-500 rounded-full opacity-75 p-3 sm:p-4">
                                    <svg class="fill-current text-gray-200 h-6 w-6 sm:h-10 sm:w-10"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                        <path
                                            d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                                    </svg>
                                </div>
                                <div class="absolute left-0 top-0 ml-3 mt-3 sm:ml-4 sm:mt-4">
                                    <div class="flex h-3 w-3">
                                        <span
                                            class="animate-ping absolute inline-flex h-2 w-2 sm:h-full sm:w-full rounded-full bg-pink-400 opacity-75"></span>
                                        <span
                                            class="relative inline-flex rounded-full h-2 w-2 sm:h-3 sm:w-3 bg-pink-500"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab Content 1 -->
            </div>

            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
                <!-- Tab Content 2 - Clinical Service -->
                <div class="border-x border-b shadow-sm bg-card text-neutral-900 relative pt-2 lg:pt-2 ">
                    <div class="w-full bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg">
                        <div class="w-full mx-auto rounded-2xl bg-white p-5 md:p-8 bg-opacity-40 backdrop-filter backdrop-blur-lg">
                            <div class="grid grid-cols-1 md:grid-cols-6 gap-4 text-center px-2 m-3">
                                <div class="col-span-3">
                                    <div class="pt-2 px-2 py-6 shadow items-center bg-cobberstone transition duration-300 group transform hover:shadow-md rounded-md cursor-pointer border">
                                        <div class="block mb-1">
                                            <label class="font-bold text-gray-700 flex">Select Appointment Location</label>
                                        </div>
                                        <x-services.locationselector/>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <div class="bg-cobberstone py-2 rounded-md">
                                        <x-services.datepicker/>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <button type="submit" class="flex px-10 py-4 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        search
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-8 gap-4 m-4">
                                <div class="col-span-2 border rounded-md">
                                    <h2 class="text-4xl mt-5 text-center font-bold uppercase ">Opening Hours</h2>
                                    <div class="border-t border-2 mx-2 border-purple-200"></div>
                                    <div class="flex flex-col">
                                        <table class="text-gray-700 mx-7 mt-4 text-lg uppercase " >
                                            <tr class="text-center">
                                                <td> Mon </td>
                                                <td> 09:00 - 18:00</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td> Tue </td>
                                                <td> 09:00 - 18:00</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td> Wed </td>
                                                <td> 09:00 - 18:00</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td> Thru </td>
                                                <td> 09:00 - 18:00</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td> Fri </td>
                                                <td> 09:00 - 18:00</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td> Sat </td>
                                                <td> 09:00 - 18:00</td>
                                            </tr>
                                            <tr class="text-rose-400 text-center">
                                                <td clas> Sun </td>
                                                <td> Closed </td>
                                            </tr>
                                        </table>
                                    </div>
                                    
                                </div>
                                <div class="col-span-6 border rounded-md">
                                    <div class="relative flex flex-col bg-clip-border rounded-xl text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                                        <div class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                                          <div>
                                            <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">Projects</h6>
                                            <p class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                              </svg>
                                              <strong>30 done</strong> this month
                                            </p>
                                          </div>
                                          <button aria-expanded="false" aria-haspopup="menu" id=":r5:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
                                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path>
                                              </svg>
                                            </span>
                                          </button>
                                        </div>
                                        <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                                          <table class="w-full min-w-[640px] table-auto">
                                            <thead>
                                              <tr>
                                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                                  <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">companies</p>
                                                </th>
                                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                                  <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">budget</p>
                                                </th>
                                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                                  <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">completion</p>
                                                </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="flex items-center gap-4">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Material XD Version</p>
                                                  </div>
                                                </td>
                                                
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$14,000</p>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="w-10/12">
                                                    <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">60%</p>
                                                    <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                      <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 60%;"></div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="flex items-center gap-4">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add Progress Track</p>
                                                  </div>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$3,000</p>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="w-10/12">
                                                    <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">10%</p>
                                                    <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                      <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 10%;"></div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="flex items-center gap-4">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Fix Platform Errors</p>
                                                  </div>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">Not set</p>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="w-10/12">
                                                    <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                                                    <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                      <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="flex items-center gap-4">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Launch our Mobile App</p>
                                                  </div>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$20,500</p>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="w-10/12">
                                                    <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                                                    <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                      <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="flex items-center gap-4">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add the New Pricing Page</p>
                                                  </div>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$500</p>
                                                </td>
                                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                                  <div class="w-10/12">
                                                    <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">25%</p>
                                                    <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                      <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 25%;"></div>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            {{-- <div
                                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2 mx-auto">

                                <article
                                    class="bg-white  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                    <a target="_self" href="/blog/slug"
                                        class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                    <div class="relative mb-4 rounded-2xl">
                                        <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                            src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                            alt="">
                                        <div
                                            class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-5 w-5 text-red-700">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                            <span class="ml-1 text-sm text-slate-400">2</span>

                                        </div>

                                        <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                            href="/blog/slug" target="_self" rel="noopener noreferrer">
                                            Read article
                                            <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                        <div class="flex items-center">
                                            <div class="pr-3">
                                                <img class="h-12 w-12 rounded-full object-cover"
                                                    src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                    alt="">
                                            </div>
                                            <div class="flex flex-1">
                                                <div class="">
                                                    <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                    <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <div class="text-sm flex items-center text-gray-500 ">
                                                2 Days ago
                                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="font-medium text-xl leading-8">
                                        <a href="/blog/slug"
                                            class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                            Instant Help at Your Fingertips
                                        </a>
                                    </h3>
                                    <div>
                                    </div>
                                </article>

                            </div> --}}

                        </div>
                    </div>
            </div>
                <!-- End Tab Content 2 -->
            </div>

            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
                <!-- Tab Content 3 - Clinical Service -->
                <div class="border-x border-b shadow-sm bg-card text-neutral-900">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="text-lg font-semibold leading-none tracking-tight">Clinical Service</h3>
                        <p class="text-sm text-neutral-500">Change your password here. After saving, you'll be logged out.
                        </p>
                    </div>
                    <div class="p-6 pt-0 space-y-2">
                        <div class="space-y-1"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="password">Current Password</label><input type="password"
                                placeholder="Current Password" id="password"
                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md peer border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
                        </div>
                        <div class="space-y-1"><label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="password_new">New Password</label><input type="password" placeholder="New Password"
                                id="password_new"
                                class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
                        </div>
                    </div>
                    <div class="flex items-center p-6 pt-0"><button type="button"
                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">Save
                            password</button></div>
                </div>
                <!-- End Tab Content 3 -->
            </div>

            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
                <!-- Tab Content 4 - Clinical Service -->
                <div class="border-x border-b shadow-sm bg-card text-neutral-900 relative pt-2 lg:pt-2 min-h-screen">
                    <div class="bg-cover w-full flex justify-center items-center"
                        style="background-image: url('/images/mybackground.jpeg');">
                        <div class="w-full bg-white p-5  bg-opacity-40 backdrop-filter backdrop-blur-lg">
                            <div
                                class="w-12/12 mx-auto rounded-2xl bg-white p-5 bg-opacity-40 backdrop-filter backdrop-blur-lg">
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2 mx-auto">
                                    <article
                                        class="bg-white  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                        <a target="_self" href="/blog/slug"
                                            class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                        <div class="relative mb-4 rounded-2xl">
                                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                                src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="">
                                            <div
                                                class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-5 w-5 text-red-700">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                                <span class="ml-1 text-sm text-slate-400">2</span>

                                            </div>

                                            <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                                href="/blog/slug" target="_self" rel="noopener noreferrer">
                                                Read article
                                                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                            <div class="flex items-center">
                                                <div class="pr-3">
                                                    <img class="h-12 w-12 rounded-full object-cover"
                                                        src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                        alt="">
                                                </div>
                                                <div class="flex flex-1">
                                                    <div class="">
                                                        <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                        <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-end">
                                                <div class="text-sm flex items-center text-gray-500 ">
                                                    2 Days ago
                                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="font-medium text-xl leading-8">
                                            <a href="/blog/slug"
                                                class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                                Instant Help at Your Fingertips
                                            </a>
                                        </h3>
                                        <div>
                                        </div>
                                    </article>

                                    <article
                                        class="bg-white  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                        <a target="_self" href="/blog/slug"
                                            class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                        <div class="relative mb-4 rounded-2xl">
                                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                                src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="">
                                            <div
                                                class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-5 w-5 text-red-700">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                                <span class="ml-1 text-sm text-slate-400">2</span>

                                            </div>

                                            <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                                href="/blog/slug" target="_self" rel="noopener noreferrer">
                                                Read article
                                                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                            <div class="flex items-center">
                                                <div class="pr-3">
                                                    <img class="h-12 w-12 rounded-full object-cover"
                                                        src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                        alt="">
                                                </div>
                                                <div class="flex flex-1">
                                                    <div class="">
                                                        <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                        <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-end">
                                                <div class="text-sm flex items-center text-gray-500 ">
                                                    2 Days ago
                                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="font-medium text-xl leading-8">
                                            <a href="/blog/slug"
                                                class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                                Instant Help at Your Fingertips
                                            </a>
                                        </h3>
                                        <div>
                                        </div>
                                    </article>


                                    <article
                                        class="bg-white  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                        <a target="_self" href="/blog/slug"
                                            class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                        <div class="relative mb-4 rounded-2xl">
                                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                                src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="">
                                            <div
                                                class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-5 w-5 text-red-700">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                                <span class="ml-1 text-sm text-slate-400">2</span>

                                            </div>

                                            <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                                href="/blog/slug" target="_self" rel="noopener noreferrer">
                                                Read article
                                                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                            <div class="flex items-center">
                                                <div class="pr-3">
                                                    <img class="h-12 w-12 rounded-full object-cover"
                                                        src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                        alt="">
                                                </div>
                                                <div class="flex flex-1">
                                                    <div class="">
                                                        <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                        <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-end">
                                                <div class="text-sm flex items-center text-gray-500 ">
                                                    2 Days ago
                                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="font-medium text-xl leading-8">
                                            <a href="/blog/slug"
                                                class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                                Instant Help at Your Fingertips
                                            </a>
                                        </h3>
                                        <div>
                                        </div>
                                    </article>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Tab Content 4 -->
            </div>

        </div>
    </div>
@endsection
