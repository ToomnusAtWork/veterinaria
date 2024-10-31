@extends('layouts.app', ['title' => 'Checkout'])

@section('content')
    <div class="bg-gray-100 py-8" x-data="{ showCheckoutConfirmation: false }">
        <div class="container mx-auto px-4 md:w-11/12">
            <livewire:checkout-form />
        </div>

        <div x-show="showCheckoutConfirmation" x-cloak class="fixed inset-0 overflow-y-auto z-50 flex items-center justify-center">
            <div class="fixed inset-0 transition-opacity -z-10" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg p-4 max-w-md mx-auto"  @click.outside="showCheckoutConfirmation = false" >
                <h2 class="text-xl font-semibold">Confirm Checkout</h2>
                <p>Are you sure you want to checkout?</p>
                <div class="mt-4 flex justify-end space-x-4">
                    <button @click="showCheckoutConfirmation = false" class="px-4 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none">
                        Cancel
                    </button>
                    <form action="{{route('cart.checkout')}}" method="post">
                        @csrf
                        <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none">
                            Confirm
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection