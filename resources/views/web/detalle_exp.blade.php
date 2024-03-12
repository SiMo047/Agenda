<x-milayweb>

<x-slot name="fondo">

    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('img/foto3.jpg')}}');">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>

</x-slot>

<x-slot name="titulo">
  EXPERIENCIA
</x-slot>
<x-slot name="opciones">
<p class="mt-4 text-lg text-blueGray-200">

    {{ $experiencia['nombre'] }}
</p>
       

</x-slot>

<x-slot name="info">



    <div class="container mx-auto px-4 mt-32">
          <div class="items-center flex flex-wrap">
  
                    <!--1º div imagen-->
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{ asset('storage/img/experiencia_' . $experiencia->id . '.jpg') }}" />
                </div>
                    <!--2º div info-->
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                            <!--div icono rocket-->  

                            <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                            <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <!--aqui pondremos el nombre exp -->

                            <h3 class="text-3xl font-semibold">{{ $experiencia['nombre'] }}</h3>
                            <!--descripcion larga -->

                            <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                            {{ $experiencia['descripcion_larga'] }}
                            </p>

                            <!--ul lista para poner tipo botones el precio el link y demas -->
                                <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                             <i class="fas fa-money-bill-wave"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">
                                        Precio por persona : {{ $experiencia['precio_por_persona'] }}€
                                        </h4>
                                    </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3">
                                            <i class="fas fa-link"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">Link : {{ $experiencia['link'] }} </h4>
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
                                        <h4 class="text-blueGray-500">Fecha Fin {{ $experiencia['fechaTexto'] }}</h4>
                                    </div>
                                    </div>
                                </li>
                                </ul>
                        </div>
                </div>
                 
          </div>
    </div>


</x-slot>



</x-milayweb>