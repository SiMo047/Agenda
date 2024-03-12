<x-milayweb>

<x-slot name="fondo">

    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('img/foto3.jpg')}}');">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>

</x-slot>

<x-slot name="titulo">
  EXPERIENCIAS
</x-slot>

<x-slot name="opciones">
<p class="mt-4 text-lg text-blueGray-200">
Sumérgete en un mundo de experiencias inigualables mientras exploras nuestra región costera. Desde emocionantes deportes acuáticos hasta relajantes paseos por la orilla del mar, aquí encontrarás actividades para satisfacer todos los gustos y edades.
    </p>
       

</x-slot>

<x-slot name="info">
    <div class="flex flex-wrap items-center mt-32">
                      @foreach ($experiencias as $experiencia)
                              <div class="w-full md:w-4/12 px-4 mr-auto ml-auto" >
                                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500 " >
                                        <img alt="..." src="{{ asset('storage/img/experiencia_' . $experiencia->id . '.jpg') }}" class="w-full align-middle rounded-t-lg" />
                                        <blockquote class="relative p-8 mb-5">
                                                <svg preserveAspectRatio="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 583 95"
                                                    class="absolute left-0 w-full block h-95-px -top-94-px">
                                                    <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                                                </svg>
                                                <h4 class="text-xl font-bold text-white">
                                               <a href="{{ route('detalle_exp' ,['id' => $experiencia->id]) }}">{{ $experiencia->nombre }}</a> 
                                                </h4>
                                                <p class="text-md font-light mt-2 text-white">
                                                {{ $experiencia->descripcion_corta }}
                                                </p>

                                                <p class="text-sm font-medium mt-4 text-white">
                                                    Precio por persona: {{ $experiencia->precio_por_persona }}€
                                                </p>
                                                <a href="{{ route('detalle_exp', ['id' => $experiencia->id]) }}" class="text-center block text-white mt-4"><i class="fas fa-plus-square"></i></a>
                                        </blockquote>
                                    </div>
                              </div>

                      @endforeach       
     </div>

</x-slot>



</x-milayweb>