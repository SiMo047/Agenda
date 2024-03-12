<x-milay>
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Experiencias
            </h2>
            
        </h2>
    </x-slot>
    <x-slot name="nuevo">
    {{route('experiencia.create')}}
    </x-slot>

    <x-tabla>
    <x-slot name="tcabecera">
                <x-tabla.th>Nombre</x-tabla.th>
                <x-tabla.th>Fecha_Inicio</x-tabla.th>
                <x-tabla.th>Fecha_Texto</x-tabla.th>
                <x-tabla.th>Descripcion_corta</x-tabla.th>
                <x-tabla.th>Precio x Persona</x-tabla.th>
                <x-tabla.th>Link</x-tabla.th>
                <x-tabla.th>Descripcion_larga</x-tabla.th>
                <x-tabla.th>Empresa_id</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>
          
    </x-slot>

    <x-slot name="tbody">
   
    
   @foreach($experiencias as $experiencia)


       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        
                   <x-tabla.td>{{$experiencia->nombre}}</x-tabla.td>
                   <x-tabla.td>{{$experiencia->fechaInicio}}</x-tabla.td>
                   <x-tabla.td>{{$experiencia->fechaTexto}}</x-tabla.td>
                   <x-tabla.td>{{ Str::limit($experiencia->descripcion_corta, $limit = 20, $end = '...') }}</x-tabla.td>
                   <x-tabla.td>{{$experiencia->precio_por_persona}}</x-tabla.td>
                   <x-tabla.td>{{$experiencia->link}}</x-tabla.td>
                   <x-tabla.td>{{ Str::limit($experiencia->descripcion_larga, $limit = 20, $end = '...') }}</x-tabla.td>
                   <x-tabla.td>{{$experiencia->empresa_id}}</x-tabla.td>
                   <x-tabla.td>   
                      
                       <a href="{{ route('delexperiencia',['id'=>$experiencia->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                   </x-tabla.td>
       </tr>

   @endforeach

    <x-slot name="tlink">
    {{$experiencias->links()}}
    </x-slot>
    </x-slot>

    </x-tabla>


</x-milay>
