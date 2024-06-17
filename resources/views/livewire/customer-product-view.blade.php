<x-app-layout>
    @include('layouts.page-navigation')
    <div class="bg-[url('/public/images/company/banner2.png')] w-full bg-cover bg-no-repeat min-h-screen">
        {{-- <img src="{{ asset('images/company/banner2.png') }}" alt="banner_image" class="absolute inset-0 w-full h-full object-fit"> --}}
        <div class="flex">
            <div class="absolute h-full inset-y-1/2">
                <h1 class="flex text-8xl sm:ml-32 ml-10 font-semibold text-black">Shop</h1>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="py-8 sm:py-12 lg:mx-auto lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-3 mx-2 w-full max-md:max-w-md max-md:mx-auto">
                <div class="box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">
                    <h6 class="font-medium text-base leading-7 text-black mb-5">Filter</h6>
                    <h3 class="font-medium text-sm text-gray-600 mt-8 mb-4">Price Range</h3>
                    <div class="flex items-center mb-5 gap-1">
                        <div class="relative w-full">
                            <select id="FROM"
                                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                <option selected>Min</option>
                                <option value="option 1">option 1</option>
                                <option value="option 2">option 2</option>
                                <option value="option 3">option 3</option>
                                <option value="option 4">option 4</option>
                            </select>
                        </div>
                        <p class="px-1 font-normal text-sm leading-6 text-gray-600">to</p>
                        <div class="relative w-full">
                            <select id="FROM"
                                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                                <option selected>Max</option>
                                <option value="option 1">option 1</option>
                                <option value="option 2">option 2</option>
                                <option value="option 3">option 3</option>
                                <option value="option 4">option 4</option>
                            </select>
                        </div>
                    </div>
            
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-600 w-full">Brand</label>
                    <div class="relative w-full mb-8">
                        <select id="FROM"
                            class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                            <option selected>Select Brand</option>
                            <option value="option 1">option 1</option>
                            <option value="option 2">option 2</option>
                            <option value="option 3">option 3</option>
                            <option value="option 4">option 4</option>
                        </select>
                    </div>
                    <input type="search" id="default-search" name="search"
                        class="w-full h-12 -mt-4 mb-4 flex items-center justify-center rounded-full text-sm text-gray-900 border-gray-300  bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Look for something?">
                    <button
                        class="w-full py-2.5 flex items-center justify-center gap-2 rounded-full bg-indigo-600 text-white font-semibold text-xs shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-200  ">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.4987 13.9997L13.1654 12.6663M13.832 7.33301C13.832 10.6467 11.1457 13.333 7.83203 13.333C4.51832 13.333 1.83203 10.6467 1.83203 7.33301C1.83203 4.0193 4.51832 1.33301 7.83203 1.33301C11.1457 1.33301 13.832 4.0193 13.832 7.33301Z"
                                stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Search
                    </button>
                </div>
            
                <div class="mt-7 box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">
                    <div class="flex items-center justify-between w-full pb-3 border-b border-gray-200 mb-7">
                        <p class="font-medium text-base leading-7 text-black ">Filter Plans</p>
                        <p
                            class="font-medium text-xs text-gray-500 cursor-pointer transition-all duration-500 hover:text-indigo-600">
                            RESET</p>
                    </div>
            
            
                    <div class="w-full mb-7">
                        <div class='accordion-group grid grid-cols-1 gap-5 sm:gap-9'
                            data-accordion="default-accordion">
                            <div class='accordion '
                                id='category-heading-one'>
                                <button
                                    class='accordion-toggle group accordion-active:text-indigo-600 inline-flex items-center justify-between leading-8 text-gray-600 w-full transition duration-500 hover:text-indigo-600 active:text-indigo-600'
                                    aria-controls='category-collapse-one'>
                                    <h5 class="font-medium text-sm text-gray-900">
                                        Availability
                                    </h5>
                                    <svg class='text-gray-900 transition duration-500 group-hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:rotate-180'
                                        width='22' height='22' viewBox='0 0 22 22' fill='none'
                                        xmlns='http://www.w3.org/2000/svg'>
                                        <path
                                            d='M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25'
                                            stroke='currentColor' stroke-width='1.6' stroke-linecap='round'
                                            stroke-linejoin='round'></path>
                                    </svg>
            
                                </button>
                                <div id='category-collapse-one'
                                    class='accordion-content w-full px-0 overflow-hidden pr-4 max-h-0 '
                                    aria-labelledby='category-heading-one'>
                                    
                                    <div class="box flex flex-col gap-2 mt-5">
                                        
                                        <div class="flex items-center mb-2">
                                            <input id="checkbox-option-1" type="checkbox" value="" class="checkbox-white w-5 h-5 appearance-none border border-gray-500  rounded mr-1 hover:border-indigo-100 hover:bg-indigo-600 checked:bg-no-repeat checked:bg-center checked:border-indigo-100 checked:bg-indigo-600 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                            <label for="checkbox-option-1" class="ml-1 font-normal text-xs cursor-pointer  text-gray-600">option-1</label>
                                            </div>
                                            <div class="flex items-center mb-2">
                                                <input id="checkbox-option-2" type="checkbox" value="" class="checkbox-white w-5 h-5 appearance-none border border-gray-500  rounded mr-1 hover:border-indigo-100 hover:bg-indigo-600 checked:bg-no-repeat checked:bg-center checked:border-indigo-600 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                                <label for="checkbox-option-2" class="ml-1 font-normal text-xs cursor-pointer  text-gray-600">option-2</label>
                                                </div>
                                                <div class="flex items-center mb-2">
                                                    <input id="checkbox-option-3" type="checkbox" value="" class="checkbox-white w-5 h-5 appearance-none border border-gray-500  rounded mr-1 hover:border-indigo-600 hover:bg-indigo-600 checked:bg-no-repeat checked:bg-center checked:border-indigo-600 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                                                    <label for="checkbox-option-3" class="ml-1 font-normal text-xs cursor-pointer  text-gray-600">option-3</label>
                                                    </div>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <label for="Offer" class="font-medium text-sm leading-6 text-gray-600 mb-1">Offer</label>
                    <div class="relative w-full mb-7">
                        <select id="Offer"
                            class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                            <option selected>5% off upi discount</option>
                            <option value="option 1">option 1</option>
                            <option value="option 2">option 2</option>
                            <option value="option 3">option 3</option>
                            <option value="option 4">option 4</option>
                        </select>
                    </div>
                    <p class="font-medium text-sm leading-6 text-black mb-3">Discount</p>
                    <div class="box flex flex-col gap-2">
                        <div class="flex items-center">
                            <input id="checkbox-default-1" type="checkbox" value="" class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                            <label for="checkbox-default-1" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">20% or more</label>
                        </div>
                        <div class="flex items-center">
                            <input id="checkbox-default-2" type="checkbox" value="" class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                            <label for="checkbox-default-2" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">30% or more</label>
                        </div>
                        <div class="flex items-center">
                            <input id="checkbox-default-3" type="checkbox" value="" class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                            <label for="checkbox-default-3" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">50% or more</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-9">
                <div class="py-8 md:py-0 lg:mx-auto lg:max-w-7xl lg:px-8">
                <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Trending Products</h2>
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
            
                <div class="relative mt-8">
                    <div class="relative -mb-6 w-full overflow-x-auto pb-6">
                        <ul role="list" class="mx-4 flex flex-col flex-wrap content-center md:inline-grid gap-x-8 gap-y-8 sm:mx-6 lg:mx-0 lg:grid-cols-3 md:grid-cols-2 lg:gap-x-8 lg:space-x-0"> 
                            @foreach ($products as $product)
                                <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                    <div class="max-w-md w-full bg-gray-900 shadow-xl rounded-xl p-6">
                                        <div class="flex flex-col ">
                                        <div class="">
                                            <div class="relative h-62 w-full mb-3">
                                            <div class="absolute flex flex-col top-0 right-0 p-3">
                                                <button class="transition ease-in duration-300 bg-gray-800  hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg></button>
                                            </div>
                                            <img src="{{ asset('images/products/'. $product->image . '.jpeg')}}" alt="product pic" class=" w-full   object-fill  rounded-2xl">
                                            </div>
                                            <div class="flex-auto justify-evenly">
                                            <div class="flex flex-wrap">
                                                <div class="flex items-center w-full justify-between min-w-0 ">
                                                    <a href="{{ route('view-product', [$product->name])  }}">
                                                        <h2 class="text-lg font-semibold cursor-pointer text-gray-200 hover:text-purple-500">{{ $product->name }}</h2>
                                                    {{-- <div class="flex items-center bg-green-400 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                        INSTOCK
                                                    </div> --}}
                                                    </a>
                                                </div>
                                                <div class="text-md text-white font-thin mt-1 truncate"> {{$product->description}} </div>
                                                <div class="text-lg text-white mt-1">Price: {{$product->price}} ฿</div>
                                            </div>
                                            
                                            <div class="lg:flex py-4 text-sm text-gray-600">
                                                <div class="flex-1 inline-flex items-center mb-3">
                                                <span class="text-secondary whitespace-nowrap mr-3">Size</span>
                                                <div class="cursor-pointer text-gray-400 ">
                                                    <span class="hover:text-purple-500 p-1 py-0">S</span>
                                                    <span class="hover:text-purple-500 p-1 py-0">M</span>
                                                    <span class="hover:text-purple-500 p-1 py-0">L</span>
                                                    <span class="hover:text-purple-500 p-1 py-0">XL</span>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="flex space-x-2 text-sm font-medium justify-start">
                                                <a href="{{ route('view-product', [$product->name])  }}">
                                                    <button class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600 ">
                                                        <span>Add Cart</span>
                                                    </button>
                                                </a>
                                                <a href="{{ route('view-product', [$product->name])  }}">
                                                    <button class="transition ease-in duration-300 bg-gray-700 hover:bg-gray-800 border hover:border-gray-500 border-gray-700 hover:text-white  hover:shadow-lg text-gray-400 rounded-full w-9 h-9 text-center p-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    </button>
                                                </a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </li>
                                    {{-- <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="max-w-md w-full bg-gray-900 shadow-lg rounded-xl p-6">
                                            <div class="flex flex-col ">
                                            <div class="">
                                                <div class="relative h-62 w-full mb-3">
                                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                                        <button class="transition ease-in duration-300 bg-gray-800  hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                        </svg></button>
                                                    </div>
                                                    <img src=" {{ asset('images/products/'. $product->image . '.jpeg')}} " alt="Goat Milk" class=" w-full object-center object-fill rounded-2xl">
                                                </div>
                                                <div class="flex-auto justify-evenly">
                                                <div class="flex flex-wrap ">
                                                    <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <span class="text-gray-400 whitespace-nowrap mr-3">4.60</span><span class="mr-2 text-gray-400">India</span>
                                                    </div>
                                                    <div class="flex items-center w-full justify-between min-w-0 ">
                                                    <h2 class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500 truncate ">Lorem ipsum
                                                        is placeholder text commonly used in the graphic</h2>
                                                    <div class="flex items-center bg-green-400 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                        INSTOCK</div>
                                                    </div>
                                                </div>
                                                <div class="text-xl text-white font-semibold mt-1">$240.00</div>
                                                <div class="lg:flex  py-4  text-sm text-gray-600">
                                                    <div class="flex-1 inline-flex items-center  mb-3">
                                                    <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                        <ul class="flex flex-row justify-center items-center space-x-2">
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-blue-600 rounded-full transition ease-in duration-300">
                                                            <a href="#blue" class="block w-3 h-3 bg-blue-600 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-yellow-400 rounded-full transition ease-in duration-300">
                                                            <a href="#yellow" class="block w-3 h-3  bg-yellow-400 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-red-500 rounded-full transition ease-in duration-300">
                                                            <a href="#red" class="block w-3 h-3  bg-red-500 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-green-500 rounded-full transition ease-in duration-300">
                                                            <a href="#green" class="block w-3 h-3  bg-green-500 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <div class="flex-1 inline-flex items-center mb-3">
                                                    <span class="text-secondary whitespace-nowrap mr-3">Size</span>
                                                    <div class="cursor-pointer text-gray-400 ">
                                                        <span class="hover:text-purple-500 p-1 py-0">S</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">M</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">L</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">XL</span>
                                    
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="flex space-x-2 text-sm font-medium justify-start">
                                                    <button class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600 ">
                                                    <span>Add Cart</span>
                                                    </button>
                                                    <button class="transition ease-in duration-300 bg-gray-700 hover:bg-gray-800 border hover:border-gray-500 border-gray-700 hover:text-white  hover:shadow-lg text-gray-400 rounded-full w-9 h-9 text-center p-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    </button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="max-w-md w-full bg-gray-900 shadow-lg rounded-xl p-6">
                                            <div class="flex flex-col ">
                                            <div class="">
                                                <div class="relative h-62 w-full mb-3">
                                                <div class="absolute flex flex-col top-0 right-0 p-3">
                                                    <button class="transition ease-in duration-300 bg-gray-800  hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                    </svg></button>
                                                </div>
                                                <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80" alt="Just a flower" class=" w-full   object-fill  rounded-2xl">
                                                </div>
                                                <div class="flex-auto justify-evenly">
                                                <div class="flex flex-wrap ">
                                                    <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <span class="text-gray-400 whitespace-nowrap mr-3">4.60</span><span class="mr-2 text-gray-400">India</span>
                                                    </div>
                                                    <div class="flex items-center w-full justify-between min-w-0 ">
                                                    <h2 class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500 truncate ">Lorem ipsum
                                                        is placeholder text commonly used in the graphic</h2>
                                                    <div class="flex items-center bg-green-400 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                        INSTOCK</div>
                                                    </div>
                                                </div>
                                                <div class="text-xl text-white font-semibold mt-1">$240.00</div>
                                                <div class="lg:flex  py-4  text-sm text-gray-600">
                                                    <div class="flex-1 inline-flex items-center  mb-3">
                                                    <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                        <ul class="flex flex-row justify-center items-center space-x-2">
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-blue-600 rounded-full transition ease-in duration-300">
                                                            <a href="#blue" class="block w-3 h-3 bg-blue-600 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-yellow-400 rounded-full transition ease-in duration-300">
                                                            <a href="#yellow" class="block w-3 h-3  bg-yellow-400 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-red-500 rounded-full transition ease-in duration-300">
                                                            <a href="#red" class="block w-3 h-3  bg-red-500 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-green-500 rounded-full transition ease-in duration-300">
                                                            <a href="#green" class="block w-3 h-3  bg-green-500 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <div class="flex-1 inline-flex items-center mb-3">
                                                    <span class="text-secondary whitespace-nowrap mr-3">Size</span>
                                                    <div class="cursor-pointer text-gray-400 ">
                                                        <span class="hover:text-purple-500 p-1 py-0">S</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">M</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">L</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">XL</span>
                                    
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="flex space-x-2 text-sm font-medium justify-start">
                                                    <button class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600 ">
                                                    <span>Add Cart</span>
                                                    </button>
                                                    <button class="transition ease-in duration-300 bg-gray-700 hover:bg-gray-800 border hover:border-gray-500 border-gray-700 hover:text-white  hover:shadow-lg text-gray-400 rounded-full w-9 h-9 text-center p-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    </button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                        <div class="max-w-md w-full bg-gray-900 shadow-lg rounded-xl p-6">
                                            <div class="flex flex-col ">
                                            <div class="">
                                                <div class="relative h-62 w-full mb-3">
                                                <div class="absolute flex flex-col top-0 right-0 p-3">
                                                    <button class="transition ease-in duration-300 bg-gray-800  hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                    </svg></button>
                                                </div>
                                                <img src="https://images.unsplash.com/photo-1577982787983-e07c6730f2d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2059&q=80" alt="Just a flower" class=" w-full   object-fill  rounded-2xl">
                                                </div>
                                                <div class="flex-auto justify-evenly">
                                                <div class="flex flex-wrap ">
                                                    <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <span class="text-gray-400 whitespace-nowrap mr-3">4.60</span><span class="mr-2 text-gray-400">India</span>
                                                    </div>
                                                    <div class="flex items-center w-full justify-between min-w-0 ">
                                                    <h2 class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500 truncate ">Lorem ipsum
                                                        is placeholder text commonly used in the graphic</h2>
                                                    <div class="flex items-center bg-green-400 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                        INSTOCK</div>
                                                    </div>
                                                </div>
                                                <div class="text-xl text-white font-semibold mt-1">$240.00</div>
                                                <div class="lg:flex  py-4  text-sm text-gray-600">
                                                    <div class="flex-1 inline-flex items-center  mb-3">
                                                    <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                        <ul class="flex flex-row justify-center items-center space-x-2">
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-blue-600 rounded-full transition ease-in duration-300">
                                                            <a href="#blue" class="block w-3 h-3 bg-blue-600 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-yellow-400 rounded-full transition ease-in duration-300">
                                                            <a href="#yellow" class="block w-3 h-3  bg-yellow-400 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-red-500 rounded-full transition ease-in duration-300">
                                                            <a href="#red" class="block w-3 h-3  bg-red-500 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        <li class="">
                                                            <span class="block p-1 border-2 border-gray-900 hover:border-green-500 rounded-full transition ease-in duration-300">
                                                            <a href="#green" class="block w-3 h-3  bg-green-500 rounded-full"></a>
                                                            </span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <div class="flex-1 inline-flex items-center mb-3">
                                                    <span class="text-secondary whitespace-nowrap mr-3">Size</span>
                                                    <div class="cursor-pointer text-gray-400 ">
                                                        <span class="hover:text-purple-500 p-1 py-0">S</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">M</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">L</span>
                                                        <span class="hover:text-purple-500 p-1 py-0">XL</span>
                                    
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="flex space-x-2 text-sm font-medium justify-start">
                                                    <button class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600 ">
                                                    <span>Add Cart</span>
                                                    </button>
                                                    <button class="transition ease-in duration-300 bg-gray-700 hover:bg-gray-800 border hover:border-gray-500 border-gray-700 hover:text-white  hover:shadow-lg text-gray-400 rounded-full w-9 h-9 text-center p-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    </button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </li>
    --}}
                            @endforeach
                        </ul>
                        {{-- @if($service->is_hidden == false)
                            <x-service-card :service="$service"/>
                        @endif --}}
                    
                    
                    </div>
                </div>
            
        
                </div>
            </div>
            </div>
        </div>
        
        
                                                
        
        
        
        </div>
</x-app-layout>
