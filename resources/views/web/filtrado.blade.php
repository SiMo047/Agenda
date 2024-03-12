<x-milayweb>

<x-slot name="fondo">

    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('img/puertomax.jpg')}}');">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>

</x-slot>

<x-slot name="titulo">
  AGENDA
</x-slot>

<x-slot name="opciones">

        <div class=" items-center mt-20">
            <!-- Desplegable de categorías -->
            <div class="">
                
                    <form class="max-w-sm mx-auto" method="GET" action="{{ route('filtroagenda') }}" >
                                    
                                <select id="categoria" name="categoria" class="block py-2.5 px-0 w-full text-base text-black bg-transparent border-0 border-b-2 border-white appearance-none dark:white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer">
                                        
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id }}" class="text-black" selected>{{ $categoria->nombre }}</option>
                                        @endforeach
                                </select>
                                    
                                
                    

                                <!-- Filtro de fecha -->
                            
                                <div class="mt-20">
                                        <!-- Enlace para mostrar todos los eventos -->
                                        <button type="submit" name="filtro" value="todos"  class="text-white text-xl border-0 bg-transparent focus:outline-none mr-3" >Todos</button>
                                        
                                        <!-- Enlace para mostrar eventos de la semana -->
                                        <button type="submit" name="filtro" value="semana"  class="text-white text-xl border-0 bg-transparent focus:outline-none mr-3">Esta semana</button> 
                                        
                                        <!-- Enlace para mostrar eventos del mes -->
                                       <button type="submit"name="filtro" value="mes"  class="text-white text-xl border-0 bg-transparent focus:outline-none mr-3">Este mes</button> 
                                </div>
                        
                   </form>

            </div>    
        </div>

</x-slot>

<x-slot name="info">
    <div class="flex flex-wrap items-center mt-32">
                      @foreach ($eventos as $evento)
                              <div class="w-full md:w-4/12 px-4 mr-auto ml-auto" >
                                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500 " >
                                        <img alt="..." src="{{ asset('storage/img/evento_' . $evento->id . '.jpg') }}" class="w-full align-middle rounded-t-lg" />
                                        <blockquote class="relative p-8 mb-5">
                                                <svg preserveAspectRatio="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 583 95"
                                                    class="absolute left-0 w-full block h-95-px -top-94-px">
                                                    <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                                                </svg>
                                                <h4 class="text-xl font-bold text-white">
                                                {{ $evento->nombre }}
                                                </h4>
                                                <p class="text-md font-light mt-2 text-white">
                                                {{ $evento->descripcion }}
                                                </p>
                                        </blockquote>
                                    </div>
                              </div>

                      @endforeach       
     </div>

</x-slot>



</x-milayweb>