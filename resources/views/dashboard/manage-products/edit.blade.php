@extends('layouts.privileged', ['title' => 'Edit Product'])

@section('content')
    <x-headsection._topnav>
        {{ __('Manage Product / Edit') }}
    </x-headsection._topnav>

    <div class="lg:ml-[280px]">
        <div class="flex justify-between mx-7">
            <h2 class="text-2xl font-bold">Edit Product</h2>
        </div>

        <form action="{{ route('manage-product.update', $product) }}" method="PUT">
            @csrf
            <div class="bg-white m-5 border border-gray-200  rounded-xl shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="lg:col-span-1">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Product Image</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-28">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-6 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="product_name">Product Name</label>
                                <input type="text" name="name" id="name"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $product->name() }}" required />
                            </div>
    
                            <div class="md:col-span-5">
                                <label for="description">Description</label>
                                <textarea name="description" id="description"
                                    class="border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="description"
                                    >{{ $product->description() }}</textarea>
                            </div>
    
                            <div class="md:col-span-1">
                                <label for="category">Category</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <select name="category" class="bg-gray-50 border border-gray-200 cursor-pointer text-gray-700 transition-all text-sm rounded-lg hover:text-blue-600 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        {{-- @foreach ( $products-> as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
    
                            <div class="md:col-span-2">
                                <label for="status">Status</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="status" id="status" placeholder="status"
                                        class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                        value="" />
                                    <button tabindex="-1"
                                        class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <button tabindex="-1" for="show_more"
                                        class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="md:col-span-1">
                                <label for="price">Price</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="price" id="price" placeholder="0"
                                    class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                    value="{{ $product->price() }}" />
                                </div>
                            </div>
    
                            <div class="md:col-span-1">
                                <label for="quantity">Quantity</label>
                                <div class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <button tabindex="-1" for="show_more"
                                        class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <input name="quantity" id="quantity" placeholder="0"
                                        class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                        value="{{ $product->quantity() }}" />
                                    <button tabindex="-1" for="show_more"
                                        class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 fill-current"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="md:col-span-5 text-right">
                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <button type="button" onclick="window.location='{{ route('manage-product') }}'"
                                        class="text-sm font-semibold bg-zinc-100 rounded-md px-3 py-2 leading-6 text-gray-900">Cancel</button>
                                    <button type="submit"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection