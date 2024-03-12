<x-milay>
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Usuarios
            </h2>
            
        </h2>
    </x-slot>
    <x-slot name="nuevo">
    
    </x-slot>

    <x-tabla>
    <x-slot name="tcabecera">
                <x-tabla.th>Nombre</x-tabla.th>
                <x-tabla.th>Email</x-tabla.th>
                <x-tabla.th>Apellidos</x-tabla.th>
                <x-tabla.th>DNI</x-tabla.th>
                <x-tabla.th>Edad</x-tabla.th>
                <x-tabla.th>Telefono</x-tabla.th>
                <x-tabla.th>Direccion</x-tabla.th>
                <x-tabla.th>Ciudad</x-tabla.th>
                <x-tabla.th>Empresa</x-tabla.th>
                <x-tabla.th>Puesto</x-tabla.th>
                <x-tabla.th>Rol</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>
          
    </x-slot>

    <x-slot name="tbody">
   
    
   @foreach($usuarios as $usuario)


       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        
                   <x-tabla.td>{{$usuario->name}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->email}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->apellidos}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->dni}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->edad}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->telefono}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->direccion}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->ciudad}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->empresa}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->puesto}}</x-tabla.td>
                   <x-tabla.td>{{$usuario->rol}}</x-tabla.td>
                   <x-tabla.td>   
                       <a href="{{ route('modusuario',['id'=>$usuario->id]) }}"><i class="zmdi zmdi-edit"></i></a>
                       <a href="{{ route('delusuario',['id'=>$usuario->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                   </x-tabla.td>
       </tr>

   @endforeach

    <x-slot name="tlink">
    {{$usuarios->links()}}
    </x-slot>
    </x-slot>

    </x-tabla>


</x-milay>
