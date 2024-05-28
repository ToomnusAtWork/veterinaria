<x-app-layout>
  <x-slot name="mainLogoRoute">
    {{ route('home') }}
  </x-slot>


    <div class="relative">
        {{-- <img class="w-full" src="{{ asset('images\banner-salon.png') }}" alt="Banner image"> --}}
        {{-- <img class="max-h-fit w-full" src="{{ asset('images\salon1.png') }}" alt="Banner image"> --}}
        <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->
<section class="bg-[#E4F1FD]">
  <div class="container mx-auto px-8 py-4 lg:py-24 relative flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 flex flex-col items-center lg:items-start">
          <h1 class="text-center lg:text-left text-3xl sm:text-7xl font-bold text-blue-700 leading-tight mb-4">PetPal</h1>
          <p class="text-center lg:text-left sm:text-lg text-gray-500 lg:pr-40 leading-relaxed">PetPal focuses on providing top-quality services and offers personalized advice tailored just for you. Our team specializes in customizing Pets Hotel experiences to meet the individual needs of each guest. My Buddy Pet Clinic emphasizes service quality, location, and the professionalism of our team.</p>
          <a href="#" class="bg-[#8AC0CF] hover:bg-blue-500 mt-8 py-3 px-8 text-lg rounded-full font-bold uppercase text-white tracking-widest">Book an appointment.</a>
          <div class="mt-16 lg:mt-24 flex">
              <span class="w-12 h-1 mx-1 bg-blue-400"></span>
              <span class="w-12 h-1 mx-1 bg-blue-200"></span>
              <span class="w-12 h-1 mx-1 bg-blue-200"></span>
          </div>
      </div>
      <div class="w-full sm:w-2/4  top-0 right-0 bottom-0 mt-16 lg:mr-8">
        <img src="{{url('/images/company/happydog.svg')}}" alt="HappyPetIMG">
        </div>
  </div>
</section>

<!-- our ability section -->
<section class="mx-16 pt-16 lg:pt-[100px] pb-12 lg:pb-[90px]">
    <div class="py-16">
        <div class="xl:container m-auto space-y-16 px-6 text-gray-500 md:px-12">
          <div>
            <h1 class="text-5xl">Why us?</h1>
            <h2 class="mt-4 text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
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
                  Neque Dolor, alias quae, quibusdam accusantium, laudantium recusandae tenetur fugiat
                  non cum doloribus aperiam voluptates nostrum.
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
                  Neque Dolor, alias quae, quibusdam accusantium, laudantium recusandae tenetur fugiat
                  non cum doloribus aperiam voluptates nostrum.
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
                  Neque Dolor, alias quae, quibusdam accusantium, laudantium recusandae tenetur fugiat
                  non cum doloribus aperiam voluptates nostrum.
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
                  Neque Dolor, alias quae, quibusdam accusantium, laudantium recusandae tenetur fugiat
                  non cum doloribus aperiam voluptates nostrum.
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
                    Neque Dolor, alias quae, quibusdam accusantium, laudantium recusandae tenetur fugiat
                    non cum doloribus aperiam voluptates nostrum.
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>                          
</section>

