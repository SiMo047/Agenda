<x-milayweb>

<x-slot name="fondo">

    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('img/foto2.jpg')}}');">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>

</x-slot>

<x-slot name="titulo">
  EXPLORA
</x-slot>

<x-slot name="opciones">
<p class="mt-4 text-lg text-blueGray-200">
Donde te invitamos a sumergirte en la maravillosa experiencia que ofrece nuestra región costera. Desde playas de ensueño hasta servicios de primera clase, aquí encontrarás todo lo que necesitas para planificar tu escapada perfecta.
    </p>
       

</x-slot>

<x-slot name="info">
    <div class="flex flex-wrap items-center mt-32">
                      @foreach ($infos as $info)
                              <div class="w-full md:w-4/12 px-4 mr-auto ml-auto" >
                                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500 " >
                                        <img alt="..." src="{{ asset('img/' . $info->imagen) }}" class="w-full align-middle rounded-t-lg" />
                                        <blockquote class="relative p-8 mb-5">
                                                <svg preserveAspectRatio="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 583 95"
                                                    class="absolute left-0 w-full block h-95-px -top-94-px">
                                                    <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                                                </svg>
                                                <h4 class="text-xl font-bold text-white">
                                                {{ $info->nombre }}
                                                </h4>
                                                <p class="text-md font-light mt-2 text-white">
                                                {{ $info->descripcion }}
                                                </p>
                                        </blockquote>
                                    </div>
                              </div>

                      @endforeach       
     </div>

</x-slot>



</x-milayweb>