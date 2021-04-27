<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img class="img-thumbnail" src="{{ asset('img/cclogo.png') }}" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('En caso de olvidar la contraseña, favor de ingresar su correo asociado. Se le enviara a su correo, un link a un formulario donde podra reiniciar su contraseña.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enviar correo de restauración.') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
