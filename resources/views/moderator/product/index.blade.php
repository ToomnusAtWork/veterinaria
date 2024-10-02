@extends('layouts.privileged', ['title' => 'Manage Appointment'])

@section('content')
    <x-headsection._topnav>
        {{ __('Manage Product') }}
    </x-headsection._topnav>

    <div class="lg:ml-[280px]">
        <div class="flex justify-between mx-7">
            <h2 class="text-2xl font-bold">Product</h2>
            {{-- <x-button wire:click="confirmProductAdd" class="px-5 py-2 text-white bg-blue-500 rounded-md hover:bg--600">
                Create
            </x-button> --}}
        </div>
    
        <div class="overflow-auto rounded-lg border border-gray-200 shadow-md m-5">
            <div class="flex justify-between">
                <div class="relative p-2 m-3">
                    <label for="underline_select" class="sr-only">Underline select option</label>
                    <select wire:model="perPage" id="underline_select"
                        class="block py-2.5 pr-10 w-full text-sm text-gray-800 bg-transparent border-0 border-b-2 border-blue-400 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>10</option>
                        <option value="3">20</option>
                        <option value="1">30</option>
                        <option value="40">50</option>
                    </select>
                </div>
    
                <div class="w-1/3 float-right m-4">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" wire:model="search" id="default-search" name="search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search products...">
                    </div>
                </div>
            </div>
    
    
            <table class="w-full border-collapse bg-white text-center text-sm text-gray-500 overflow-x-scroll min-w-screen">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="pl-6 py-4 font-medium text-gray-900">Id</th>
                        <th scope="col" class="px-4 py-4 font-medium text-gray-900">Product Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Photo</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Description</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Quantity</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-50 text-pretty text-center">
                            <td class="pl-6 py-4  max-w-0">{{ $product->id }}</td>
    
                            <td class="px-6 py-4 font-normal text-gray-900 w-fit ">
                                <div class="font-medium text-gray-700 text-center align-middle">{{ $product->name }}</div>
                            </td>
                            <td class="px-6 py-4  max-w-0">
                                <div class="font-medium text-gray-700">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="w-20 h-20 object-cover">
                                </div>
                            </td>
    
                            <td class="px-6 py-4 max-w-0">{{ $product->description }}</td>
    
                            <td class="px-6 py-4  max-w-0">
                                <div class="font-medium text-gray-700">{{ $product->price }}฿</div>
                            </td>
                            <td class="px-6 py-4  max-w-0">
                                <div class="font-medium text-gray-700">{{ $product->quantity }}</div>
                            </td>
                            <td>
                                <div class="align-middle">
                                    {{-- <a href="{{ route('view-product', ['slug' => $product->slug ])  }}">
                                    <x-button>
                                        {{ __('View') }}
                                    </x-button>
                                </a> --}}
    
                                    <x-warning-button wire:click="confirmProductEdit({{ $product->id }})"
                                        wire:loading.attr="disabled">
                                        {{ __('Edit') }}
                                    </x-warning-button>
                                    <x-danger-button wire:click="confirmProductDeletion({{ $product->id }})"
                                        wire:loading.attr="disabled">
                                        {{ __('Delete') }}
                                    </x-danger-button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection