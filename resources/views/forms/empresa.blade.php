<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Form Empresa
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('empresa.create')}}
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md rounded-md px-8 py-8 my-8">
    <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Crear Empresa</h1>

    <form method="POST" action="{{ route('empresa.store') }}" class="space-y-4 ">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm text-gray-700 dark:text-gray-400">Nombre</label>
                <input id="nombre" type="text" name="nombre" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Dirección -->
            <div>
                <label for="direccion" class="block text-sm text-gray-700 dark:text-gray-400">Dirección</label>
                <input id="direccion" type="text" name="direccion" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Teléfono -->
            <div>
                <label for="telefono" class="block text-sm text-gray-700 dark:text-gray-400">Teléfono</label>
                <input id="telefono" type="tel" name="telefono" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Correo electrónico -->
            <div>
                <label for="email" class="block text-sm text-gray-700 dark:text-gray-400">Correo Electrónico</label>
                <input id="email" type="email" name="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Sitio web -->
            <div>
                <label for="web" class="block text-sm text-gray-700 dark:text-gray-400">Sitio Web</label>
                <input id="web" type="url" name="web" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Información Extra -->
            <div>
                <label for="info_extra" class="block text-sm text-gray-700 dark:text-gray-400">Información Extra</label>
                <textarea id="info_extra" name="info_extra" rows="4" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-textarea"></textarea>
            </div>

            <!-- Botón de enviar -->
            <button type="submit" class="block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Crear
            </button>
        </form>
</div>

  


   
  

   
</x-milay>

