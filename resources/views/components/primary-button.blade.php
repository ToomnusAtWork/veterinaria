@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 pt-1 bg-blue-600 rounded-lg text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-blue-300 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-4 pt-1 bg-blue-600 rounded-lg text-sm font-medium leading-5 text-white hover:text-gray-300 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>