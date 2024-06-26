<section>
    <div x-data="{
      bannerVisible: false,
      }"
      x-show="bannerVisible"
      x-transition:enter="transition ease-out duration-500"
      x-transition:enter-start="-translate-y-10"
      x-transition:enter-end="translate-y-0"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="translate-y-0"
      x-transition:leave-end="-translate-y-10"
      x-init="
          setTimeout(()=>{ bannerVisible = true });
      "
      class="w-full bg-white px-4 md:px-10 top-0 border-b"
      x-cloak
    >
      <div class="relative pr-6 h-16">
        <div class="flex h-full">
          <div class="p-2 bg-purple-300 rounded-full self-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="square" stroke-linejoin="arcs"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </div>
          <div class="mx-4 self-center flex flex-col ">
            <div class="-pb-2">
              <p
              class="align-middle text-xs font-semibold text-black md:text-base self-center"
              >
                Contact Us.
              </p>
            </div>
            <div class="">
              <a href="mailto:petpalclinic@petpal.com" class="font-light">petpalclinic@petpal.com</a> 
            </div>
          </div>
          <div class="ml-10 p-2 bg-purple-300 rounded-full self-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          </div>
          <div class="ml-4 self-center flex flex-col">
            <div class="-pb-2">
              <p
              class="text-center align-middle text-xs font-semibold text-black md:text-base self-center"
              >
              Mon to Fri: 8:00 AM. - 10:00 PM.
              </p>
            </div>
            <div class="">
              <a href="tel:+0968010539" class="font-light">+096 801 0539</a> 
            </div>
          </div>
        </div>
        <button
          @click="bannerVisible=false;"
          class="absolute right-0 top-1/2 -translate-y-1/2 text-dark-4 duration-200 hover:text-zinc-500 active:text-zinc-400"
        >
          <svg
            width="14"
            height="14"
            viewBox="0 0 14 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_2386_1123)">
              <path
                d="M1 1L7 7M7 7L13 13M7 7L13 1M7 7L1 13"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
            <defs>
              <clipPath id="clip0_2386_1123">
                <rect width="14" height="14" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </button>
      </div>
    </div>
</section>