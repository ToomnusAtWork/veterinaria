{{-- @php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2.5 pt-1 bg-white rounded-md text-md font-medium leading-5 text-fuchsa-950 focus:outline-none focus:border-blue-300 transition duration-300 ease-in-out'
            : 'inline-flex items-center px-2.5 pt-1 rounded-md text-md font-medium leading-5 text-gray-700 hover:text-purple-950 hover:bg-white focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-300 ease-in-out';
@endphp --}}

<div x-data="{
    popoverOpen: false,
    popoverArrow: true,
    popoverPosition: 'bottom',
    popoverHeight: 0,
    popoverOffset: 8,
    popoverHeightCalculate() {
        this.$refs.popover.classList.add('invisible'); 
        this.popoverOpen=true; 
        let that=this;
        $nextTick(function(){ 
            that.popoverHeight = that.$refs.popover.offsetHeight;
            that.popoverOpen=false; 
            that.$refs.popover.classList.remove('invisible');
            that.$refs.popoverInner.setAttribute('x-transition', '');
            that.popoverPositionCalculate();
        });
    },
    popoverPositionCalculate(){
        if(window.innerHeight < (this.$refs.popoverButton.getBoundingClientRect().top + this.$refs.popoverButton.offsetHeight + this.popoverOffset + this.popoverHeight)){
            this.popoverPosition = 'top';
        } else {
            this.popoverPosition = 'bottom';
        }
    }
}"
x-init="
    that = this;
    window.addEventListener('resize', function(){
        popoverPositionCalculate();
    });
    $watch('popoverOpen', function(value){
        if(value){ popoverPositionCalculate(); document.getElementById('width').focus();  }
    });
"
class="relative">

<button x-ref="popoverButton" @click="popoverOpen=!popoverOpen" class="flex items-center justify-center w-10 h-10 cursor-pointer text-black hover:text-purple-800 hover:bg-white hover:rounded-full focus-visible:ring-gray-400 focus-visible:ring-2 focus-visible:outline-none active:bg-white active:text-purple-800 border-neutral-200/70">
    <div class="relative scale-75">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-gray-600">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
        <span class="absolute -top-2 left-4 rounded-full bg-red-500 p-0.5 px-2 text-sm text-red-50">4</span>
    </div>
</button>

<div x-ref="popover"
    x-show="popoverOpen"
    x-init="setTimeout(function(){ popoverHeightCalculate(); }, 100);"
    x-trap.inert="popoverOpen"
    @click.away="popoverOpen=false;"
    @keydown.escape.window="popoverOpen=false"
    :class="{ 'top-0 mt-12' : popoverPosition == 'bottom', 'bottom-0 mb-12' : popoverPosition == 'top' }"
    class="absolute w-[300px] max-w-lg -translate-x-1/2 left-1/2" x-cloak>
    <div x-ref="popoverInner" x-show="popoverOpen" class="w-full p-4 bg-white border rounded-md shadow-sm border-neutral-200/70">
        <div x-show="popoverArrow && popoverPosition == 'bottom'" class="absolute top-0 inline-block w-5 mt-px overflow-hidden -translate-x-2 -translate-y-2.5 left-1/2"><div class="w-2.5 h-2.5 origin-bottom-left transform rotate-45 bg-white border-t border-l rounded-sm"></div></div>
        <div x-show="popoverArrow  && popoverPosition == 'top'" class="absolute bottom-0 inline-block w-5 mb-px overflow-hidden -translate-x-2 translate-y-2.5 left-1/2"><div class="w-2.5 h-2.5 origin-top-left transform -rotate-45 bg-white border-b border-l rounded-sm"></div></div>
        <div class="grid gap-4">
            <div class="space-y-2">
                <h4 class="font-medium leading-none">Item on your cart</h4>
                <p class="text-sm text-muted-foreground"> You have x number of items in your cart and here they are.</p>
            </div>
            <div class="grid gap-2">
                <div class="grid items-center grid-cols-3 gap-4"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="width">Width</label><input class="flex w-full h-8 col-span-2 px-3 py-2 text-sm bg-transparent border rounded-md border-input ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="width" value="100%"></div>
                <div class="grid items-center grid-cols-3 gap-4"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="maxWidth">Max. width</label><input class="flex w-full h-8 col-span-2 px-3 py-2 text-sm bg-transparent border rounded-md border-input ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="maxWidth" value="300px"></div>
                <div class="grid items-center grid-cols-3 gap-4"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="height">Height</label><input class="flex w-full h-8 col-span-2 px-3 py-2 text-sm bg-transparent border rounded-md border-input ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="height" value="25px"></div>
                <div class="grid items-center grid-cols-3 gap-4"><label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="maxHeight">Max. height</label><input class="flex w-full h-8 col-span-2 px-3 py-2 text-sm bg-transparent border rounded-md border-input ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="maxHeight" value="none"></div>
            </div>
        </div>
    </div>
</div>
</div>