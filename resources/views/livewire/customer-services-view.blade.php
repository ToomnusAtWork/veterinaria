<div class="bg-white">
    <div>
        <!--
          Mobile filter dialog

          Off-canvas filters for mobile, show/hide based on off-canvas filters state.
        -->
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
              Off-canvas menu backdrop, show/hide based on off-canvas menu state.

              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div x-show="isSettingsPanelOpen"
                 class="fixed inset-0 bg-black bg-opacity-25"
                 @click="isSettingsPanelOpen = false"
                 aria-hidden="true">
            </div>
            <div class="fixed inset-0 z-40 flex">
                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "translate-x-full"
                -->
                {{-- <div
                    class="relative mr-auto mt-16 flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button
                            @click="isSettingsPanelOpen = False"
                            class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400"
                            >
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    
                </div> --}}
            </div>
        </div>

        <div class="bg-black max-w-screen relative py-24">
            <img src="{{ asset('images/company/banner.png') }}" alt="banner_image" class="absolute inset-0 w-full h-full object-cover shadow-xl">
            <div class="relative inset-y-1/2">
                <h1 class="flex text-4xl font-bold justify-center text-blue-700">Services</h1>
            </div>
        </div>

        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            {{-- Top section --}}
            <section aria-labelledby="products-heading" class="pb-8 pt-6">
                <h2 id="products-heading" class="sr-only">Services</h2>

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Filters -->
                    <form class="hidden lg:block">
                        <div class="m-4">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                            <div class="relative grid grid-cols-5 gap-2">
                                <input type="search" wire:model="search" id="default-search" name="search"
                                       class="block col-span-4 p-2 pl-4 text-sm text-gray-900 border-2 border-gray-100 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="Search Services...">
                                <button type="submit"
                                    class="text-white relative bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                                    <svg class="w-4 h-4 text-white dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                               </button>
                            </div>

                        </div>
                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-1" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Category</span>
                                    <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path
                                          d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"/>
                                    </svg>
                                                        <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd"/>
                                    </svg>
                                  </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-1">
                                <div class="space-y-4">
                                    @foreach($categories as $category)
                                        <div class="flex items-center">
                                            <input id="filter-category-{{ $category->id }}" wire:model="categoryFilter" value="{{ $category->id }}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-{{ $category->id }}" class="ml-3 text-sm text-gray-600">{{ $category->name }}</label>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-2" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Treatment Center</span>
                                    <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path
                                          d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"/>
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd"/>
                                    </svg>
                                  </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->

                        </div>
                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-2" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Filter by Price</span>
                                    <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path
                                          d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"/>
                                    </svg>
                                                        <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd"/>
                                    </svg>
                                  </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->

                        </div>
                    </form>

                    <!-- Product grid -->
                    <div class="lg:col-span-3 flex flex-col flex-wrap gap-2 border-l  md:flex-row mt-3 pb-7 h-max ">
                        <!-- Your content -->
                        <div class="w-full">
                            {{-- <div class="flex justify-end mt-5 mx-2">
                                {{ $services->links() }}
                            </div> --}}

                            <div class="flex items-baseline justify-between border-b border-gray-200 py-2">
                                <div class="w-1/3 float-right m-4">
                                    <h1>Medical Services</h1>
                                </div>
                                <div class="flex items-center">
                                    <div x-data="{ showSortMenu:false, selectedSort:'Most Popular' }"
                                         class="relative inline-block text-left">
                                        <div>
                                            <button @click=" showSortMenu =! showSortMenu" type="button"
                                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                                    id="menu-button" aria-expanded="false" aria-haspopup="true">
                                                <span x-text="selectedSort"></span>
                                                <svg
                                                    class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                          clip-rule="evenodd"/>
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
                                        <div x-cloak x-show="showSortMenu" @click.away="showSortMenu = false"
                                             class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                             role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div class="py-1" role="none" x-data="{ selectedIndex:0 }">
                                                <!--
                                                  Active: "bg-gray-100", Not Active: ""
                
                                                  Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                                -->
                                                <a href="#"
                                                   :class="( selectedIndex === 0) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                   class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                   id="menu-item-0"
                                                   wire:click.prevent='sortByMostPopular(Most_Popular)'
                                                   @click="showSortMenu = false; selectedIndex = 0; selectedSort = 'Most Popular'
                
                                                   ">Most
                                                    Popular</a>
                                                <a href="#"
                                                   :class="( selectedIndex === 1) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                   class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                   id="menu-item-1"
                                                   wire:click.prevent='sortByMostPopular("MostPopular")'
                                                   @click="showSortMenu = false; selectedIndex = 1; selectedSort = 'Best Rating' ">Best
                                                    Rating</a>
                                                <a href="#"
                                                   :class="( selectedIndex === 2) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                   class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                   id="menu-item-2"
                                                   wire:click.prevent='sortByMostPopular("Newest")'
                                                   @click="showSortMenu = false; selectedIndex = 2; selectedSort = 'Newest' ">Newest</a>
                                                <a href="#"
                                                   :class="( selectedIndex === 3) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                   class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                   id="menu-item-3"
                                                   wire:click.prevent='sortByMostPopular("PriceLowToHigh")'
                                                   @click="showSortMenu = false; selectedIndex = 3; selectedSort = 'Price: Low to High' ">Price:
                                                    Low to High</a>
                                                <a href="#"
                                                   :class="( selectedIndex === 4) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                   class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                                   id="menu-item-4"
                                                   wire:click.prevent='sortByMostPopular("PriceHighToLow")'
                                                   @click="showSortMenu = false; selectedIndex = 4; selectedSort = 'Price: High to Low' ">Price:
                                                    High to Low</a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                                        <span class="sr-only">View grid</span>
                                        <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                        <span class="sr-only">Filters</span>
                                        <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                


                        </div>
                        @foreach ($services as $service)
                            @if($service->is_hidden == false)
                                <x-service-card :service="$service"/>
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
    </div>
</div>



 {{-- <button
                            @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                            class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
                            :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'"
                            >
                            <span class="sr-only">Toggle sidebar</span>
                            <svg
                                aria-hidden="true"
                                class="w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </button> --}}
