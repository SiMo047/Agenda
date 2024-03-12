<x-milayweb>

<x-slot name="fondo">

    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('img/foto1.jpg')}}');">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>

</x-slot>

<x-slot name="titulo">
 EVENTO
</x-slot>
<x-slot name="opciones">
<p class="mt-4 text-lg text-blueGray-200">

    {{ $evento['nombre'] }}
</p>
       

</x-slot>

<x-slot name="info">



    <div class="container mx-auto px-4 mt-32">
          <div class="items-center flex flex-wrap">
  
                    <!--1º div imagen-->
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{ asset('storage/img/evento_' . $evento->id . '.jpg') }}" />
                </div>
                    <!--2º div info-->
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                            <!--div icono rocket-->  

                            <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                            <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <!--aqui pondremos el nombre exp -->

                            <h3 class="text-3xl font-semibold">{{ $evento['nombre'] }}</h3>
                            <!--descripcion larga -->

                            <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                            {{ $evento['descripcion'] }}
                            </p>

                            <!--ul lista para poner tipo botones el precio el link y demas -->
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                        <i class="fas fa-map-pin"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">
                                        Direccion : {{ $evento['direccion'] }} , {{ $evento['ciudad'] }}
                                        </h4>
                                    </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                         <i class="fas fa-sign"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">Estado : {{ $evento['estado'] }} </h4>
                                    </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                        <i class="fas fa-user-friends"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">Aforo Maximo :  {{ $evento['aforomax'] }}</h4>
                                    </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                        <i class="fas fa-calendar-day"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">Fecha / Hora :  {{ $evento['fecha'] }}  -  {{ $evento['hora'] }}</h4>
                                    </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                                                
                                @auth <!-- AQUI QUIERO EL BOTON DE INSCRIBIRSE AL EVENTO --> 
                                    @if ($registrado) 
                                        <div class="flex items-center"> <div> 
                                            
                                               
                                               <button type="" class="bg-black text-white active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"> Inscrito </button>
                                               <button type="submit" class="bg-black text-white active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"><a href="{{route('del-inscripcion',['id'=>$inscripcion->id])}}">Borrar Inscripcion</a></button>
                                             
                                            
                                        </div> 
                                    </div> 
                                    @else 
                                            <div class="flex items-center"> <div> 
                                                 <form method="POST" action="{{ route('inscripcion')}}"> 
                                            @csrf
                                                    <input type="number" name="num_entradas" min="1" max="10000" class="rounded pt-1" required>
                                                    <button type="submit" class="bg-black text-white active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-3 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"> Inscribirse </button>
                                                    <input type="hidden" name="asistente_id" value="{{ Auth::id() }}">
                                                    <input type="hidden" name="evento_id" value="{{ $evento['id'] }}">
                                                 </form> 
                                            </div> 
                                    </div> 
                                    @endif 
                                    @endauth 




                                </li>
                               
                                    
                                   
                                
                            </ul>
                        </div>
                </div>
                 
          </div>
    </div>


</x-slot>



</x-milayweb>