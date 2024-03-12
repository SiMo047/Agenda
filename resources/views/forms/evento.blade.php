<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Form Evento
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('evento.create')}}
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md rounded-md px-8 py-8 my-8">
    <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Crear Evento</h1>

        <form method="POST" action="{{ route('evento.store') }}"  enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm text-gray-700 dark:text-gray-400">Nombre</label>
                <input id="nombre" type="text" name="nombre" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Fecha -->
            <div>
                <label for="fecha" class="block text-sm text-gray-700 dark:text-gray-400">Fecha</label>
                <input id="fecha" type="date" name="fecha" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Hora -->
            <div>
                <label for="hora" class="block text-sm text-gray-700 dark:text-gray-400">Hora</label>
                <input id="hora" type="time" name="hora" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Descripción -->
            <div>
                <label for="descripcion" class="block text-sm text-gray-700 dark:text-gray-400">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-textarea"></textarea>
            </div>

            <!-- Ciudad -->
            <div>
                <label for="ciudad" class="block text-sm text-gray-700 dark:text-gray-400">Ciudad</label>
                <input id="ciudad" type="text" name="ciudad" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Dirección -->
            <div>
                <label for="direccion" class="block text-sm text-gray-700 dark:text-gray-400">Dirección</label>
                <input id="direccion" type="text" name="direccion" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Estado -->
            <div>
                <label for="estado" class="block text-sm text-gray-700 dark:text-gray-400">Estado</label>
                <select id="estado" name="estado" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select py-2">
                    <option value="creado">Creado</option>
                    <option value="cancelado">Cancelado</option>
                    <option value="terminado">Terminado</option>
                </select>
            </div>

            <!-- Aforo Máximo -->
            <div>
                <label for="aforomax" class="block text-sm text-gray-700 dark:text-gray-400">Aforo Máximo</label>
                <input id="aforomax" type="number" name="aforomax" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Tipo -->
            <div>
                <label for="tipo" class="block text-sm text-gray-700 dark:text-gray-400">Tipo</label>
                <select id="tipo" name="tipo" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select py-2">
                    <option value="online">Online</option>
                    <option value="presencial">Presencial</option>
                </select>
            </div>

            <!-- Número Máximo de Entradas por Persona -->
            <div>
                <label for="numMaxEntradasPorPersona" class="block text-sm text-gray-700 dark:text-gray-400">Número Máximo de Entradas por Persona</label>
                <input id="numMaxEntradasPorPersona" type="number" name="numMaxEntradasPorPersona" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>

            <!-- Categoría -->
            <div>
                <label for="categoria_id" class="block text-sm text-gray-700 dark:text-gray-400">Categoría</label>
                <select id="categoria_id" name="categoria_id" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select py-2">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>


             <!-- Imagen -->
             <div>
                <label for="imagen" class="block text-sm text-gray-700 dark:text-gray-400">Imagen</label>
                <input id="imagen" type="file" name="imagen"  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input py-2">
            </div>
            
            <!-- campo oculto con el ID del usuario que crea el evento -->
           
            <input type="hidden" id="asistente_id" name="asistente_id" value="{{ Auth::id() }}">


            <!-- Botón de enviar -->
            <button type="submit" class="block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Crear
            </button>
        </form>
</div>

  


   
  

   
</x-milay>

