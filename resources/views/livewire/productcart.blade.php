<div class="p-5 mx-2 my-2 max-w-md rounded border-2">
    <h1 class="text-3xl mb-2">{{ $product->name }} - ${{ $product->price }}</h1>
    <button class="p-2 border-2 rounded border-blue-500 hover:border-blue-600 bg-blue-500 hover:bg-blue-600" wire:click="addToCart">Add To Cart</button>
</div>

{{-- 
<div class="flex items-center justify-center w-full">
    <button
        class="group py-4 px-6 border border-gray-400 rounded-l-full shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-300 hover:bg-gray-50">
        <svg class="stroke-gray-700 transition-all duration-500 group-hover:stroke-black"
            width="22" height="22" viewBox="0 0 22 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M16.5 11H5.5" stroke="" stroke-width="1.6"
                stroke-linecap="round" />
            <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2"
                stroke-width="1.6" stroke-linecap="round" />
            <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2"
                stroke-width="1.6" stroke-linecap="round" />
        </svg>
    </button>
    <input type="number"
        wire:model="quantity"
        min="1"
        class="font-semibold text-gray-900 text-lg py-[13px] px-6 w-full lg:max-w-[118px] border-y border-gray-400 bg-transparent placeholder:text-gray-900 text-center hover:bg-gray-50 focus-within:bg-gray-50 outline-0"
        placeholder="1">
    <button
        class="group py-4 px-6 border border-gray-400 rounded-r-full shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-300 hover:bg-gray-50">
        <svg class="stroke-gray-700 transition-all duration-500 group-hover:stroke-black"
            width="22" height="22" viewBox="0 0 22 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-width="1.6"
                stroke-linecap="round" />
            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2"
                stroke-width="1.6" stroke-linecap="round" />
            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2"
                stroke-width="1.6" stroke-linecap="round" />
        </svg>
    </button>
</div>
<button class="group py-4 px-5 rounded-full bg-indigo-50 text-indigo-600 font-semibold text-lg w-full flex items-center justify-center gap-2 shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-100 hover:shadow-indigo-200"
    wire:click="addToCart">
        <svg class="stroke-indigo-600 transition-all duration-500" width="22"
            height="22" viewBox="0 0 22 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10.7394 17.875C10.7394 18.6344 10.1062 19.25 9.32511 19.25C8.54402 19.25 7.91083 18.6344 7.91083 17.875M16.3965 17.875C16.3965 18.6344 15.7633 19.25 14.9823 19.25C14.2012 19.25 13.568 18.6344 13.568 17.875M4.1394 5.5L5.46568 12.5908C5.73339 14.0221 5.86724 14.7377 6.37649 15.1605C6.88573 15.5833 7.61377 15.5833 9.06984 15.5833H15.2379C16.6941 15.5833 17.4222 15.5833 17.9314 15.1605C18.4407 14.7376 18.5745 14.0219 18.8421 12.5906L19.3564 9.84059C19.7324 7.82973 19.9203 6.8243 19.3705 6.16215C18.8207 5.5 17.7979 5.5 15.7522 5.5H4.1394ZM4.1394 5.5L3.66797 2.75"
                stroke="" stroke-width="1.6" stroke-linecap="round" />
        </svg>
    Add to cart
</button> --}}