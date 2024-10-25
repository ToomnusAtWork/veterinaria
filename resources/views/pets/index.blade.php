@extends('layouts.app', ['title' => 'My Pet'])

@section('content')
    <div class="w-full max-w-7xl mb-40 mx-auto p-8">
        <h1 class="font-bold text-3xl">My Pet</h1>
        <div class="mt-6 grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-6">
            
            @forelse($pets as $pet)
                {{-- <a href="{{ route('customer-pet.show') }}"> --}}
                    <div class="relative flex flex-col justify-center overflow-hidden shadow-xl">
                        {{-- <div class="absolute inset-0 bg-center dark:bg-black"></div> --}}
                        <div class="group relative m-0 flex h-full w-full rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                            <div
                                class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                <img src="{{ asset('storage/' . $pet->image) }}"
                                    class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                    alt="{{ $pet->name }}" />
                            </div>
                            <div class="absolute flex flex-col top-0 right-0 p-3 z-20 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:scale-110">
                                <!-- Delete Pet Button  -->
                                <form action="{{ route('customer-pet.delete') }}" method="DELETE">
                                    <button
                                        class="transition ease-in duration-300 bg-gray-800  hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                    </button>
                                </form>
                            </div>
                            
                            <div
                                class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                                <h1 class="font-serif px-2 py-1 text-3xl font-bold text-black">{{ $pet->name }}</h1>
                                <span class="inline-block px-2 py-1 font-semibold text-teal-900 bg-teal-200 rounded-full">{{ $pet->pet_type_id }}</span>
                                <span
                                    class="inline-block px-2 py-1 font-semibold text-indigo-900 bg-indigo-200 rounded-full">UI/UX</span>
                                <span
                                    class="inline-block px-2 py-1 font-semibold text-purple-900 bg-purple-200 rounded-full">Design</span>
                            </div>
                        </div>
                    </div>
                {{-- </a>      --}}

            @empty
                <div class="box-border h-72 border-1 border-black p-2 rounded-xl bg-gray-50 shadow-xl">
                    <div class="h-full flex flex-col items-center border-4 border-dashed rounded-lg justify-center">
                        <span
                            class="block mt-4 text-xl text-gray-400 font-normal group-hover:text-purp-primary transition group-hover:duration-1000">Create
                            welcome to pet collection and like create new stuff.</span>
                    </div>
                </div>
            @endforelse

            <a href="{{ route('customer.create') }}" class="group">
                <div class="box-border h-72 border-4 border-purp-primary p-2 rounded-xl bg-gray-50 shadow-xl">
                    <div class="h-full flex flex-col items-center border-4 border-dashed rounded-lg justify-center">
                        <svg class="h-20 w-20 text-gray-400 group-hover:text-purp-primary transition group-hover:duration-1000"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                        <span
                            class="block mt-4 text-xl text-gray-400 font-normal group-hover:text-purp-primary transition group-hover:duration-1000">Create
                            new profile</span>
                    </div>
                </div>
            </a>

        </div>

    </div>
@endsection
