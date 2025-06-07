<x-guest-layout>
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-[#007AFF]">Crie sua conta</h2>
        <p class="text-gray-600 mt-1">Comece sua jornada financeira</p>
    </div>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" class="text-gray-700" />
            <x-text-input id="name" class="block mt-1 w-full form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full form-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" class="text-gray-700" />

            <x-text-input id="password" class="block mt-1 w-full form-input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" class="text-gray-700" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full form-input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6 space-y-6">
            <div>
                <a class="text-sm text-[#007AFF] hover:text-[#0056b3] hover:underline" href="{{ route('login') }}">
                    {{ __('Já tem uma conta? Entre aqui') }}
                </a>
            </div>

            <div class="flex justify-center mt-8">
                <x-primary-button class="px-8 py-2.5">
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
