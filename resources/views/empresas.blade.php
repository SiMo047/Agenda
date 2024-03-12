<x-milay>
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Empresas
            </h2>
            
        </h2>
    </x-slot>
    <x-slot name="nuevo">
    {{route('empresa.create')}}
    </x-slot>

    <x-tabla>
    <x-slot name="tcabecera">
                <x-tabla.th>Nombre</x-tabla.th>
                <x-tabla.th>Direccion</x-tabla.th>
                <x-tabla.th>Telefono</x-tabla.th>
                <x-tabla.th>Email</x-tabla.th>
                <x-tabla.th>Web</x-tabla.th>
                <x-tabla.th>Info_Extra</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>
          
    </x-slot>

    <x-slot name="tbody">
   
    
   @foreach($empresas as $empresa)


       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        
                   <x-tabla.td>{{$empresa->nombre}}</x-tabla.td>
                   <x-tabla.td>{{$empresa->direccion}}</x-tabla.td>
                   <x-tabla.td>{{$empresa->telefono}}</x-tabla.td>
                   <x-tabla.td>{{$empresa->email}}</x-tabla.td>
                   <x-tabla.td>{{$empresa->web}}</x-tabla.td>
                   <x-tabla.td>{{$empresa->info_extra}}</x-tabla.td>
                   <x-tabla.td>   
                       
                       <a href="{{ route('delempresa',['id'=>$empresa->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                   </x-tabla.td>
       </tr>

   @endforeach

    <x-slot name="tlink">
    {{$empresas->links()}}
    </x-slot>
    </x-slot>

    </x-tabla>


</x-milay>
