<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Lara</title>
    <link rel="icon" href="{{ asset('img/circle.png') }}">

      <!-- Scripts Estilosssss-->

      @vite(['resources/css/app.css', 'resources/js/app.js'])
     <!--<script src="https://cdn.tailwindcss.com"></script>-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
<body>
@include('layouts.navigation')
<nav x-data="{ open: false }" class="bg-white white:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="flex bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
            
    
    
             <div class="flex w-full items-center justify-between px-12 py-2">
    
                <h5>{{$titulo}}</h5>
                <div class="flex-grow"></div><!---div de separacion -->


                <div class="flex-grow"></div><!---div de separacion -->
                <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-5 mb-2">
                    <a href="{{$nuevo}}">Nuevo</a></button>

             </div>

    </div>
</nav>   

    
    <div class="">
         {{$slot}} <!--Este slot es de la table -->
    </div>
    
</body>
</html>