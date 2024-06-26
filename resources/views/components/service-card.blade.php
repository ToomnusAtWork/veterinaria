@props([
    /** @var \mixed */
    'service'
])

<div {{ $attributes->class(['mx-auto w-60 min-w-[200px] mt-5 pb-20 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg']) }}>
    <img class="h-48 w-full object-cover object-center" src="{{ asset('images/services/'. $service->image)}}"
         alt="Product Image"/>
    <div class="p-4">
        <h2 class="mb-2 text-lg font-medium border-b-4 border-b-blue-400 text-gray-900">{{ $service->name}}</h2>
        <p class="mb-2 text-base text-gray-700">{{ $service->description}}</p>

        <div class="fixed pt-9 bottom-2 w-4/5">
            <div class="flex items-center mb-1">
                <div>
                    <p class="mr-2 mb-4 text-lg font-semibold text-gray-900">฿ {{ $service->price}}</p>
                </div>
            </div>
            <a href="{{route('view-service', ['slug' => $service->slug])}}"><x-button>Book Now</x-button></a>
        </div>
    </div>
</div>
