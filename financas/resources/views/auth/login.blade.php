<x-guest-layout>
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-[#007AFF]">Bem-vindo de volta</h2>
        <p class="text-gray-600 mt-1">Acesse sua conta para continuar</p>
    </div>
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" class="text-gray-700" />

            <x-text-input id="password" class="block mt-1 w-full form-input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#007AFF] shadow-sm focus:ring-[#007AFF]" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
            </label>
        </div>

        <div class="mt-6 space-y-6">
            <div class="flex flex-col space-y-2">
                <a class="text-sm text-[#007AFF] hover:text-[#0056b3] hover:underline" href="{{ route('register') }}">
                    {{ __('Não tem uma conta? Registre-se') }}
                </a>
                
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>
            
            <div class="flex justify-center mt-8">
                <x-primary-button class="px-8 py-2.5">
                    {{ __('Entrar') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
