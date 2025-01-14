<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


        @if (session('errormsg'))
            <div class="mb-4 font-medium text-sm text-red-600">
                {{ session('errormsg') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" :value="__('auth.login.email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('auth.login.password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('auth.login.remember') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('password.request') }}">
                        {{ __('auth.login.forgot') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('auth.login.loggingIn') }}
                </x-button>
        
            </div>
            <div class="text-center pt-10">
                <span class="text-sm text-gray-600">{{ __('auth.login.question') }}</span>
                <a href="{{ route('register') }}" class="text-sm text-blue-500 hover:text-blue-600">
                    {{ __('auth.login.createAcc') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
    
</x-guest-layout>
