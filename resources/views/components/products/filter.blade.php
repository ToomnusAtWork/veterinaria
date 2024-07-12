<div class="flex items-center">
    <div x-data="{ showSortMenu: false, selectedSort: false }" 
        class="relative inline-block text-left">
        <button @click=" showSortMenu =! showSortMenu" type="button"
            class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
            id="menu-button" aria-expanded="false" aria-haspopup="true">
            <span x-text="selectedSort === '' ? 'Sort By' : selectedSort"></span>
            <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="showSortMenu" @click.away="showSortMenu = false"
            class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
            tabindex="-1"
            x-cloak>
            <div class="py-1">
                <a  href="{{ route('products', ['filter' => 'popular']) . '#products' }}"
                    aria-current="{{ $selectedFilter === 'popular' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'popular' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    x-on:click="selectedSort = 'Most Popular'; showSortMenu = false;" 
                    :selectedSort='Most Popular';
                    value="1"
                >
                    Most Popular
                </a>
                <a href="{{ route('products', ['filter' => 'rating']) . '#products' }}"
                   aria-current="{{ $selectedFilter === 'rating' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'rating' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    x-on:click="selectedSort = 'Best Rating'; showSortMenu = false;" 
                    value="2"
                    :selectedSort='Most Popular';
                >
                    Best Rating
                </a>
                <a href="{{ route('products', ['filter' => 'recent']) . '#products' }}"
                    aria-current="{{ $selectedFilter === 'recent' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'recent' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    @click="selectedSort = 'Most Recent'; showSortMenu = false;"
                    value="3"
                >
                Newest</a>
                {{-- <a href="#"
                    :class="(selectedIndex === 3) ? 'font-medium text-gray-900' : 'text-gray-500'"
                    class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                    tabindex="-1" id="menu-item-3"
                    wire:click.prevent='sortByMostPopular("PriceLowToHigh")'
                    @click="showSortMenu = false; selectedIndex = 3; selectedSort = 'Price: Low to High';">Price:
                    Low to High
                </a>
                <a href="#"
                    :class="(selectedIndex === 4) ? 'font-medium text-gray-900' : 'text-gray-500'"
                    class="text-gray-500 block px-4 py-2 text-sm" role="menuitem"
                    tabindex="-1" id="menu-item-4"
                    wire:click.prevent='sortByMostPopular("PriceHighToLow")'
                    @click="showSortMenu = false; selectedIndex = 4; selectedSort = 'Price: High to Low';">
                    Price:High to Low</a> --}}
            </div>
        </div>
    </div>
</div>