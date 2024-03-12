<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Form Experiencia
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('experiencia.create')}}
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md rounded-md px-8 py-6 my-8">
      <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Crear Experiencia</h1>

      <form method="POST" action="{{ route('experiencia.store') }}"  enctype="multipart/form-data" class="space-y-4">
    @csrf

    <!-- Nombre -->
    <div>
        <label for="nombre" class="block text-sm text-gray-700 dark:text-gray-400">Nombre</label>
        <input id="nombre" type="text" name="nombre" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
    </div>

    <!-- Fecha -->
    <div>
        <label for="fechaInicio" class="block text-sm text-gray-700 dark:text-gray-400">Fecha de Inicio</label>
        <input id="fechaInicio" type="date" name="fechaInicio" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
    </div>

    <!-- fehca texto -->
    <div>
        <label for="fechaTexto" class="block text-sm text-gray-700 dark:text-gray-400">Fecha Texto</label>
        <input id="fechaTexto" type="text" name="fechaTexto" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
    </div>

    <!-- descripcion -->
    <div>
        <label for="descripcion_corta" class="block text-sm text-gray-700 dark:text-gray-400">Descripción Corta</label>
        <input id="descripcion_corta" type="text" name="descripcion_corta" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
    </div>

    <!-- precio -->
    <div>
        <label for="precio_por_persona" class="block text-sm text-gray-700 dark:text-gray-400">Precio por Persona</label>
        <input id="precio_por_persona" type="number" name="precio_por_persona" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
    </div>

    <!-- Link -->
    <div>
        <label for="link" class="block text-sm text-gray-700 dark:text-gray-400">Link</label>
        <input id="link" type="text" name="link" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
    </div>

    <!-- Descripción Larga -->
    <div>
        <label for="descripcion_larga" class="block text-sm text-gray-700 dark:text-gray-400">Descripción Larga</label>
        <textarea id="descripcion_larga" name="descripcion_larga" rows="4" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-textarea"></textarea>
    </div>

    <!-- Empresa -->
    <div>
        <label for="empresa_id" class="block text-sm text-gray-700 dark:text-gray-400">Empresa</label>
        <select id="empresa_id" name="empresa_id" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select py-2">
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
            @endforeach
        </select>
    </div>

        <!-- Imagen -->
        <div>
                <label for="imagen" class="block text-sm text-gray-700 dark:text-gray-400">Imagen</label>
                <input id="imagen" type="file" name="imagen"  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>
            

    <!-- Botón de enviar -->
    <button type="submit" class="block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        Crear
    </button>
</form>

    </div>


   
  

   
</x-milay>