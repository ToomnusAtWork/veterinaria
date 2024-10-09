@extends('layouts.privileged', ['title' => 'Edit Service'])

@section('content')
    <x-headsection._topnav>
        {{ __('Manage Service / Edit') }}
    </x-headsection._topnav>

    <div class="lg:ml-[300px]">
        <div class="flex justify-between mx-7">
            <h2 class="text-2xl font-bold">Edit Service</h2>
        </div>

        <form action="{{ route('manage-service.update', $service) }}" method="PUT">
            @csrf
            <div class="bg-white m-5 border border-gray-200  rounded-xl shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-6 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="lg:col-span-1">
                        <div class="gap-6 mt-4">
                            <div class="">
                                <label for="image" class="ml-4 block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" class="ml-4 p-1 w-2/3 text-slate-500 text-sm rounded-full leading-6 file:bg-violet-200 file:text-violet-700 file:font-semibold file:border-none file:px-4 file:py-1 file:mr-6 file:rounded-full hover:file:bg-violet-100 border border-gray-300">
                                @error('image')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror        
                            </div>
                            <div class="border-2 h-60 my-4 rounded-xl items-center justify-center">
                                {{-- If the image is already saved is system show img --}}
                               @if (isset($image) && is_string($image))
                                   <img alt="image" src="{{ '/storage/' . $image }}"  class="mt-4" width="200">
                                   {{-- When the image is uploaded show img --}}
                               @elseif (isset($image) && is_object($image))
                                   <img alt="image" src="{{ $image->temporaryUrl() }}" class="mt-4" width="200">
                               @else
                               @endif
                           </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" wire:model="newService.name" id="name"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('newService.name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" wire:model="newService.description"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            @error('newService.description')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3">
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                <input type="text" wire:model="newService.price" id="price"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        
                                @error('newService.price')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
        
                            </div>
        
                            <div>
                                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                                <select wire:model="newService.category_id" id="category_id"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option disabled selected value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                    @error('newService.category_id')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div>
                                <label for="allergens" class="block text-sm font-medium text-gray-700">Allergens</label>
                                <textarea id="allergens" wire:model="newService.allergens"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                                @error('newService.allergens')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
        
                            <div>
                                <label for="cautions" class="block text-sm font-medium text-gray-700">Cautions</label>
                                <textarea id="cautions" wire:model="newService.benefits"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                                @error('newService.cautions')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div>
                                <label for="benefits" class="block text-sm font-medium text-gray-700">Benefits</label>
                                <textarea id="benefits" wire:model="newService.benefits"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                                @error('newService.benefits')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
        
                            <div>
                                <label for="aftercare_tips" class="block text-sm font-medium text-gray-700">Aftercare
                                    Tips</label>
                                <textarea id="aftercare_tips" wire:model="newService.aftercare_tips"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                                @error('newService.aftercare_tips')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
        
                        </div>
                        <div>
                            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea id="notes" wire:model="newService.notes"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            @error('newService.notes')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="is_hidden" class="block text-sm font-medium text-gray-700">Is Hidden</label>
        
                            <input type="checkbox" wire:model="newService.is_hidden" id="is_hidden">
                            @error('newService.is_hidden')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-6 text-sm grid-cols-1 md:grid-cols-5">
    
                                <div class="md:col-span-5 text-right">
                                    <div class="mt-6 flex items-center justify-end gap-x-6">
                                        <button type="button" onclick="window.location='{{ route('manage-service') }}'"
                                            class="text-sm font-semibold bg-zinc-100 rounded-md px-3 py-2 leading-6 text-gray-900">Cancel</button>
                                        <button type="submit"
                                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </form>
    </div>


@endsection