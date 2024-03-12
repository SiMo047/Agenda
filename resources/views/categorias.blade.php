<x-milay>
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Categorias
            </h2>
            
        </h2>
    </x-slot>
    <x-slot name="nuevo">
    {{route('categoria.create')}}
    </x-slot>

    <x-tabla>
    <x-slot name="tcabecera">
                <x-tabla.th>Nombre</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>
          
    </x-slot>

    <x-slot name="tbody">
   
    
   @foreach($categorias as $categoria)


       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        
                   <x-tabla.td>{{$categoria->nombre}}</x-tabla.td>
                   <x-tabla.td>   
                     
                       <a href="{{route('delcategoria',['id'=>$categoria->id])}}"><i class="zmdi zmdi-delete"></i></a>
                   </x-tabla.td>
       </tr>

   @endforeach

    <x-slot name="tlink">
    {{$categorias->links()}}
    </x-slot>
    </x-slot>

    </x-tabla>


</x-milay>
