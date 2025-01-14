@extends('layouts.app')
@section('content')
    <x-slot name="mainLogoRoute">
        {{ route('home') }}
    </x-slot>

    <div class="relative">
        <section class="bg-purp-primary">
            <div class="container mx-auto px-8 py-4 lg:py-12 relative flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 flex flex-col items-center lg:items-start">
                    <h1 class="text-center lg:text-left text-3xl sm:text-4xl font-bold text-purple-900 leading-tight mb-4">Where healthy pets are happy pets.</h1>
                    <p class="text-center lg:text-left sm:text-lg text-black lg:pr-40 font-light leading-relaxed">PetPal focuses on providing top-quality services and offers personalized advice tailored just for you. Our team specializes in customizing Pets Hotel experiences to meet the individual needs of each guest. My Buddy Pet Clinic emphasizes service quality, location, and the professionalism of our team.</p>
                        <a href="{{ route('services') }}" class="bg-purple-800 hover:bg-purple-500 transition delay-75 hover:text-zinc-100 mt-8 py-3 px-8 text-md rounded-lg font-semibold uppercase text-white tracking-widest">
                            Book an appointment.
                        </a>
                    <div class="mt-16 lg:mt-24 flex">
                        <span class="w-12 h-1 mx-1 bg-blue-300"></span>
                        <span class="w-12 h-1 mx-1 bg-blue-200"></span>
                        <span class="w-12 h-1 mx-1 bg-blue-200"></span>
                    </div>
                </div>
                <div class="w-full sm:w-2/4 bg-gray-100  rounded-full top-0 right-0 bottom-0 mt-8 lg:mr-8">
                    <img class="rounded-full" src="{{ asset('/images/company/vettie.png') }}" alt="HappyPetIMG">
                </div>
            </div>
        </section>

        <!-- Info section -->
        <section class="mx-16 pt-16 lg:pt-[100px] pb-12 lg:pb-[90px]">
            <div class="py-16">
                <div class="xl:container m-auto space-y-16 px-6 text-gray-800 md:px-12">
                <div>
                    <h1 class="text-5xl">Why us?</h1>
                    <h2 class="mt-4 text-2xl font-bold text-gray-800 dark:text-gray-400 md:text-4xl">
                    A technology-first approach to payments <br class="sm:block" hidden />
                    and finance
                    </h2>
                </div>
                <div class="md:-mx-8 mt-16 grid gap-8 lg:gap-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="group relative p-8 rounded-3xl bg-white dark:border-gray-700 dark:bg-gray-800 dark:lg:bg-transparent border border-gray-100 lg:border-transparent hover:border-gray-100 dark:shadow-none dark:hover:border-gray-700 dark:hover:bg-gray-800 shadow-2xl shadow-gray-600/10 lg:shadow-transparent lg:hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300">
                    <div class="relative">
                        <img
                        src="https://img.icons8.com/?size=100&id=iZUar99Ykfqe&format=png&color=000000"
                        class="w-16"
                        width="512"
                        height="512"
                        alt="package-delivery illustration"
                        />
                        <h3 class="mt-8 mb-4 text-2xl font-semibold text-gray-800 transition dark:text-white">
                        Experience pet care
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                        We have a deep understanding of animal anatomy, physiology, and medical conditions. And we are skilled in diagnosing illnesses, injuries, and diseases in pets and developing appropriate treatment plans
                        </p>
                    </div>
                    </div>
                    <div class="group relative p-8 rounded-3xl bg-white dark:border-gray-700 dark:bg-gray-800 dark:lg:bg-transparent border border-gray-100 lg:border-transparent hover:border-gray-100 dark:shadow-none dark:hover:border-gray-700 dark:hover:bg-gray-800 shadow-2xl shadow-gray-600/10 lg:shadow-transparent lg:hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300">
                    <div class="relative">
                        <img
                        src="https://img.icons8.com/?size=100&id=NyrjJSXaGbmL&format=png&color=000000"
                        class="w-16"
                        width="512"
                        height="512"
                        alt="package-delivery illustration"
                        />
                        <h3 class="mt-8 mb-4 text-2xl font-semibold text-gray-800 transition dark:text-white">
                        24/7 Online Booking Service
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                        Our service hospitals have surgical facilities and skilled veterinarians capable of performing emergency surgeries as needed.
                        </p>
                    </div>
                    </div>
                    <div class="group relative p-8 rounded-3xl bg-white dark:border-gray-700 dark:bg-gray-800 dark:lg:bg-transparent border border-gray-100 lg:border-transparent hover:border-gray-100 dark:shadow-none dark:hover:border-gray-700 dark:hover:bg-gray-800 shadow-2xl shadow-gray-600/10 lg:shadow-transparent lg:hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300">
                    <div class="relative">
                        <img
                        src="https://img.icons8.com/?size=100&id=j9qfzXOcefAZ&format=png&color=000000"
                        class="w-16"
                        width="512"
                        height="512"
                        alt="package-delivery illustration"
                        />
                        <h3 class="mt-8 mb-4 text-2xl font-semibold text-gray-800 transition dark:text-white">
                        Affordable Pet Hotel
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                        We offer low-cost or subsidized veterinary services for pet owners with financial constraints.
                        </p>
                    </div>
                    </div>
                    <div class="group relative p-8 rounded-3xl bg-white dark:border-gray-700 dark:bg-gray-800 dark:lg:bg-transparent border border-gray-100 lg:border-transparent hover:border-gray-100 dark:shadow-none dark:hover:border-gray-700 dark:hover:bg-gray-800 shadow-2xl shadow-gray-600/10 lg:shadow-transparent lg:hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300">
                    <div class="relative">
                        <img
                        src="https://img.icons8.com/?size=100&id=103936&format=png&color=000000"
                        class="w-16"
                        width="512"
                        height="512"
                        alt="package-delivery illustration"
                        />
                        <h3 class="mt-8 mb-4 text-2xl font-semibold text-gray-800 transition dark:text-white">
                        Awarded Service
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            This clinic that has demonstrated outstanding commitment to animal welfare, including providing high-quality care, promoting responsible pet ownership
                        </p>
                    </div>
                    </div>
                    <div class="group relative p-8 rounded-3xl bg-white dark:border-gray-700 dark:bg-gray-800 dark:lg:bg-transparent border border-gray-100 lg:border-transparent hover:border-gray-100 dark:shadow-none dark:hover:border-gray-700 dark:hover:bg-gray-800 shadow-2xl shadow-gray-600/10 lg:shadow-transparent lg:hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300">
                        <div class="relative">
                        <img
                            src="https://img.icons8.com/?size=100&id=rkAo5FNwp3co&format=png&color=000000"
                            class="w-16"
                            width="512"
                            height="512"
                            alt="package-delivery illustration"
                        />
                        <h3 class="mt-8 mb-4 text-2xl font-semibold text-gray-800 transition dark:text-white">
                            Pet Friendly
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            We also offer resources, workshops, or one-on-one consultations to help owners better understand and care for their pets.
                        </p>
                        </div>
                    </div>
                    <div class="group relative p-8 rounded-3xl bg-white dark:border-gray-700 dark:bg-gray-800 dark:lg:bg-transparent border border-gray-100 lg:border-transparent hover:border-gray-100 dark:shadow-none dark:hover:border-gray-700 dark:hover:bg-gray-800 shadow-2xl shadow-gray-600/10 lg:shadow-transparent lg:hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300">
                        <div class="relative">
                        <img
                            src="https://img.icons8.com/?size=100&id=ljAd1det3qUV&format=png&color=000000"
                            class="w-16"
                            width="512"
                            height="512"
                            alt="package-delivery illustration"
                        />
                        <h3 class="mt-8 mb-4 text-2xl font-semibold text-gray-800 transition dark:text-white">
                            Adopt Pet Shelter
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            We Have an adoption shelter within a veterinary clinic which can attract more potential adopters who are already visiting the clinic for their pets' healthcare needs. 
                        </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>                          
        </section>

        <!-- Shop section -->
        <section class="bg-blue-50">
            <div class="relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:px-8"> 
                <div class="container m-auto space-y-8 px-6 text-gray-500 md:px-12 lg:px-20">
                    <div
                        class="justify-center gap-6 text-center md:flex md:text-left lg:items-center lg:gap-16"
                    >
                        <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                            <h1 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">
                                Sign up now and benefit up to <span class="text-red-400 dark:text-sky-300">15% </span>
                                off
                            </h1>
                            <p class="text-lg text-gray-600 dark:text-gray-500">
                                Be our member now and get 15% off first purchase at our online store.
                            </p>
                            <div class="flex flex-wrap gap-6">
                                <a
                                    href=" {{ route('deals') }} "
                                    class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:border before:border-gray-200 before:bg-gray-50 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max"
                                    >
                                    <span
                                        class="relative text-base font-semibold text-primary dark:text-white"
                                        >Shop Now</span
                                    >
                                </a>
                            </div>
                        </div>
                        {{-- Shop slide section --}}
                        <div 
                            class="max-w-4xl mx-auto relative"
                            x-data="{ activeSlide: 1, slides: [1, 2, 3, 4, 5] }"
                        >
                            <!-- Slides -->
                            <template x-for="slide in slides" :key="slide">
                            <div
                                x-show="activeSlide === slide"
                                class="p-16 font-bold text-5xl max-w-xl flex items-center text-white rounded-lg ">
                                <img :src="'/images/company/toy/' + activeSlide + '.jpeg'" 
                                    class="object-scale-down rounded-2xl max-w-sm border-4 "
                                    alt="product" />
                            </div>
                            </template>
                            
                            <!-- Prev/Next Arrows -->
                            <div class="absolute inset-0 flex">
                            <div class="flex items-center justify-start w-1/2">
                                <button 
                                class="bg-sky-300 text-blue-900 hover:text-white font-bold hover:shadow-lg rounded-full w-12 h-12 -ml-6"
                                x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                                &#8592;
                                </button>
                            </div>
                            <div class="flex items-center justify-end w-1/2">
                                <button 
                                class="bg-sky-300 text-blue-900 hover:text-white font-bold hover:shadow-lg rounded-full w-12 h-12 -mr-6"
                                x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                                &#8594;
                                </button>
                            </div>        
                            </div>

                            <!-- Buttons -->
                            <div class="absolute w-full flex items-center justify-center px-4">
                            <template x-for="slide in slides" :key="slide">
                                <button
                                class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-blue-950 hover:shadow-lg"
                                :class="{ 
                                    'bg-emerald-300': activeSlide === slide,
                                    'bg-sky-400': activeSlide !== slide 
                                }" 
                                x-on:click="activeSlide = slide"
                                ></button>
                            </template>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>     
            <div class="mx-auto mt-4 max-w-screen-xl pb-10">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                    <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                        <img width="512" alt="Canidae Pet Food Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Canidae_Pet_Food_Logo.png/512px-Canidae_Pet_Food_Logo.png?20211220195437">
                    </div>

                    <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                        <img width="200" alt="Hills TransformingLives Logo" src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Hills_TransformingLives_Logo.png?20240125012905">
                    </div>

                    <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                        <img width="128" alt="Meow mix brand logo" src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Meow_mix_brand_logo.png?20210802181954">
                    </div>

                    <div class="col-span-1 flex items-center justify-center md:col-span-3 lg:col-span-1">
                        <img width="512" alt="Royal-Canin-Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Royal-Canin-Logo.svg/512px-Royal-Canin-Logo.svg.png?20220312002836">
                    </svg>
                    </div>

                    <div class="col-span-2 flex items-center justify-center md:col-span-3 lg:col-span-1">
                        <img width="512" alt="Purina-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Purina-logo.svg/512px-Purina-logo.svg.png?20150315111951">
                    </div>
                </div>
                </div> 
        </section>

        <!-- Gallery section -->
        <section >
            <div class="flex justify-center items-center">
                <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
                <div role="main" class="flex flex-col items-center justify-center">
                    <h1 class="text-4xl font-bold leading-9 text-right text-gray-800 dark:text-gray-50">Gallery</h1>
                    <p class="text-lg leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/2 md:w-10/12 w-11/12">"Perhaps the greatest gift an animal has to offer is a permanent reminder of who are we really are."</p>
                </div>
                <div class="lg:flex items-stretch md:mt-12 mt-8">
                    <div class="lg:w-1/2">
                        <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-4">
                            <div class="sm:w-1/2 group relative">
                                <img src="{{ asset('/images/gallery/mootoo.jpeg')}}" class="w-full rounded-lg" alt="mootoo_dog" />
                                <div class="absolute opacity-0 group-hover:opacity-100 duration-300 inset-0 bg-stone-800 rounded-lg">
                                    <div class="absolute inset-1/4">
                                        <svg width="150px" height="150px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.15452 1.01195C5.11987 1.32041 7.17569 2.2474 8.72607 3.49603C9.75381 3.17407 10.8558 2.99995 12 2.99995C13.1519 2.99995 14.261 3.17641 15.2946 3.5025C16.882 2.27488 18.8427 1.31337 20.8354 1.01339C21.2596 0.95092 21.7008 1.16534 21.8945 1.55273C22.6719 3.38958 22.6983 5.57987 22.2202 7.49248L22.2128 7.52213C22.0847 8.03536 21.9191 8.69868 21.3876 8.92182C21.7827 9.89315 22 10.9466 22 12.0526C22 14.825 20.8618 17.6774 19.8412 20.2348L19.8412 20.2348L19.7379 20.4936C19.1182 22.0486 17.7316 23.1196 16.125 23.418L13.8549 23.8397C13.1549 23.9697 12.4562 23.7172 12 23.2082C11.5438 23.7172 10.8452 23.9697 10.1452 23.8397L7.87506 23.418C6.26852 23.1196 4.88189 22.0486 4.26214 20.4936L4.15891 20.2348C3.13833 17.6774 2.00004 14.825 2.00004 12.0526C2.00004 10.9466 2.21737 9.89315 2.6125 8.92182C2.08046 8.69845 1.91916 8.05124 1.7909 7.53658L1.7799 7.49248C1.32311 5.66527 1.23531 3.2968 2.10561 1.55273C2.29827 1.16741 2.72906 0.945855 3.15452 1.01195ZM6.58478 4.44052C5.45516 5.10067 4.47474 5.9652 3.71373 6.98132C3.41572 5.76461 3.41236 4.41153 3.67496 3.18754C4.68842 3.48029 5.68018 3.89536 6.58478 4.44052ZM20.2863 6.98133C19.5303 5.97184 18.5577 5.11195 17.4374 4.45347C18.3364 3.9005 19.3043 3.45749 20.3223 3.17455C20.5884 4.40199 20.5853 5.76068 20.2863 6.98133ZM8.85364 5.56694C9.81678 5.20285 10.8797 4.99995 12 4.99995C13.1204 4.99995 14.1833 5.20285 15.1464 5.56694C18.0554 6.66661 20 9.1982 20 12.0526C20 14.4676 18.9891 16.9876 18.0863 19.238L18.0862 19.2382C18.0167 19.4115 17.9478 19.5832 17.8801 19.7531C17.5291 20.6338 16.731 21.2712 15.7597 21.4516L13.4896 21.8733L12.912 20.5896C12.7505 20.2307 12.3935 19.9999 12 19.9999C11.6065 19.9999 11.2496 20.2307 11.0881 20.5896L10.5104 21.8733L8.24033 21.4516C7.26908 21.2712 6.471 20.6338 6.12001 19.7531C6.05237 19.5834 5.98357 19.4119 5.91414 19.2388L5.91395 19.2384L5.91381 19.238C5.01102 16.9876 4.00004 14.4676 4.00004 12.0526C4.00004 9.1982 5.94472 6.66661 8.85364 5.56694ZM10.5 15.9999C10.1212 15.9999 9.77497 16.2139 9.60557 16.5527C9.43618 16.8915 9.47274 17.2969 9.7 17.5999L11.2 19.5999C11.3889 19.8517 11.6852 19.9999 12 19.9999C12.3148 19.9999 12.6111 19.8517 12.8 19.5999L14.3 17.5999C14.5273 17.2969 14.5638 16.8915 14.3944 16.5527C14.225 16.2139 13.8788 15.9999 13.5 15.9999H10.5ZM9.62134 11.1212C9.62134 11.9497 8.94977 12.6212 8.12134 12.6212C7.29291 12.6212 6.62134 11.9497 6.62134 11.1212C6.62134 10.2928 7.29291 9.62125 8.12134 9.62125C8.94977 9.62125 9.62134 10.2928 9.62134 11.1212ZM16 12.4999C16.8284 12.4999 17.5 11.8284 17.5 10.9999C17.5 10.1715 16.8284 9.49994 16 9.49994C15.1716 9.49994 14.5 10.1715 14.5 10.9999C14.5 11.8284 15.1716 12.4999 16 12.4999Z" fill="#FFFFFF"/>
                                        </svg>
                                    </div>
                                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2024</p>
                                    <div class="absolute bottom-0 left-0 p-6">
                                    <a href="#" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <h2 class="text-xl font-semibold 5 text-white">Mootoo</h2>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:w-1/2 sm:mt-0 mt-4 group relative">
                                <img src="{{ asset('/images/gallery/noodle.jpeg') }}" class="w-full rounded-lg" alt="noodle_ferret" />
                                <div class="absolute opacity-0 group-hover:opacity-100 duration-300 inset-0 bg-stone-800 rounded-lg">
                                    <div class="absolute inset-1/4">
                                        <svg width="150px" height="150px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="var(--ci-primary-color, #FFFFFF)" d="M382.825,304.576a131.562,131.562,0,0,0-253.65,0l-18.248,66.15A80,80,0,0,0,188.046,472H323.954a80,80,0,0,0,77.119-101.274Zm-20.682,116.5A47.638,47.638,0,0,1,323.954,440H188.046a48,48,0,0,1-46.272-60.765l18.248-66.149a99.563,99.563,0,0,1,191.956,0l18.248,66.149A47.636,47.636,0,0,1,362.143,421.08Z" class="ci-primary"/>
                                            <path fill="var(--ci-primary-color, #FFFFFF)" d="M146.1,230.31c2.784-17.4-.908-36.027-10.4-52.463S111.92,148.9,95.463,142.611c-17.624-6.731-35.6-5.659-50.634,3.017C14.942,162.884,7.077,205.413,27.3,240.433c9.489,16.436,23.778,28.95,40.235,35.236a64.058,64.058,0,0,0,22.863,4.371,55.133,55.133,0,0,0,27.771-7.389C133.194,263.974,143.114,248.937,146.1,230.31Zm-31.6-5.058c-1.43,8.929-5.81,15.92-12.333,19.686S87.4,249,78.95,245.775c-9.613-3.671-18.115-11.251-23.941-21.342-11.2-19.4-8.538-42.8,5.82-51.092a23.483,23.483,0,0,1,11.847-3.058A31.951,31.951,0,0,1,84.044,172.5c9.613,3.673,18.115,11.252,23.941,21.343S116.124,215.091,114.5,225.252Z" class="ci-primary"/>
                                            <path fill="var(--ci-primary-color, #FFFFFF)" d="M149.566,164.017c11.362,9.083,24.337,13.813,37.458,13.812a54.965,54.965,0,0,0,11.689-1.261c33.723-7.331,54.17-45.443,45.58-84.958h0c-4.03-18.546-13.828-34.817-27.588-45.818-14.735-11.78-32.189-16.239-49.147-12.551-33.722,7.33-54.169,45.442-45.58,84.957C126.009,136.745,135.807,153.016,149.566,164.017Zm24.788-99.506a22.258,22.258,0,0,1,4.732-.5c5.948,0,12.066,2.327,17.637,6.781,8.037,6.425,13.826,16.234,16.3,27.621h0c4.76,21.895-4.906,43.368-21.107,46.89-7.361,1.6-15.305-.628-22.367-6.275-8.037-6.426-13.826-16.235-16.3-27.621C148.488,89.506,158.154,68.033,174.354,64.511Z" class="ci-primary"/>
                                            <path fill="var(--ci-primary-color, #FFFFFF)" d="M467.171,145.628c-15.028-8.676-33.013-9.748-50.634-3.017-16.457,6.287-30.746,18.8-40.235,35.236s-13.182,35.067-10.4,52.463c2.982,18.627,12.9,33.664,27.931,42.341a55.123,55.123,0,0,0,27.771,7.389,64.054,64.054,0,0,0,22.863-4.371c16.457-6.286,30.746-18.8,40.235-35.236C504.923,205.413,497.058,162.884,467.171,145.628Zm-10.18,78.805c-5.826,10.091-14.328,17.671-23.941,21.342-8.446,3.228-16.692,2.931-23.215-.837s-10.9-10.757-12.333-19.686c-1.626-10.161.686-21.314,6.513-31.4s14.328-17.67,23.941-21.343a31.955,31.955,0,0,1,11.368-2.221,23.483,23.483,0,0,1,11.847,3.058C465.529,181.631,468.194,205.028,456.991,224.433Z" class="ci-primary"/>
                                            <path fill="var(--ci-primary-color, #FFFFFF)" d="M313.287,176.568a54.965,54.965,0,0,0,11.689,1.261c13.12,0,26.1-4.729,37.458-13.812,13.759-11,23.557-27.272,27.588-45.818,8.589-39.515-11.858-77.627-45.58-84.957-16.957-3.686-34.412.77-49.147,12.551-13.76,11-23.558,27.272-27.588,45.817C259.117,131.125,279.564,169.237,313.287,176.568Zm-14.31-78.16h0c2.474-11.387,8.263-21.2,16.3-27.621,5.572-4.454,11.689-6.781,17.637-6.781a22.258,22.258,0,0,1,4.732.5c16.2,3.522,25.866,25,21.107,46.89-2.476,11.387-8.265,21.2-16.3,27.622-7.061,5.646-15,7.874-22.367,6.275C303.883,141.776,294.217,120.3,298.977,98.408Z" class="ci-primary"/>
                                        </svg>
                                    </div>
                                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">30 March 2024</p>
                                    <div class="absolute bottom-0 left-0 p-6">
                                        <a href="#" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <h2 class="text-xl font-semibold 5 text-white">Noodle</h2>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group relative">
                            <img src="{{asset('/images/gallery/jubbtieow.jpeg')}}" alt="tieow family's" class="w-full mt-8 md:mt-6 transition ease-in-out  rounded-lg" />
                            <div class="absolute opacity-0 group-hover:opacity-100 duration-300 inset-0 bg-stone-800 rounded-lg">
                                <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">8 January 2024</p>
                                <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                    <svg width="160px" height="160px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.0993 10.6602C20.2113 11.9744 19.98 13.5815 19.9801 15C19.9801 18.9062 14.7132 20 12 20C9.28677 20 4.01994 18.9062 4.01994 15C4.01995 13.5815 3.78875 11.9744 4.90066 10.6602M19.0993 10.6602C18.9048 10.4303 18.6692 10.2094 18.384 10M19.0993 10.6602C19.7993 11.0634 19.9781 9.55469 19.9801 9.0625V7.18761C19.9801 5.56261 18.8629 5.00011 17.9053 5.00011C16.9477 5.00011 15.0324 6.5625 14.394 6.5625C13.6279 6.5625 13.4804 6.40636 12 6.40636C10.5197 6.40636 10.3721 6.5625 9.60601 6.5625C8.9676 6.5625 7.05236 5 6.09476 5C5.13715 5 4.01995 5.5625 4.01995 7.1875V9.0625C4.02188 9.55469 4.20072 11.0634 4.90066 10.6602M4.90066 10.6602C5.09519 10.4303 5.33082 10.2094 5.61599 10" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M12.8258 16C12.8258 16.1726 12.4647 16.3125 12.0193 16.3125C11.574 16.3125 11.2129 16.1726 11.2129 16C11.2129 15.8274 11.574 15.6875 12.0193 15.6875C12.4647 15.6875 12.8258 15.8274 12.8258 16Z" stroke="#FFFFFF" stroke-width="1.5"/>
                                        <path d="M15.5 13.5938C15.5 14.0252 15.2834 14.375 15.0161 14.375C14.7489 14.375 14.5323 14.0252 14.5323 13.5938C14.5323 13.1623 14.7489 12.8125 15.0161 12.8125C15.2834 12.8125 15.5 13.1623 15.5 13.5938Z" stroke="#FFFFFF" stroke-width="1.5"/>
                                        <path d="M9.5 13.5938C9.5 14.0252 9.28336 14.375 9.01613 14.375C8.74889 14.375 8.53226 14.0252 8.53226 13.5938C8.53226 13.1623 8.74889 12.8125 9.01613 12.8125C9.28336 12.8125 9.5 13.1623 9.5 13.5938Z" stroke="#FFFFFF" stroke-width="1.5"/>
                                        <path d="M22.0004 15.4688C21.5165 15.1562 19.4197 14.375 18.6133 14.375" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M20.3871 17.9688C19.9033 17.6562 18.7742 16.875 17.9678 16.875" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M2 15.4688C2.48387 15.1562 4.58065 14.375 5.3871 14.375" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M3.61279 17.9688C4.09667 17.6562 5.2257 16.875 6.03215 16.875" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                    <a href="#" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <h2 class="text-xl font-semibold 5 text-white">Jubtioew's family</h2>
                                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
                        <div class="group relative">
                            <img src="{{asset('/images/gallery/Jummeng.jpeg')}}" alt="sitting place" class="w-full rounded-lg" />
                            <div class="absolute opacity-0 group-hover:opacity-100 duration-300 inset-0 bg-stone-800 rounded-lg">
                            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">20 February 2024</p>
                            <div class="absolute bottom-0 left-0 md:p-10 p-6">
                                <svg width="150px" height="150px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.15452 1.01195C5.11987 1.32041 7.17569 2.2474 8.72607 3.49603C9.75381 3.17407 10.8558 2.99995 12 2.99995C13.1519 2.99995 14.261 3.17641 15.2946 3.5025C16.882 2.27488 18.8427 1.31337 20.8354 1.01339C21.2596 0.95092 21.7008 1.16534 21.8945 1.55273C22.6719 3.38958 22.6983 5.57987 22.2202 7.49248L22.2128 7.52213C22.0847 8.03536 21.9191 8.69868 21.3876 8.92182C21.7827 9.89315 22 10.9466 22 12.0526C22 14.825 20.8618 17.6774 19.8412 20.2348L19.8412 20.2348L19.7379 20.4936C19.1182 22.0486 17.7316 23.1196 16.125 23.418L13.8549 23.8397C13.1549 23.9697 12.4562 23.7172 12 23.2082C11.5438 23.7172 10.8452 23.9697 10.1452 23.8397L7.87506 23.418C6.26852 23.1196 4.88189 22.0486 4.26214 20.4936L4.15891 20.2348C3.13833 17.6774 2.00004 14.825 2.00004 12.0526C2.00004 10.9466 2.21737 9.89315 2.6125 8.92182C2.08046 8.69845 1.91916 8.05124 1.7909 7.53658L1.7799 7.49248C1.32311 5.66527 1.23531 3.2968 2.10561 1.55273C2.29827 1.16741 2.72906 0.945855 3.15452 1.01195ZM6.58478 4.44052C5.45516 5.10067 4.47474 5.9652 3.71373 6.98132C3.41572 5.76461 3.41236 4.41153 3.67496 3.18754C4.68842 3.48029 5.68018 3.89536 6.58478 4.44052ZM20.2863 6.98133C19.5303 5.97184 18.5577 5.11195 17.4374 4.45347C18.3364 3.9005 19.3043 3.45749 20.3223 3.17455C20.5884 4.40199 20.5853 5.76068 20.2863 6.98133ZM8.85364 5.56694C9.81678 5.20285 10.8797 4.99995 12 4.99995C13.1204 4.99995 14.1833 5.20285 15.1464 5.56694C18.0554 6.66661 20 9.1982 20 12.0526C20 14.4676 18.9891 16.9876 18.0863 19.238L18.0862 19.2382C18.0167 19.4115 17.9478 19.5832 17.8801 19.7531C17.5291 20.6338 16.731 21.2712 15.7597 21.4516L13.4896 21.8733L12.912 20.5896C12.7505 20.2307 12.3935 19.9999 12 19.9999C11.6065 19.9999 11.2496 20.2307 11.0881 20.5896L10.5104 21.8733L8.24033 21.4516C7.26908 21.2712 6.471 20.6338 6.12001 19.7531C6.05237 19.5834 5.98357 19.4119 5.91414 19.2388L5.91395 19.2384L5.91381 19.238C5.01102 16.9876 4.00004 14.4676 4.00004 12.0526C4.00004 9.1982 5.94472 6.66661 8.85364 5.56694ZM10.5 15.9999C10.1212 15.9999 9.77497 16.2139 9.60557 16.5527C9.43618 16.8915 9.47274 17.2969 9.7 17.5999L11.2 19.5999C11.3889 19.8517 11.6852 19.9999 12 19.9999C12.3148 19.9999 12.6111 19.8517 12.8 19.5999L14.3 17.5999C14.5273 17.2969 14.5638 16.8915 14.3944 16.5527C14.225 16.2139 13.8788 15.9999 13.5 15.9999H10.5ZM9.62134 11.1212C9.62134 11.9497 8.94977 12.6212 8.12134 12.6212C7.29291 12.6212 6.62134 11.9497 6.62134 11.1212C6.62134 10.2928 7.29291 9.62125 8.12134 9.62125C8.94977 9.62125 9.62134 10.2928 9.62134 11.1212ZM16 12.4999C16.8284 12.4999 17.5 11.8284 17.5 10.9999C17.5 10.1715 16.8284 9.49994 16 9.49994C15.1716 9.49994 14.5 10.1715 14.5 10.9999C14.5 11.8284 15.1716 12.4999 16 12.4999Z" fill="#FFFFFF"/>
                                </svg>
                                <a href="#" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                    <h2 class="text-xl font-semibold 5 text-white">Jummeng's family</h2>
                                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-4 md:mt-6 mt-4">
                                <div class="group relative w-full">
                                    <img class="w-full rounded-lg transition ease-in-out" 
                                    src="{{asset('images/gallery/nomphong.jpeg')}}" 
                                    alt="chinchilla_n" />
                                    <div class="absolute opacity-0 group-hover:opacity-100 duration-300 inset-0 bg-stone-800 rounded-lg">
                                        <div class="absolute inset-1/4">
                                            <svg fill="#FFFFFF" height="150px" width="150px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                viewBox="0 0 512 512" xml:space="preserve">
                                                    <path d="M501.404,279.462c-2.869-8.763-12.299-13.537-21.062-10.673l-22.835,7.475c-2.548-13.633-6.225-27.437-11.008-41.176
                                                        C485.4,220.098,512,182.509,512,139.375c0-56.57-46.023-102.594-102.594-102.594c-35.396,0-67.572,17.943-86.224,46.943
                                                        c-43.799-21.545-90.548-21.555-134.365,0c-18.652-28.998-50.828-46.943-86.224-46.943C46.023,36.782,0,82.805,0,139.375
                                                        c0,43.134,26.6,80.722,65.501,95.713c-4.779,13.744-8.456,27.549-11.004,41.178l-22.84-7.476
                                                        c-8.766-2.865-18.193,1.911-21.062,10.673c-2.868,8.764,1.91,18.194,10.673,21.062l29.249,9.574
                                                        c-1.003,22.293,1.266,44.993,8.899,66.152L21.832,387.1c-8.859,2.557-13.968,11.812-11.41,20.67
                                                        c2.558,8.862,11.815,13.968,20.67,11.41l43.973-12.694c38.777,55.062,114.257,68.733,180.933,68.733
                                                        c66.73,0,142.172-13.693,180.934-68.733l43.973,12.693c8.86,2.559,18.115-2.553,20.67-11.41c2.558-8.859-2.551-18.114-11.41-20.67
                                                        l-37.584-10.849c7.65-21.205,9.898-43.914,8.9-66.151l29.249-9.574C499.495,297.656,504.273,288.226,501.404,279.462z
                                                        M312.803,115.928c-3.773,49.432-28.621,89.521-56.803,89.521s-53.029-40.087-56.803-89.521
                                                        C235.169,96.663,274.139,95.223,312.803,115.928z M256,378.54c-19.574,0-34.756-9.771-34.756-18.177s15.182-18.176,34.756-18.176
                                                        s34.756,9.77,34.756,18.176S275.574,378.54,256,378.54z M420.379,366.954l-41.816-12.071c-8.863-2.561-18.115,2.551-20.67,11.41
                                                        c-2.558,8.859,2.551,18.114,11.41,20.67l32.864,9.486c-30.674,33.537-83.885,43.309-129.47,45.058v-31.083
                                                        c29.885-5.498,51.452-25.52,51.452-50.062c0-28.916-29.934-51.567-68.147-51.567s-68.147,22.652-68.147,51.567
                                                        c0,24.543,21.566,44.563,51.452,50.062v31.083c-45.602-1.751-98.803-11.528-129.47-45.058l32.863-9.486
                                                        c8.859-2.557,13.968-11.812,11.41-20.67c-2.557-8.859-11.806-13.969-20.67-11.41l-41.814,12.07
                                                        c-5.193-13.41-7.815-28.704-7.926-45.993l49.176,16.098c8.79,2.873,18.199-1.932,21.062-10.673
                                                        c2.868-8.763-1.91-18.194-10.673-21.062l-56.727-18.569c3.041-18.231,8.475-36.999,16.148-55.519l0.168-0.404
                                                        c4.464-9.918-1.616-21.413-12.337-23.296c-33.099-5.815-57.123-34.48-57.123-68.159c0-38.158,31.044-69.202,69.202-69.202
                                                        c27.211,0,51.597,15.721,62.879,40.279C168.041,181.238,205.856,238.84,256,238.84c56.462,0,88.326-67.681,90.527-128.388
                                                        c11.282-24.559,35.669-40.279,62.879-40.279c38.158,0,69.202,31.044,69.202,69.202c0,33.681-24.024,62.346-57.123,68.159
                                                        c-10.533,1.849-16.644,13.014-12.514,22.888c7.86,18.79,13.416,37.833,16.499,56.33l-56.733,18.571
                                                        c-8.763,2.868-13.541,12.298-10.673,21.062c2.868,8.76,12.292,13.541,21.062,10.673l49.178-16.098
                                                        C428.193,338.248,425.572,353.543,420.379,366.954z M193.363,260.946c0.011-12.198-9.868-22.095-22.066-22.106
                                                        c-12.198-0.011-22.095,9.868-22.106,22.066c-0.011,12.198,9.868,22.095,22.066,22.106
                                                        C183.456,283.024,193.353,273.144,193.363,260.946z M361.942,261.092c0.011-12.198-9.868-22.095-22.066-22.106
                                                        c-12.198-0.011-22.095,9.868-22.106,22.066s9.868,22.095,22.066,22.106S361.931,273.29,361.942,261.092z"/>
                                                </svg>
                                        </div>
                                        <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">3 March 2024</p>
                                        <div class="absolute bottom-0 left-0 p-6">
                                        <a href="#" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                            <h2 class="text-xl font-semibold 5 text-white">Nomphong</h2>
                                            <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="group relative w-full sm:mt-0 mt-4">
                                <img class="w-full rounded-lg transition ease-in-out "
                                    src="{{asset('/images/gallery/guandang.jpeg')}}"
                                    alt="guangdang_the_cat" />
                                <div class="absolute opacity-0 group-hover:opacity-100 duration-300 inset-0 bg-stone-800 rounded-lg">
                                    <div class="absolute inset-1/4">
                                        <svg width="160px" height="160px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.0993 10.6602C20.2113 11.9744 19.98 13.5815 19.9801 15C19.9801 18.9062 14.7132 20 12 20C9.28677 20 4.01994 18.9062 4.01994 15C4.01995 13.5815 3.78875 11.9744 4.90066 10.6602M19.0993 10.6602C18.9048 10.4303 18.6692 10.2094 18.384 10M19.0993 10.6602C19.7993 11.0634 19.9781 9.55469 19.9801 9.0625V7.18761C19.9801 5.56261 18.8629 5.00011 17.9053 5.00011C16.9477 5.00011 15.0324 6.5625 14.394 6.5625C13.6279 6.5625 13.4804 6.40636 12 6.40636C10.5197 6.40636 10.3721 6.5625 9.60601 6.5625C8.9676 6.5625 7.05236 5 6.09476 5C5.13715 5 4.01995 5.5625 4.01995 7.1875V9.0625C4.02188 9.55469 4.20072 11.0634 4.90066 10.6602M4.90066 10.6602C5.09519 10.4303 5.33082 10.2094 5.61599 10" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M12.8258 16C12.8258 16.1726 12.4647 16.3125 12.0193 16.3125C11.574 16.3125 11.2129 16.1726 11.2129 16C11.2129 15.8274 11.574 15.6875 12.0193 15.6875C12.4647 15.6875 12.8258 15.8274 12.8258 16Z" stroke="#FFFFFF" stroke-width="1.5"/>
                                            <path d="M15.5 13.5938C15.5 14.0252 15.2834 14.375 15.0161 14.375C14.7489 14.375 14.5323 14.0252 14.5323 13.5938C14.5323 13.1623 14.7489 12.8125 15.0161 12.8125C15.2834 12.8125 15.5 13.1623 15.5 13.5938Z" stroke="#FFFFFF" stroke-width="1.5"/>
                                            <path d="M9.5 13.5938C9.5 14.0252 9.28336 14.375 9.01613 14.375C8.74889 14.375 8.53226 14.0252 8.53226 13.5938C8.53226 13.1623 8.74889 12.8125 9.01613 12.8125C9.28336 12.8125 9.5 13.1623 9.5 13.5938Z" stroke="#FFFFFF" stroke-width="1.5"/>
                                            <path d="M22.0004 15.4688C21.5165 15.1562 19.4197 14.375 18.6133 14.375" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M20.3871 17.9688C19.9033 17.6562 18.7742 16.875 17.9678 16.875" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M2 15.4688C2.48387 15.1562 4.58065 14.375 5.3871 14.375" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M3.61279 17.9688C4.09667 17.6562 5.2257 16.875 6.03215 16.875" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </div>
                                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">2 May 2024</p>
                                    <div class="absolute bottom-0 left-0 p-6">
                                        <a href="#" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                                        <h2 class="text-xl font-semibold 5 text-white">Guangdang</h2>
                                        <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


        <!-- meet our team section -->
        <section>

            <div class="py-20">
                <div class="xl:container mx-auto px-6 md:px-12">
                <div class="mb-16 md:w-2/3 lg:w-1/2">
                    <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
                    Meet our expert team
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        Together, these members of the veterinary team collaborate to deliver compassionate, high-quality care to animals and support pet owners in providing the best possible life for their pets. 
                    </p>
                </div>
                <div class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img
                        class="mx-auto h-[26rem] w-full grayscale object-cover object-top transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="{{asset('images/company/vet/1.png')}}"
                        alt="vet1"
                        loading="lazy"
                        width="640"
                        height="805"
                    />
                    <div class="group absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Elsie Salzberg</h4>
                        <span class="block text-sm text-gray-500">Medicine Unit</span>
                        </div>
                        <p class="mt-8 hidden group-hover:block text-gray-300 dark:text-gray-600">Focusing on preventive care measures, including vaccinations, parasite control and dental care.</p>
                    </div>
                    
                    </div>
                    <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img
                        class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="{{asset('images/company/vet/2.png')}}"
                        alt="vet2"
                        loading="lazy"
                        width="640"
                        height="805"
                    />
                    <div class="group absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Erma Taylor</h4>
                        <span class="block text-sm text-gray-500">Cardiologist Specialist</span>
                        </div>
                        <p class="mt-8 hidden group-hover:block text-gray-300 dark:text-gray-600">Monitor the progress of treatment and the overall cardiovascular health of the animal.</p>
                    </div>
                    
                    </div>
                    <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img
                        class="mx-auto h-[26rem] w-full grayscale object-cover object-top transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="{{asset('images/company/vet/3.png')}}"
                        alt="vet3"
                        loading="lazy"
                        width="640"
                        height="805"
                    />
                    <div class="group absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Sierra Lohn</h4>
                        <span class="block text-sm text-gray-500">Veterinary Specialists</span>
                        </div>
                        <p class="mt-8 hidden group-hover:block text-gray-300 dark:text-gray-600">We educate pet owners about animal health, proper nutrition, preventive care, and treatment options.</p>
                    </div>
                    
                    </div>
                    <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img
                        class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="{{asset('images/company/vet/4.png')}}"
                        alt="vet4"
                        loading="lazy"
                        width="640"
                        height="805"
                    />
                    <div class="group absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                        <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Joe Eustis</h4>
                        <span class="block text-sm text-gray-500">Exotic Animal Veterinarians</span>
                        </div>
                        <p class="mt-8 hidden group-hover:block text-gray-300 dark:text-gray-600">Specializes in the medical care and treatment of non-traditional or exotic animals, which can include species beyond cats and dogs</p>
                    </div>
                    
                    </div>
                </div>
                </div>
            </div>          
        </section>

        <!-- FAQ section -->
        <section class="bg-blue-50">
            <!-- component -->
            <div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
                <h1 class="text-center dark:text-gray-500 lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">FAQ's</h1>
                <h1 class="text-center dark:text-zinc-300 lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">Freqeuntly Asked question</h1>

                <div class="lg:w-8/12 w-full mx-auto">
                    <!-- Question 1 -->
                    <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p class="flex justify-center items-center font-medium text-base leading-6 md:leading-4 text-gray-800"><span class="lg:mr-6 mr-4 dark:text-white lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span> How do i know if a product is available in stocks?</p>
                            </div>
                            <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                                <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
                        </div>
                    </div>

                    <!-- Question 2 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q2.</span> How can i find the prices or get other information about nutrion products?</p>
                            </div>
                            <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                                <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
                        </div>
                    </div>

                    <!-- Question 3 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q3.</span>How many collections come out every year?</p>
                            </div>
                            <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                                <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
                        </div>
                    </div>

                    <!-- Question 4 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q4.</span>Are all of the booking system and product features collections on the website?</p>
                            </div>
                            <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                                <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
                        </div>
                    </div>

                    <!-- Question 5 -->

                    <hr class="w-full lg:mt-10 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q5.</span>Can I rush to the clinic with emergency case pet?</p>
                            </div>
                            <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                                <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
                        </div>
                    </div>

                    <hr class="w-full lg:mt-10 my-8" />
                </div>
            </div>

            <script>
                let elements = document.querySelectorAll("[data-menu]");
                for (let i = 0; i < elements.length; i++) {
                let main = elements[i];

                main.addEventListener("click", function () {
                let element = main.parentElement.parentElement;
                let indicators = main.querySelectorAll("img");
                let child = element.querySelector("#menu");
                let h = element.querySelector("#mainHeading>div>p");

                h.classList.toggle("font-semibold");
                child.classList.toggle("hidden");
                // console.log(indicators[0]);
                indicators[0].classList.toggle("rotate-180");
                });
                }
            </script>
        </section>
@endsection
