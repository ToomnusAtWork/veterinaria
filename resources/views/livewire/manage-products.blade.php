
    <div class="lg:ml-[280px]">
        <div class="flex justify-between mx-7">
            <h2 class="text-2xl font-bold">Product</h2>
            <x-button wire:click="confirmProductAdd" class="px-5 py-2 text-white bg-blue-500 rounded-md hover:bg--600">
                Create
            </x-button>
        </div>
        <div class="mt-4">
            @if (session()->has('message'))
                <div class="px-4 py-2 text-white bg-green-500 rounded-md">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    
        <div class="overflow-auto rounded-lg border border-gray-200 shadow-md m-5">
            <div class="flex justify-between">
                
                <div x-data="{ isOpen: false, openedWithKeyboard: false }" class="relative p-2 m-3" @keydown.esc.window="isOpen = false, openedWithKeyboard = false">
                    <!-- Toggle Button -->
                    <button type="button" @click="isOpen = ! isOpen" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded-md border border-neutral-300 bg-neutral-50 px-4 py-2 text-sm font-medium tracking-wide transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-800 dark:border-neutral-700 dark:bg-neutral-900 dark:focus-visible:outline-neutral-300" aria-haspopup="true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" :class="isOpen || openedWithKeyboard ? 'text-neutral-900 dark:text-white' : 'text-neutral-600 dark:text-neutral-300'" :aria-expanded="isOpen || openedWithKeyboard">
                        Select an item
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 rotate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>        
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute ml-2 top-11 left-0 flex w-1/2 min-w-[20px] flex-col overflow-hidden rounded-md border border-neutral-300 bg-neutral-50 py-1.5 dark:border-neutral-700 dark:bg-neutral-900" role="menu">
                        <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white" role="menuitem">20</a>
                        <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white" role="menuitem">30</a>
                        <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white" role="menuitem">50</a>
                    </div>
                </div>
                <div class="w-1/3 float-right m-4">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" wire:model="search" id="default-search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search products...">
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
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
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover">
                        </div>
                    </td>
    
                    <td class="px-6 py-4 max-w-0">{{ $product->description }}</td>
    
                    <td class="px-6 py-4  max-w-0">
                        <div class="font-medium text-gray-700">{{ $product->price}}฿</div>
                    </td>
                    <td class="px-6 py-4  max-w-0">
                        <div class="font-medium text-gray-700">{{ $product->quantity}}</div>
                    </td>
                    <td>
                        <div class="align-middle">
                            {{-- <a href="{{ route('view-product', ['slug' => $product->slug ])  }}">
                                <x-button>
                                    {{ __('View') }}
                                </x-button>
                            </a> --}}
                            
                            <x-warning-button wire:click="confirmProductEdit({{ $product->id }})" wire:loading.attr="disabled">
                                {{ __('Edit') }}
                            </x-warning-button>
                            <x-danger-button wire:click="confirmProductDeletion({{ $product->id }})" wire:loading.attr="disabled">
                                {{ __('Delete') }}
                            </x-danger-button>
                        </div>
                    </td>
                </tr>
                @endforeach
    
              </tbody>
            </table>
            <div class="p-5">
              {{ $products->links() }}
            </div>
    
            <x-dialog-modal wire:model="confirmingProductDeletion">
                <x-slot name="title">
                    {{ __('Delete product') }}
                </x-slot>
    
                <x-slot name="content">
                    {{ __('Are you sure you want to delete the product?') }}
                </x-slot>
    
                <x-slot name="footer">
                    <div class="flex gap-3">
                    <x-secondary-button wire:click="$set('confirmingProductDeletion', false)" wire:loading.attr="disabled">
                        {{ __('Cancel') }}
                    </x-secondary-button>
    
                        <x-danger-button wire:click="deleteProduct({{ $confirmingProductDeletion }})" wire:loading.attr="disabled">
                            {{ __('Delete') }}
                        </x-danger-button>
                    </div>
    
                </x-slot>
            </x-dialog-modal>
    
            <x-dialog-modal wire:model="confirmingProductAdd">
                <x-slot name="title">
                    {{ isset($this->newProduct->id) ? 'Edit Product' : 'Add Product' }}
                </x-slot>
    
                <x-slot name="content">
                        <div>
                            <label for="name" class="block mt-4 text-sm font-medium text-gray-700">Name</label>
                            <input type="text" wire:model="newProduct.name" id="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('newProduct.name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div>
                            <label for="description" class="block mt-4 text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" wire:model="newProduct.description"  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            @error('newProduct.description') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
    
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3">
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                <input type="text" wire:model="newProduct.price" id="price" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    
                                @error('newProduct.price') <span class="text-red-500">{{ $message }}</span>@enderror
    
                            </div>
                            <div>
                                <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                                <input type="text" wire:model="newProduct.quantity" id="quantity" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    
                                @error('newProduct.quantity') <span class="text-red-500">{{ $message }}</span>@enderror
    
                            </div>
    
                            <div>
                                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
    
                                <select wire:model="newProduct.category_id" id="category_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option disabled selected value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                                    @endforeach
                                    @error('newproduct.category_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                </select>
                            </div>
                        </div>
    
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div class="col-span-2">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" wire:model="image" id="image" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
    
                                {{-- If the image is already saved is system show img --}}
                                 @if (isset($image) && is_string($image))
                                    <img alt="image" src="{{ '/storage/' . $image }}" class="mt-4" width="200">
                                {{-- When the image is uploaded show img --}}
                                 @elseif (isset($image) && is_object($image))
                                    <img alt="image" src="{{ $image->temporaryUrl() }}" class="mt-4" width="200">
                                 @else
    
                                @endif
    
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 gap-2">
    
                            <x-secondary-button wire:click="$set('confirmingProductAdd', false)" wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-secondary-button>
                            <x-button wire:click="saveProduct">Save</x-button>
                        </div>
    
                </x-slot>
    
                <x-slot name="footer">
                </x-slot>
            </x-dialog-modal>
            
        </div>
    
    </div>
