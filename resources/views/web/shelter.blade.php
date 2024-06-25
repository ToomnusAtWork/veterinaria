<x-app-layout>
  @include('layouts.page-navigation')
  <div class="bg-[url('/public/images/company/banner3.png')] w-full bg-cover bg-no-repeat min-h-screen">
    <div class="flex">
        <div class="absolute h-full inset-y-1/2">
            <h1 class="flex text-8xl sm:ml-32 ml-10 font-semibold text-black">Shelter</h1>
        </div>
    </div>
  </div>
    <section class="text-gray-400 bg-violet-200 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col">
            <div class="h-1 bg-gray-800 rounded overflow-hidden">
              <div class="w-24 h-full bg-indigo-500"></div>
            </div>
            <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
              <h1 class="sm:w-2/5 text-black font-medium title-font text-2xl mb-2 sm:mb-0">Ready to adopt!</h1>
              <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Welcoming a pet into your family is a big decision, but chances are good that your life will be better than ever with the companionship of your new best friend.</p>
            </div>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1203x503">
              </div>
              <h2 class="text-xl font-medium title-font text-white mt-5">Moody</h2>
              <p class="text-base leading-relaxed mt-2">Swag shoindxgoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
              <a class="text-indigo-400 inline-flex items-center mt-3">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1204x504">
              </div>
              <h2 class="text-xl font-medium title-font text-white mt-5">Twinkle</h2>
              <p class="text-base leading-relaxed mt-2">Swag shoindxigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
              <a class="text-indigo-400 inline-flex items-center mt-3">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1205x505">
              </div>
              <h2 class="text-xl font-medium title-font text-white mt-5">Fisco</h2>
              <p class="text-base leading-relaxed mt-2">Swag shoindegoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
              <a class="text-indigo-400 inline-flex items-center mt-3">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>