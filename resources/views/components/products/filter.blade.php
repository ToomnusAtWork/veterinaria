<div class="flex items-center">
    <div x-data="{ showSortMenu: false, selectedSort: '' }" 
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
                <a 
                    href="{{ route('product', ['filter' => 'aphabetical']) . '#products' }}"
                   aria-current="{{ $selectedFilter === 'aphabetical' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'aphabetical' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    @click="selectedSort = 'aphabetical order'; showSortMenu = false;" 
                    value="2"
                >
                    Aphabetical Order
                </a>
                <a 
                href="{{ route('product', ['filter' => 'recent']) . '#products' }}"
                    aria-current="{{ $selectedFilter === 'recent' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'recent' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    @click="selectedSort = 'Most Recent'; showSortMenu = false; "
                >
                    Newest
                </a>
                <a 
                    href="{{ route('product', ['filter' => 'popular ']) . '#products' }}"
                   aria-current="{{ $selectedFilter === 'popular ' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'popular ' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    @click="selectedSort = 'Popular'; showSortMenu = false;" 
                    value="2"
                >
                    Most Popular 
                </a>
                <a 
                href="{{ route('product', ['filter' => 'priceLowToHigh']) . '#products' }}"
                    aria-current="{{ $selectedFilter === 'priceLowToHigh' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'priceLowToHigh' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    @click="selectedSort = 'Price:Low to High'; showSortMenu = false; "
                >
                    Price: Low to High
                </a>
                <a 
                href="{{ route('product', ['filter' => 'priceHighToLow']) . '#products' }}"
                    aria-current="{{ $selectedFilter === 'priceHighToLow' ? 'page' : 'false' }}"
                    class="block px-4 py-2 text-sm {{ $selectedFilter === 'priceHighToLow' ? 'font-medium text-gray-900 hover:bg-gray-100' : 'text-gray-500 hover:bg-gray-100' }}" 
                    @click="selectedSort = 'Price:High to Low'; showSortMenu = false; "
                >
                    Price: High to Low
                </a>
            </div>
        </div>
    </div>
</div>