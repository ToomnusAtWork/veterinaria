@extends('layouts.app')
@section('content')
    <div class="bg-[url('/public/images/company/banner1.png')] w-full bg-cover bg-no-repeat min-h-screen">
        <div class="flex">
            <div class="absolute h-full inset-y-1/2">
                <h1 class="flex text-7xl sm:text-8xl sm:ml-32 ml-10 font-semibold text-black">บริการนัดคิว</h1>
            </div>
        </div>
    </div>
    <div x-data="{
        menuBarOpen: false, 
        menuBarMenu: ''
        }" 
        @click.away="menuBarOpen=false" 
        class="relative top-0 left-0 z-50 w-auto transition-all duration-150 ease-out"
        >
        <div class="relative top-0 left-0 z-40 w-full h-16 transition duration-200 ease-out">
            <div class="w-full h-full p-1 bg-white border border-neutral-200/80 shadow-sm">
                <div class="flex justify-around w-full h-full select-none text-neutral-900">
                    <!-- File Button -->
                    <div class="relative h-full  cursor-default">

                        <button @click="menuBarOpen=true; menuBarMenu='file'" @mouseover="menuBarMenu='file'" :class="{ 'bg-neutral-100' : menuBarOpen && menuBarMenu == 'file'}" class="rounded text-sm cursor-default flex items-center leading-tight justify-center px-3 py-1.5 h-full hover:bg-neutral-100">
                            Healthcare treatment
                        </button>
                        <div 
                            x-show="menuBarOpen && menuBarMenu=='file'" 
                            x-transition:enter="transition ease-linear duration-100" 
                            x-transition:enter-start="-translate-y-1 opacity-90" 
                            x-transition:enter-end="translate-y-0 opacity-100" 
                            class="absolute top-0 z-50 min-w-[8rem] text-neutral-800 rounded-md border border-neutral-200/70 bg-white mt-10 text-sm p-1 shadow-md w-48 -translate-x-0.5"
                            x-cloak>

                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>New Tab</span>
                                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘T</span>
                            </button>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>New Window</span>
                                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘N</span>
                            </button>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none" data-disabled>
                                <span>New Incognito Window</span>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button class="relative w-full group">
                                <div class="flex cursor-default select-none items-center rounded px-2 hover:bg-neutral-100 py-1.5 outline-none">
                                    <span>Share</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-auto"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <div data-submenu="" class="absolute top-0 right-0 invisible mr-1 duration-200 ease-out translate-x-full opacity-0 group-hover:mr-0 group-hover:visible group-hover:opacity-100">
                                    <div class="z-50 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md animate-in slide-in-from-left-1 w-32">
                                        <div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Email link</div>
                                        <div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Messages</div>
                                        <div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Notes</div>
                                    </div>
                                </div>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Print</span>
                                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘P</span>
                            </button>
                        </div>

                    </div>
                    <!-- End File Button -->
                
                    <!-- Edit Button -->
                    <div class="relative h-full cursor-default">
                        <button @click="menuBarOpen=true; menuBarMenu='edit'" @mouseover="menuBarMenu='edit'" :class="{ 'bg-neutral-100' : menuBarOpen && menuBarMenu == 'edit'}" class="rounded text-sm cursor-default flex items-center leading-tight justify-center px-3 py-1.5 h-full hover:bg-neutral-100">
                            Clinical service
                        </button>
                        <div 
                            x-show="menuBarOpen && menuBarMenu=='edit'" 
                            x-transition:enter="transition ease-linear duration-100" 
                            x-transition:enter-start="-translate-y-1 opacity-90" 
                            x-transition:enter-end="translate-y-0 opacity-100"
                            class="absolute top-0 z-50 min-w-[8rem] text-neutral-800 rounded-md border border-neutral-200/70 bg-white mt-10 text-sm p-1 shadow-md w-48 -translate-x-0.5"
                            x-cloak>

                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Undo</span>
                                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘Z</span>
                            </button>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Redo</span>
                                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⇧⌘Z</span>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button class="relative w-full group">
                                <div class="flex cursor-default select-none items-center rounded px-2 hover:bg-neutral-100 py-1.5 outline-none">
                                    <span>Find</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-auto"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <div data-submenu="" class="absolute top-0 right-0 invisible mr-1 duration-200 ease-out translate-x-full opacity-0 group-hover:mr-0 group-hover:visible group-hover:opacity-100">
                                    <div class="z-50 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md animate-in slide-in-from-left-1 w-32">
                                        <div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Search the web</div>
                                        <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                                        <div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Find...</div>
                                        <div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Find Next</div>
                                        <div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Find Previous</div>
                                    </div>
                                </div>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Cut</span>
                            </button>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Copy</span>
                            </button>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Paste</span>
                            </button>
                        </div>
                    </div>
                    <!-- End Edit Button -->

                    <!-- View Button -->
                    <div class="relative h-full cursor-default">
                        <button @click="menuBarOpen=true; menuBarMenu='view'" @mouseover="menuBarMenu='view'" :class="{ 'bg-neutral-100' : menuBarOpen && menuBarMenu == 'view'}" class="rounded text-sm cursor-default flex items-center leading-tight justify-center px-3 py-1.5 h-full hover:bg-neutral-100">
                            Appointment
                        </button>
                        <div 
                            x-show="menuBarOpen && menuBarMenu=='view'" 
                            x-transition:enter="transition ease-linear duration-100" 
                            x-transition:enter-start="-translate-y-1 opacity-90" 
                            x-transition:enter-end="translate-y-0 opacity-100"
                            class="absolute top-0 z-50 min-w-[15rem] text-neutral-800 rounded-md border border-neutral-200/70 bg-white mt-10 text-sm p-1 shadow-md w-48 -translate-x-0.5"
                            x-cloak>

                            <button @click="menuBarOpen=false; alwaysShowBookmarks=!alwaysShowBookmarks;" x-data="{ alwaysShowBookmarks: false }" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span x-show="alwaysShowBookmarks" class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                <span>Always Show Bookmarks Bar</span>
                            </button>
                            <button @click="menuBarOpen=false; alwaysShowFullURL=!alwaysShowFullURL" x-data="{ alwaysShowFullURL: true }" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span x-show="alwaysShowFullURL" class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                <span>Always Show Full URLs</span>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Reload</span>
                                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘R</span>
                            </button>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none" data-disabled>
                                <span>Force Reload</span>
                                <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⇧⌘R</span>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Toggle Fullscreen</span>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Hide Sidebar</span>
                            </button>
                        </div>
                    </div>
                    <!-- End View Button -->

                    <!-- Profiles Button -->
                    <div class="relative h-full cursor-default">
                        <button @click="menuBarOpen=true; menuBarMenu='profiles'" @mouseover="menuBarMenu='profiles'" :class="{ 'bg-neutral-100' : menuBarOpen && menuBarMenu == 'profiles'}" class="rounded text-sm cursor-default flex items-center leading-tight justify-center px-3 py-1.5 h-full hover:bg-neutral-100">
                            Knowledge
                        </button>
                        <div 
                            x-show="menuBarOpen && menuBarMenu=='profiles'" 
                            x-transition:enter="transition ease-linear duration-100" 
                            x-transition:enter-start="-translate-y-1 opacity-90" 
                            x-transition:enter-end="translate-y-0 opacity-100"
                            class="absolute top-0 z-50 min-w-[8rem] text-neutral-800 rounded-md border border-neutral-200/70 bg-white mt-10 text-sm p-1 shadow-md w-48 -translate-x-0.5"
                            x-cloak>

                            <div class="relative w-full">
                                <button @click="menuBarOpen=false" class="relative w-full flex cursor-default select-none items-center rounded py-1.5 pl-8 pr-2 hover:bg-neutral-100 outline-none data-[disabled]:opacity-50">
                                    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-2 h-2 fill-current"><circle cx="12" cy="12" r="10"></circle></svg></span>
                                    <span>Taylor Otwell</span>
                                </button>
                                <button @click="menuBarOpen=false" class="relative w-full flex cursor-default select-none items-center rounded py-1.5 pl-8 pr-2 hover:bg-neutral-100 outline-none data-[disabled]:opacity-50">
                                    <span>Adam Wathan</span>
                                </button>
                                <button @click="menuBarOpen=false" class="relative w-full flex cursor-default select-none items-center rounded py-1.5 pl-8 pr-2 hover:bg-neutral-100 outline-none data-[disabled]:opacity-50">
                                    <span>Caleb Porzio</span>
                                </button>
                            </div>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Edit...</span>
                            </button>
                            <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                            <button @click="menuBarOpen=false" class="relative flex justify-between w-full pl-8 cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Add Profile...</span>
                            </button>
                        </div>
                    </div>
                    <!-- End Profiles Button -->
                </div>     
            </div>
        </div>
    </div>
    <div class="bg-[#FAF9F9] py-10">
        <div x-data="{ isSettingsPanelOpen: false }">
            <div>
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
            </div>
            
            <main class="mx-auto lg:max-w-7xl my-5 px-4 sm:px-6 lg:px-8 bg-white rounded-3xl">
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
    
                            {{-- <div class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                            class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                            aria-controls="filter-section-1" aria-expanded="false">
                                        <span class="font-medium text-gray-900">Pet Care Services</span>
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
                                        <span class="font-medium text-gray-900">Pet Treatment Center</span>
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
    
                            </div> --}}
                        </form>
    
                        <!-- Product grid -->
                        <div class="lg:col-span-3 flex flex-col flex-wrap gap-2  md:flex-row mt-3 pb-7 h-max ">
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
                                        <button
                                            x-on:click = "isSettingsPanelOpen=!isSettingsPanelOpen"
                                            type="button"
                                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6"
                                        >
                                            <span aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                                            </span>
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
    
            {{-- Fix soon --}}
            <div class=" sm:hidden z-10 fixed right-0 rounded-full bottom-0 mr-5 mb-5 sm:mr-6 sm:mb-6 shadow-2xl">
                <div class="flex items-center justify-center bg-teal-500 rounded-full opacity-75 p-3 sm:p-4">
                    <svg class="fill-current text-gray-200 h-6 w-6 sm:h-10 sm:w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                    </svg>
                </div>
                <div class="absolute left-0 top-0 ml-3 mt-3 sm:ml-4 sm:mt-4">
                    <div class="flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-2 w-2 sm:h-full sm:w-full rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 sm:h-3 sm:w-3 bg-pink-500" ></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection