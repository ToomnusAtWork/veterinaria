@extends('layouts.privileged', ['title' => 'Admin Dashboard'])

@section('content')
@include('layouts._sidenav')
  <div class="bg-slate-100">
      {{-- <x-slot name="header">
          @isset($header)
              {{ $header }}
          @endisset
      </x-slot> --}}
        
        <div id="dashboard-grid" class="flex">
            
            <!-- Sidebar -->
              {{-- <div class="flex w-1/6 sm:w-64 flex-col flex-auto antialiased bg-gray-50 text-gray-800">
                  <div class="fixed flex flex-col top-0 left-0 sm:w-max w-16 bg-gray-800 h-full ">
                    <div class="flex items-center mt-3 justify-center h-14 ">
                        <x-application-logo/>
                    </div>
                    <div class="overflow-y-auto overflow-x-hidden flex-grow">
                      <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5">
                          <div class="flex flex-row items-center h-8">
                            <div class="invisible md:visible text-sm font-light tracking-wide text-gray-500">Menu</div>
                          </div>
                        </li>
                        <li>
                          <a href="/dashboard" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-600 hover:text-white border-l-4 border-transparent pr-6
                            {{ request()->is('dashboard') ? 'bg-gray-700 border-violet-600 text-white font-semibold' : '' }}">
                            <span class="inline-flex justify-center items-center ml-4">
                              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </span>
                            <span class="invisible md:visible ml-2 text-sm tracking-wide truncate">Dashboard</span>
                          </a>
                        </li>
                        {{-- User Role 1= Admin, 2 = Employee --}}
                        {{-- @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)

                        <li class="px-5">
                          <div class="flex flex-row items-center h-8">
                            <div class="invisible md:visible text-sm font-light tracking-wide text-gray-500">CRM Manage</div>
                          </div>
                        </li>
                        @if(Auth::user()->role_id == 1 )
                        <li>
                          <a href="{{ route('manageusers') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-600 hover:text-white border-l-4 border-transparent pr-6
                          {{ request()->is('dashboard/manage/users') ? 'bg-gray-700 border-violet-600 text-white font-semibold' : '' }}
                          ">
                            <span class="inline-flex justify-center items-center ml-4">
                              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </span>
                            <span class="invisible md:visible ml-2 text-sm tracking-wide truncate">Manage Users</span>

                          </a>
                        </li>

                          <li>
                              <a href="{{ route('managelocations') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-600 hover:text-white border-l-4 border-transparent pr-6
                              {{ request()->is('dashboard/manage/locations') ? 'bg-gray-700 border-violet-600 text-white font-semibold' : '' }}
                              ">
                                <span class="inline-flex justify-center items-center ml-4">
                                  <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M15 14V17.6C15 18.4401 15 18.8601 14.8365 19.181C14.6927 19.4632 14.4632 19.6927 14.181 19.8365C13.8601 20 13.4401 20 12.6 20H7.40001C6.55994 20 6.1399 20 5.81903 19.8365C5.53679 19.6927 5.30731 19.4632 5.1635 19.181C5.00001 18.8601 5.00001 18.4401 5.00001 17.6V10M19 10V20M5.00001 16H15M5.55778 4.88446L3.5789 8.84223C3.38722 9.22559 3.29138 9.41727 3.3144 9.57308C3.3345 9.70914 3.40976 9.8309 3.52246 9.90973C3.65153 10 3.86583 10 4.29444 10H19.7056C20.1342 10 20.3485 10 20.4776 9.90973C20.5903 9.8309 20.6655 9.70914 20.6856 9.57308C20.7086 9.41727 20.6128 9.22559 20.4211 8.84223L18.4422 4.88446C18.2817 4.5634 18.2014 4.40287 18.0817 4.28558C17.9758 4.18187 17.8482 4.10299 17.7081 4.05465C17.5496 4 17.3701 4 17.0112 4H6.98887C6.62991 4 6.45043 4 6.29198 4.05465C6.15185 4.10299 6.02422 4.18187 5.91833 4.28558C5.79858 4.40287 5.71832 4.5634 5.55778 4.88446Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                </span>
                              <span class="invisible md:visible ml-2 text-sm tracking-wide truncate">Manage Locations</span>

                              </a>
                          </li>

                        @endif

                      <li>
                          <a href="{{ route('manageappointments') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-600 hover:text-white border-l-4 border-transparent pr-6
                      {{ request()->is('dashboard/manage/appointments') ? 'bg-gray-700 border-violet-600 text-white font-semibold' : '' }}
                      ">
                        <span class="inline-flex justify-center items-center ml-4">
                          <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><title/><path d="M18,5V3a1,1,0,0,0-2,0V5H8V3A1,1,0,0,0,6,3V5H2V21H22V5Zm2,14H4V7H20Zm-7-9H11v2h2Zm4,0H15v2h2ZM9,14H7v2H9Zm4,0H11v2h2Z"/></svg>
                        </span>
                              <span class="invisible md:visible ml-2 text-sm tracking-wide truncate">Manage Appointments</span>

                          </a>
                      </li>
                        <li>
                          <a href="{{route('manageservices')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-600 hover:text-white border-l-4 border-transparent pr-6
                          {{ request()->is('dashboard/manage/services') ? 'bg-gray-700 border-violet-600 text-white font-semibold' : '' }}
                          ">
                            <span class="inline-flex justify-center items-center ml-4">
                              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M18 5.05h1a2 2 0 0 1 2 2v2H3v-2a2 2 0 0 1 2-2h1v-1a1 1 0 1 1 2 0v1h3v-1a1 1 0 1 1 2 0v1h3v-1a1 1 0 1 1 2 0v1Zm-15 6v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8H3ZM11 18a1 1 0 1 0 2 0v-1h1a1 1 0 1 0 0-2h-1v-1a1 1 0 1 0-2 0v1h-1a1 1 0 1 0 0 2h1v1Z" clip-rule="evenodd"/>
                              </svg>
                            </span>
                            <span class="invisible md:visible ml-2 text-sm tracking-wide truncate">Manage Services</span>
                          </a>
                        </li>

                          <li>
                              <a href="{{ route('managecategories') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-600 hover:text-white border-l-4 border-transparent pr-6
                      {{ request()->is('dashboard/manage/categories') ? 'bg-gray-700 border-violet-600 text-white font-semibold' : '' }}
                      ">
                        <span class="inline-flex justify-center items-center ml-4">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        </span>
                                  <span class="invisible md:visible ml-2 text-sm tracking-wide truncate">Manage Categories</span>
                              </a>
                          </li>
                          <li>
                            <a href="{{ route('manageproducts') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-600 hover:text-white border-l-4 border-transparent pr-6
                            {{ request()->is('dashboard/manage/products') ? 'bg-gray-700 border-violet-600 text-white font-semibold' : '' }}">
                                <span class="inline-flex justify-center items-center ml-4">
                                  <svg class="flex-shrink-0 w-5 h-5 group-hover:text-gray-900 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                          d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                          clip-rule="evenodd"></path>
                                  </svg>
                                </span>
                                <span class="invisible md:visible ml-2 text-sm tracking-wide truncate">Manage Products</span>
                            </a>
                        </li>
                          @else

                        @endif


                      </ul>
                    </div>
                  </div>
                </div> --}}

            <!-- End Of the Sidebar -->


        {{-- <div class="max-w-9xl mx-auto sm:px-6 lg:px-8"> --}}
          <div class="w-5/6 sm:w-full">
            <!-- TOP NAV FOR ADMIN -->
              <nav class="flex h-28 mb-5 lg:h-[96px]" id="navbarTop" navbar-scroll="true">
                <div class="sm:flex items-stretch justify-between grow lg:mb-0 mb-5 py-5 px-10">
                    <div class="flex flex-col flex-wrap justify-center mb-5 mr-3 lg:mb-0"> <span class="my-0 flex text-dark font-semibold text-[1.35rem]/[1.2] flex-col justify-center">Dashboard</span> <span class="pt-1 text-secondary-dark text-[0.95rem] font-medium">Check all available courses</span> </div>
                    <div class="flex items-center lg:shrink-0 lg:flex-nowrap">
                        <div class="relative lg:hidden flex items-center sm:ml-2 ml-auto"> <a href="javascript:void(0)" class="flex items-center justify-center w-12 h-12 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out bg-transparent border border-solid shadow-none cursor-pointer rounded-2xl text-stone-500 border-stone-200 hover:text-primary active:text-primary focus:text-primary" onclick="(function(){document.querySelector('.group\\/sidebar').classList.toggle('-translate-x-full');})();"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                </svg> </a> </div>
                        <div class="relative flex items-center ml-2 lg:ml-4"> <a href="javascript:void(0)" class="flex items-center justify-center w-12 h-12 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out bg-transparent border border-solid shadow-none cursor-pointer rounded-2xl text-stone-500 border-stone-200 hover:text-primary active:text-primary focus:text-primary "> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg> </a> </div>
                        <div class="relative flex items-center ml-2 lg:ml-4"> <a href="javascript:void(0)" class="flex items-center justify-center w-12 h-12 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out bg-transparent border border-solid shadow-none cursor-pointer rounded-2xl text-stone-500 border-stone-200 hover:text-primary active:text-primary focus:text-primary "> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"></path>
                                </svg>
                                <div class="absolute justify-center w-5 h-5font-semibold leading-normal text-center text-white text-sm align-middle transition-colors duration-150 ease-in-out shadow-none cursor-pointer rounded-xl bg-primary hover:bg-primary-dark active:bg-primary-dark focus:bg-primary-dark top-0 right-0 -me-1 -mt-2"> <span class="text-sm">1</span> </div>
                            </a> 
                        </div>
                    </div>
                </div>
            </nav>
            <!-- END OF TOP NAV FOR ADMIN -->
              {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}
              @if (session('errormsg'))
                  <div class="mb-4 font-medium text-sm text-red-600">
                      {{ session('errormsg') }}
                  </div>
              @endif

              @if (session('success'))
                  <div class="mb-4 font-medium text-sm text-green-600">
                      {{ session('success') }}
                  </div>
              @endif



                  <div class="w-full">
                      {{ $slot }}
                  </div>
              </div>
          </div>
      </div>

@endsection

