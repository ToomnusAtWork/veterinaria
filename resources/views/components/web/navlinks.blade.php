{{-- Nav Links for the customer facing web --}}

<x-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
    {{ __('Services') }}
</x-nav-link>

<x-nav-link href="{{ route('deals') }}" :active="request()->routeIs('deals')">
    {{ __('Product') }}
</x-nav-link>

<x-dropdown align="right" width="48">
    <x-slot name="trigger">
            <span class="inline-flex rounded-md">                
                <button type="button" class="inline-flex items-center  px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                    <div class="ml-2">{{ __('Language') }}
                    </div>
                </button>
            </span>

    </x-slot>


    <x-slot name="content">
        @foreach (config('localization.locales') as $locale)
            <x-dropdown-link :href="route('localization', $locale)">
                {{ __($locale) }}
            </x-dropdown-link>
        @endforeach
    </x-slot>
</x-dropdown>

{{-- 
<x-nav-link href="{{ route('manageusers') }}" :active="request()->routeIs('manageusers')">
    {{ __('Manage Users') }}
</x-nav-link> --}}