<aside class="group/sidebar flex flex-col shrink-0 lg:w-[300px] w-[250px] transition-all duration-300 ease-in-out -translate-x-full lg:translate-x-0 m-0 fixed z-40 inset-y-0 left-0 lg:bg-light/30 bg-light border-r border-r-dashed border-r-neutral-200 sidenav fixed-start" id="sidenav-main">
    <div class="h-full bg-neutral-900">
        <div class="flex shrink-0 px-8 items-center justify-between h-[90px]">
         <x-application-logo />
            {{-- <div class="relative ml-5 group"> <a href="javascript:void(0)" class="lg:hidden flex" onclick="(function(){document.querySelector('.group\\/sidebar').classList.toggle('-translate-x-full');})();"> <span class="p-0 m-0 -mr-1 leading-none shrink-0 rounded-[.195rem] text-secondary-dark  group-hover:text-primary group-[.open]:text-primary"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg> </span> </a> 
            </div> --}}
        </div>
        {{-- <div class="hidden border-b border-dashed lg:block border-neutral-700/70"></div> --}}

        {{-- <div class="hidden border-b border-dashed lg:block border-neutral-700/70"></div> --}}
        <div class="relative pl-3">
            <div class="flex flex-col w-full font-medium">
                <!-- menu item -->
                <div> <span class="select-none flex items-center px-4 py-3 cursor-pointer my-[.4rem] rounded-xl"> <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-muted hover:text-white">Profile</a> </span> </div> <!-- menu item -->
                <div> <span class="select-none flex items-center px-4 py-3 cursor-pointer my-[.4rem] rounded-xl"> <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-muted hover:text-white">Calendar</a> </span> </div> <!-- menu item -->
                <div> <span class="select-none flex items-center px-4 py-3 cursor-pointer my-[.4rem] rounded-xl"> <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-muted hover:text-white">Settings</a> </span> </div> <!-- menu item -->
                <div class="block pt-5 pb-[.15rem]">
                    <div class="px-4 py-[.65rem]"> <span class="font-semibold text-[0.95rem] uppercase dark:text-neutral-500/80 text-white/90">More</span> </div>
                </div> <!-- menu item -->
                <div> <span class="select-none flex items-center px-4 py-3 cursor-pointer my-[.4rem] rounded-xl"> <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-muted hover:text-white">Activity</a> </span> </div> <!-- menu item -->
                <div> <span class="select-none flex items-center px-4 py-3 cursor-pointer my-[.4rem] rounded-xl"> <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-muted hover:text-white">Tasks</a> </span> </div> <!-- menu item -->
                <div> <span class="select-none flex items-center px-4 py-3 cursor-pointer my-[.4rem] rounded-xl"> <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-muted hover:text-white">Account</a> </span> </div> <!-- menu item -->
                <div> <span class="select-none flex items-center px-4 py-3 cursor-pointer my-[.4rem] rounded-xl"> <a href="javascript:;" class="flex items-center flex-grow text-[1.15rem] dark:text-neutral-400/75 text-muted hover:text-white">Log Out</a> </span> </div>
            </div>
        </div>
    </div>
</aside>