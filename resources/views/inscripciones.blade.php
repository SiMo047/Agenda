<x-milay>
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Inscripciones
            </h2>
            
        </h2>
    </x-slot>
    <x-slot name="nuevo">
    {{route('evento.create')}}
    </x-slot>

    <x-tabla>
    <x-slot name="tcabecera">
                <x-tabla.th>Nombre Usuario</x-tabla.th>
                <x-tabla.th>Nombre Eventos</x-tabla.th>
                <x-tabla.th>Nº Entradas</x-tabla.th>
                <x-tabla.th>Estado</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>
          
    </x-slot>

    <x-slot name="tbody">
   
    
   @foreach($inscripciones as $inscripcion)


       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        
                   <x-tabla.td>{{$inscripcion->asistente_id}}</x-tabla.td>
                   <x-tabla.td>{{$inscripcion->evento->nombre}}</x-tabla.td>
                   <x-tabla.td>{{$inscripcion->numEntradas}}</x-tabla.td>
                    <x-tabla.td>{{$inscripcion->estado}}</x-tabla.td>
                 
                   <x-tabla.td>   
                     
                       <a href="{{ route('delins',['id'=>$inscripcion->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                   </x-tabla.td>
       </tr>

   @endforeach

    <x-slot name="tlink">
    {{$inscripciones->links()}}
    </x-slot>
    </x-slot>

    </x-tabla>


</x-milay>
