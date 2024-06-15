@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2.5 pt-1 bg-white rounded-md text-md font-medium leading-5 text-fuchsa-950 focus:outline-none focus:border-blue-300 transition duration-300 ease-in-out'
            : 'inline-flex items-center px-2.5 pt-1 rounded-md text-md font-medium leading-5 text-gray-700 hover:text-purple-950 hover:bg-white focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-300 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
