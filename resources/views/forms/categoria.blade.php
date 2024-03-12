<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Form Categoria
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('categoria.create')}}
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md rounded-md px-8 py-8 my-8">
    <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Crear Categoría</h1>

    <form method="POST" action="{{ route('categoria.store') }}" class="space-y-4 ">
        @csrf

        <!-- Nombre -->
        <div>
            <label for="nombre" class="block text-sm text-gray-700 dark:text-gray-400">NOMBRE</label>
            <input id="nombre" type="text" name="nombre" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
        </div>

        <!-- Botón de enviar -->
        <button type="submit" class="block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Crear
        </button>
    </form>
</div>

  


   
  

   
</x-milay>