<!-- shop section -->
<section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="py-16"> 
        <div class="container m-auto space-y-8 px-6 text-gray-500 md:px-12 lg:px-20">
          <div
            class="justify-center gap-6 text-center md:flex md:text-left lg:items-center lg:gap-16"
          >
            <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
              <h1 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">
                Buy now and benefit up to <span class="text-primary dark:text-sky-300">30% off</span>
              </h1>
              <p class="text-lg text-gray-600 dark:text-gray-300">
                Be part of millions people around the world using tailus in modern User Interfaces.
              </p>
              <div class="flex flex-wrap gap-6">
                <a
                  href="#"
                  class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max"
                >
                  <span class="relative text-base font-semibold text-white dark:text-dark"
                    >Shop now</span
                  >
                </a>
                <a
                  href="#"
                  class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:border before:border-gray-200 before:bg-gray-50 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max"
                >
                  <span
                    class="relative text-base font-semibold text-primary dark:text-white"
                    >Shop Now</span
                  >
              </a>
            </div>
            </div>
            <div class="grid grid-cols-5 grid-rows-4 gap-4 md:w-5/12 lg:w-6/12">
              <div class="col-span-2 row-span-4">
                <img
                  src="images/products/kushagra.webp"
                  class="rounded-full"
                  width="640"
                  height="960"
                  alt="shoes"
                  loading="lazy"
                />
              </div>
              <div class="col-span-2 row-span-2">
                <img
                  src="images/products/iman.webp"
                  class="h-full w-full rounded-xl object-cover object-top"
                  width="640"
                  height="640"
                  alt="shoe"
                  loading="lazy"
                />
              </div>
              <div class="col-span-3 row-span-3">
                <img
                  src="images/products/daniel.webp"
                  class="h-full w-full rounded-xl object-cover object-top"
                  width="640"
                  height="427"
                  alt="shoes"
                  loading="lazy"
                />
              </div>
            </div>
          </div>
        </div>
      </div>     
      <div class="mx-auto mt-10 max-w-screen-xl">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
            <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                <img width="512" alt="Canidae Pet Food Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Canidae_Pet_Food_Logo.png/512px-Canidae_Pet_Food_Logo.png?20211220195437">
            </div>

            <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                <img width="256" alt="Hills TransformingLives Logo" src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Hills_TransformingLives_Logo.png?20240125012905">
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

<!-- our service section -->
<section>
    <!-- component -->
<div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
    <div class="container xl:max-w-6xl mx-auto px-4">
        <!-- Heading start -->
        <header class="text-center mx-auto mb-12 lg:px-20">
            <h2 class="text-2xl leading-normal mb-2 font-bold text-black">What We Do</h2>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
                <circle cx="50.1" cy="30.4" r="5" class="stroke-primary" style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
            </svg>
            <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Save time managing advertising &amp; Content for your business.</p>
        </header>
        <!-- End heading -->
        <!-- row -->
        <div class="flex flex-wrap flex-row -mx-4 text-center">
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">SEO Services</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                            <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Social Content</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-badge-ad" viewBox="0 0 16 16">
                            <path d="M3.7 11l.47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11h1.2zm1.503-4.852l.734 2.426H4.416l.734-2.426h.053zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z"></path>
                            <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Creative ads</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Brand Identity</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Budget &amp; Marketing</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
            <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <!-- service block -->
                <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Optimize conversions</h3>
                    <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
                </div>
                <!-- end service block -->
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
</section>

<!-- team section -->
<section>
    <div class="py-20">
        <div class="xl:container mx-auto px-6 md:px-12">
          <div class="mb-16 md:w-2/3 lg:w-1/2">
            <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
              Meet Our Team
            </h2>
            <p class="text-gray-600 dark:text-gray-300">
              Tailus prides itself not only on award-winning technology, but also on the talent of its
              people of some of the brightest minds and most experienced executives in business.
            </p>
          </div>
          <div class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
              <img
                class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                src="images/woman1.jpg"
                alt="woman"
                loading="lazy"
                width="640"
                height="805"
              />
              <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                <div>
                  <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Hentoni Doe</h4>
                  <span class="block text-sm text-gray-500">CEO-Founder</span>
                </div>
                <p class="mt-8 text-gray-300 dark:text-gray-600">Quae labore quia tempora dolor impedit. Possimus, sint ducimus ipsam?</p>
              </div>
              
            </div>
            <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
              <img
                class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                src="images/woman.jpg"
                alt="woman"
                loading="lazy"
                width="640"
                height="805"
              />
              <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                <div>
                  <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Hentoni Doe</h4>
                  <span class="block text-sm text-gray-500">CEO-Founder</span>
                </div>
                <p class="mt-8 text-gray-300 dark:text-gray-600">Quae labore quia tempora dolor impedit. Possimus, sint ducimus ipsam?</p>
              </div>
              
            </div>
            <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
              <img
                class="mx-auto h-[26rem] w-full grayscale object-cover object-top transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                src="images/man.jpg"
                alt="woman"
                loading="lazy"
                width="640"
                height="805"
              />
              <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                <div>
                  <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Hentoni Doe</h4>
                  <span class="block text-sm text-gray-500">CEO-Founder</span>
                </div>
                <p class="mt-8 text-gray-300 dark:text-gray-600">Quae labore quia tempora dolor impedit. Possimus, sint ducimus ipsam?</p>
              </div>
              
            </div>
            <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
              <img
                class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                src="images/woman1.jpg"
                alt="woman"
                loading="lazy"
                width="640"
                height="805"
              />
              <div class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                <div>
                  <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Hentoni Doe</h4>
                  <span class="block text-sm text-gray-500">CEO-Founder</span>
                </div>
                <p class="mt-8 text-gray-300 dark:text-gray-600">Quae labore quia tempora dolor impedit. Possimus, sint ducimus ipsam?</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>      
