<x-milay>
    <x-slot name="titulo">
        <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
            Editar Usuario
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md rounded-md px-8 py-8 my-8">
        <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Editar Usuario</h1>

        <form method="POST" action="{{ route('updateusuario', $usuario->id) }}" class="space-y-4">
            @csrf

            <!-- Campo de selección para el rol del usuario -->
            <div>
                <label for="rol" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200">
                    Rol del usuario
                </label>
                <select id="rol" name="rol" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select py-2">
                    <option value="Asistente">Asistente</option>
                    <option value="CreadorEventos">Creador de Eventos</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>

            <!-- Botón de enviar -->
            <button type="submit" class="block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Modificar
            </button>
        </form>
    </div>
</x-milay>
