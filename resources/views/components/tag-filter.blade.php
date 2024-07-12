@props([
    'activeTag',
    'tags',
    'filter',
    'route',
    'cancelRoute',
    'jumpTo',
])

<div class="flex items-center">
                                <div x-data="{ showSortMenu: false, selectedSort: 'Most Popular' }" class="relative inline-block text-left">
                                    <div>
                                        <button @click=" showSortMenu =! showSortMenu" type="button"
                                            class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                            id="menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span x-text="selectedSort"></span>
                                            <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                    <div x-cloak x-show="showSortMenu" @click.away="showSortMenu = false"
                                        class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                        tabindex="-1">
                                        <div class="py-1" role="none" x-data="{ selectedIndex: 0 }">
                                            <!--
                                      Active: "bg-gray-100", Not Active: ""
        
                                      Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                    -->
                                            <a href="#"
                                                :class="(selectedIndex === 0) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-0"
                                                wire:click.prevent='sortByMostPopular(Most_Popular)'
                                                @click="showSortMenu = false; selectedIndex = 0; selectedSort = 'Most Popular'
        
                                       ">Most
                                                Popular</a>
                                            <a href="#"
                                                :class="(selectedIndex === 1) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-1"
                                                wire:click.prevent='sortByMostPopular("MostPopular")'
                                                @click="showSortMenu = false; selectedIndex = 1; selectedSort = 'Best Rating' ">Best
                                                Rating</a>
                                            <a href="#"
                                                :class="(selectedIndex === 2) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-2"
                                                wire:click.prevent='sortByMostPopular("Newest")'
                                                @click="showSortMenu = false; selectedIndex = 2; selectedSort = 'Newest' ">Newest</a>
                                            <a href="#"
                                                :class="(selectedIndex === 3) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-3"
                                                wire:click.prevent='sortByMostPopular("PriceLowToHigh")'
                                                @click="showSortMenu = false; selectedIndex = 3; selectedSort = 'Price: Low to High' ">Price:
                                                Low to High</a>
                                            <a href="#"
                                                :class="(selectedIndex === 4) ? 'font-medium text-gray-900' : 'text-gray-500'"
                                                class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                                                tabindex="-1" id="menu-item-4"
                                                wire:click.prevent='sortByMostPopular("PriceHighToLow")'
                                                @click="showSortMenu = false; selectedIndex = 4; selectedSort = 'Price: High to Low' ">Price:
                                                High to Low</a>
                                        </div>
                                    </div>
                                </div>

                                <button type="button"
                                    class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                                    <span class="sr-only">View grid</span>
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                    <span class="sr-only">Filters</span>
                                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>