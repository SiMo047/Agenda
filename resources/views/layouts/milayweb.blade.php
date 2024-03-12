<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="apple-touch-icon"sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" />
    <!--<script src="https://cdn.tailwindcss.com"></script>-->
    <link rel="stylesheet" href="{{asset('assets/styles/tailwind.css')}}" />
  
    
    <title>Agenda Lara </title>
    <link rel="icon" href="{{ asset('img/circle.png') }}"/>
  </head>
  <body class="text-blueGray-700 antialiased">
    @include('layouts.customnav')
    <main>
      <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
                  <!--Div foto de fondo -->
                  {{$fondo}}

                    <!--Div bienvenidos  -->    
            <div class="container relative mx-auto">           
              <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                          <div class="pr-12">
                              <h1 class="text-white font-semibold text-5xl">
                              {{$titulo}}
                              </h1>
                              {{$opciones}}
                          </div>
                        </div>
              </div>
           </div>


            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"  style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden"xmlns="http://www.w3.org/2000/svg" 
                    preserveAspectRatio="none"
                    version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-100 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>

      </div>
      <section class="pb-20 bg-blueGray-300 -mt-24">
       


      {{$info}}
        
      </section>
   
      
      
    </main>


<!-----------------------FOOTER------------------------>

    <footer class="relative bg-blueGray-200 pt-8 pb-6">


          <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20" style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
              <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
          </div>


          <div class="container mx-auto px-4">
                  <div class="flex flex-wrap text-center lg:text-left">
                        <div class="w-full lg:w-6/12 px-4">
                          <h4 class="text-3xl font-semibold">AGENDA Lara</h4>
                          <h5 class="text-lg mt-0 mb-2 text-blueGray-600">Nuestras Redes</h5>
                                <div class="mt-6 lg:mb-0 mb-6">
                                    <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                    <i class="fab fa-twitter"></i></button>
                                    
                                    <button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                    <i class="fab fa-facebook-square"></i></button>
                                    
                                    <button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                    <i class="fab fa-dribbble"></i></button>
                                    
                                    
                                </div>
                        </div>
                  
                    </div>
              <hr class="my-6 border-blueGray-300" />
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                  <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                      Copyright © Creado Por Mohammed 
                    </div>
                  </div>
                </div>
          </div>


    </footer>
   <!-- <script src="https://cdn.tailwindcss.com"></script>-->
  </body>



  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
 
  <script>
    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById("get-current-year").innerHTML =
          new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</html>
