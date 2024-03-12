<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
      <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                        <!-- Logo -->
                    <div class="shrink-0 flex items-center mr-4">
                        <a href="{{route('welcome')}}">
                            <img src="{{ asset('img/circle.png') }}" style="max-width: 60px; max-height: 60px;">
                        </a>
                    </div>
                    
                    
                    <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden " id="example-collapse-navbar">
                                                <ul class="flex flex-col lg:flex-row list-none mr-auto ">
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{route('agenda')}}">
                                                            Agenda
                                                        </a>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{route('explora')}}">
                                                            Explora
                                                        </a>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{route('exp')}}">
                                                            Experiencias
                                                        </a> 
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                                            
                                                        <li class="flex items-center">
                                                            <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="" target="_blank">
                                                                <i class="lg:text-blueGray-200 text-blueGray-400 fab fa-facebook text-lg leading-lg">
                                                                    </i><span class="lg:hidden inline-block ml-2">Share</span>
                                                            </a>
                                                        </li>
                                                        <li class="flex items-center">
                                                            <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="" target="_blank">
                                                                <i class="lg:text-blueGray-200 text-blueGray-400 fab fa-twitter text-lg leading-lg"></i>
                                                                    <span class="lg:hidden inline-block ml-2">Tweet</span>
                                                            </a>
                                                        </li>
                                                        @if (Route::has('login'))
                                                                @auth
                                                                    <li class="flex items-center">
                                                                        <button class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150" type="button">
                                                                        <i class="fas fa-sign-in-alt"></i> 
                                                                        <a href="{{ route('milogout') }}">Cerrar Sesion</a> </button>
                                                                    </li>

                                                                    @if(auth()->user()->rol === 'Administrador')
                                                                        <li class="flex items-center">
                                                                            <button class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150" type="button">
                                                                                <i class="fas fa-users-cog"></i> 
                                                                                <a href="{{ route('usuarios') }}">Dash</a>
                                                                            </button>
                                                                        </li>
                                                                    @elseif(auth()->user()->rol === 'CreadorEventos')
                                                                        <li class="flex items-center">
                                                                            <button class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150" type="button">
                                                                                <i class="fas fa-users-cog"></i> 
                                                                                <a href="{{ route('eventos') }}">Dash</a>
                                                                            </button>
                                                                        </li>
                                                                    @endif

                                                                    @else
                                                                    <li class="flex items-center">
                                                                        <button class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150" type="button">
                                                                        <i class="fas fa-sign-in-alt"></i> 
                                                                        <a href="{{ route('login') }}">Iniciar Sesion</a> </button>
                                                                    </li>
                                                                    @if(Route::has('register'))
                                                                    <li class="flex items-center">
                                                                        <button class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150" type="button">
                                                                            <i class="fas fa-user-plus"></i> 
                                                                               <a href="{{ route('register') }}"> Registrarse</a>
                                                                        </button>
                                                                    </li>
                                                                    @endif
                                                                 
                                                                @endauth

                                                               

                                                        @endif
                                                </ul>
                    </div>
      </div>
    </nav>