<x-guest-layout>
    {{-- <div class="flex flex-col"> --}}
        <form method="POST" action="#">
            @csrf

            <!-- Email Address -->
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


            <!-- Password -->
            <div class="mt-3">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')"
                    required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


            <div class="flex mt-4 justify-between items-center">
                <a href="{{ route('register') }}"
                    class="text-gray-600 px-2 text-sm cursor-pointer hover:text-gray-800 hover:underline">Don't have an
                    account</a>
                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

        </form>
    {{-- </div> --}}

</x-guest-layout>