</section> 

<!-- FAQ section -->
<section>
    <!-- component -->
<div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
    <h1 class="text-center dark:text-white lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">FAQ's</h1>
    <h1 class="text-center dark:text-white lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">Freqeuntly Asked question</h1>

    <div class="lg:w-8/12 w-full mx-auto">
        <!-- Question 1 -->
        <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 md:leading-4 text-gray-800"><span class="lg:mr-6 mr-4 dark:text-white lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span> How do i know if a product is available in boutiques?</p>
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
                    <p class="flex justify-center items-center  font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q2.</span> How can i find the prices or get other information about chanel products?</p>
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
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q4.</span>Are all of the fashion collections features on the website?</p>
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
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q5.</span>Where do i find products that i have seen in magazines or Social Media?</p>
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

<!-- footer section -->
<footer class="bg-[#262626] ">
      <div class="container px-6 py-8 mx-auto">
          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
              <div class="sm:col-span-2">
                  <h1 class="max-w-lg text-xl font-semibold tracking-tight text-cyan-950 xl:text-2xl dark:text-white">Getting to know you.</h1>
  
                  <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                      <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Email Address">
              
                      <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-blue-900 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                          Contact us
                      </button>
                  </div>
              </div>
  
              <div>
                  <p class="font-semibold text-slate-50 dark:text-white">Quick Link</p>
  
                  <div class="flex flex-col items-start mt-5 space-y-2">
                      <a href="#" class="text-slate-50 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Home</a>
                      <a href="#" class="text-slate-50 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Who We Are</a>
                      <a href="#" class="text-slate-50 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Our Philosophy</a>
                  </div>
              </div>
  
              <div>
                  <p class="font-semibold text-gray-800 dark:text-white">Industries</p>
  
                  <div class="flex flex-col items-start mt-5 space-y-2">
                      <a href="#" class="text-slate-50 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Retail & E-Commerce</a>
                      <a href="#" class="text-slate-50 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Information Technology</a>
                      <a href="#" class="text-slate-50 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Finance & Insurance</a>
                  </div>
              </div>
          </div>
          
          <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-700">
          
          <div class="flex items-center justify-between">
              <a href="#">
                  <img src="{{ asset('images/company/logo.png') }}" alt="" class="h-12 w-30">
              </a>
              
              <div class="flex -mx-2">
                  <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Reddit">
                      <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                          </path>
                      </svg>
                  </a>
  
                  <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Facebook">
                      <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                          </path>
                      </svg>
                  </a>
  
                  <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Github">
                      <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                          </path>
                      </svg>
                  </a>
              </div>
          </div>
      </div>
</footer>
<script>

  // hide offer-banner when user clicks on close
  document.getElementById("offer-banner-close").addEventListener("click", function() {
    document.getElementById("offer-banner").style.display = "none";
  });

</script>

</x-app-layout>
