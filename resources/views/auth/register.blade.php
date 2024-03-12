<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="w-full">
        @csrf
     <!-- Nombre y Apellidos -->
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                <x-input-label for="name" :value="__('Nombre')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
                <x-text-input id="name" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="text-red-500 text-xs italic" />
            </div>
            <div class="w-full md:w-1/2 px-3">
                <x-input-label for="apellidos" :value="__('Apellidos')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
                <x-text-input id="apellidos" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="apellidos" :value="old('apellidos')" required autocomplete="apellidos" />
                <x-input-error :messages="$errors->get('apellidos')" class="text-red-500 text-xs italic" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="email" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="text-red-500 text-xs italic" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="password" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="text-red-500 text-xs italic" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <x-input-label for="password_confirmation" :value="__('Confirma Password')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="password_confirmation" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-500 text-xs italic" />
        </div>

        <!-- DNI -->
        <div class="mb-6">
            <x-input-label for="dni" :value="__('DNI')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="dni" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="dni" :value="old('dni')" required autocomplete="dni" />
            <x-input-error :messages="$errors->get('dni')" class="text-red-500 text-xs italic" />
        </div>

        <!-- Edad -->
        <div class="mb-6">
            <x-input-label for="edad" :value="__('Edad')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="edad" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" name="edad" :value="old('edad')" required autocomplete="edad" />
            <x-input-error :messages="$errors->get('edad')" class="text-red-500 text-xs italic" />
        </div>

        <!-- Teléfono -->
        <div class="mb-6">
            <x-input-label for="telefono" :value="__('Teléfono')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="telefono" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="telefono" :value="old('telefono')" autocomplete="telefono" />
            <x-input-error :messages="$errors->get('telefono')" class="text-red-500 text-xs italic" />
        </div>

        <!-- Dirección -->
        <div class="mb-6">
            <x-input-label for="direccion" :value="__('Dirección')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="direccion" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="direccion" :value="old('direccion')" autocomplete="direccion" />
            <x-input-error :messages="$errors->get('direccion')" class="text-red-500 text-xs italic" />
        </div>

        <!-- Ciudad -->
        <div class="mb-6">
            <x-input-label for="ciudad" :value="__('Ciudad')" class="uppercase text-gray-900 text-xs font-bold mb-2" />
            <x-text-input id="ciudad" class="appearance-none block w-full bg-gray-100 text-gray-900 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="ciudad" :value="old('ciudad')" autocomplete="ciudad" />
            <x-input-error :messages="$errors->get('ciudad')" class="text-red-500 text-xs italic" />
        </div>

      
       <!-- Botón de registro -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('¿Ya estás registrado?') }}
            </a>
            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
