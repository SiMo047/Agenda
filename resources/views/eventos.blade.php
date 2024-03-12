<x-milay>
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Eventos
            </h2>
            
        </h2>
    </x-slot>
    <x-slot name="nuevo">
    {{route('evento.create')}}
    </x-slot>

    <x-tabla>
    <x-slot name="tcabecera">
                <x-tabla.th>Nombre</x-tabla.th>
                <x-tabla.th>Fecha</x-tabla.th>
                <x-tabla.th>Hora</x-tabla.th>
                <x-tabla.th>Descripcion</x-tabla.th>
                <x-tabla.th>Ciudad</x-tabla.th>
                <x-tabla.th>Direccion</x-tabla.th>
                <x-tabla.th>Estado</x-tabla.th>
                <x-tabla.th>AforoMax</x-tabla.th>
                <x-tabla.th>Tipo</x-tabla.th>
                <x-tabla.th>NºmaxEntraxPer</x-tabla.th>
                <x-tabla.th>Categoria_id</x-tabla.th>
                <x-tabla.th>Asistente_id</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>
          
    </x-slot>

    <x-slot name="tbody">
   
    
   @foreach($eventos as $evento)


       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        
                   <x-tabla.td>{{$evento->nombre}}</x-tabla.td>
                   <x-tabla.td>{{$evento->fecha}}</x-tabla.td>
                   <x-tabla.td>{{$evento->hora}}</x-tabla.td>
                   <x-tabla.td>{{ Str::limit($evento->descripcion, $limit = 10, $end = '') }}</x-tabla.td>
                   <x-tabla.td>{{$evento->ciudad}}</x-tabla.td>
                   <x-tabla.td>{{$evento->direccion}}</x-tabla.td>
                   <x-tabla.td>{{$evento->estado}}</x-tabla.td>
                   <x-tabla.td>{{$evento->aforomax}}</x-tabla.td>
                   <x-tabla.td>{{$evento->tipo}}</x-tabla.td>
                   <x-tabla.td>{{$evento->numMaxEntradasPorPersona}}</x-tabla.td>
                   <x-tabla.td>{{$evento->categoria_id}}</x-tabla.td>
                   <x-tabla.td>{{$evento->asistente_id}}</x-tabla.td>
                   <x-tabla.td>   
                       <a href="{{ route('modevento',['id'=>$evento->id]) }}"><i class="zmdi zmdi-edit"></i></a>
                       <a href="{{ route('delevento',['id'=>$evento->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                   </x-tabla.td>
       </tr>

   @endforeach

    <x-slot name="tlink">
    {{$eventos->links()}}
    </x-slot>
    </x-slot>

    </x-tabla>


</x-milay>
