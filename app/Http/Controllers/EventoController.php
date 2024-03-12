<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Categoria;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos=Evento::paginate(25);
        return view('eventos',['eventos'=>$eventos]);

    }

    public function index_welcome()
    {
        $eventos=Evento::paginate(25);
        return view('welcome',['eventos'=>$eventos]);
        
    }

    public function agenda()
    {

        $categorias= Categoria::all();
        $eventos=Evento::paginate(25);
        return view('web.agenda',compact('categorias','eventos'));
        
    }

    public function detalle_evento($id)
    {
        $evento=Evento::where('id', $id)->first();

        $usuario=auth()->user();
        

        $registrado=Inscripcion::where('asistente_id',$usuario->id)->where('evento_id',$evento->id)->exists();

        $inscripcion=Inscripcion::where('asistente_id',$usuario->id)->where('evento_id',$evento->id)->first();

                //DEVOLVERA 1 SI EXISTE Y NADA SI NO 

        return view('web.detalle_evento',compact('evento', 'registrado','inscripcion'));
    }


    
    public function filtro(Request $request)
    {       
            $categorias= Categoria::all();
            $categoria=$request->categoria;
            $fecha=$request->filtro;

         

            $eventos = Evento::where('categoria_id', $categoria);

            if ($fecha === 'semana') {
                $eventos->whereBetween('fecha', [
                    now()->startOfWeek(), 
                    now()->endOfWeek()
                ]);
            } elseif ($fecha === 'mes') {
                $eventos->whereMonth('fecha', '=', now()->month);
            } 
            
          

            $eventos=$eventos->get();
            
       
            return view('web.filtrado',compact('eventos','categorias'));
    }

    public function explora()
    {       
        $infos = collect([
            (object) [
                'nombre' => 'Playas Exóticas',
                'descripcion' => 'Disfruta de la belleza natural en nuestras playas exóticas , sumérgete en aguas cristalinas y arena dorada en nuestras playas paradisíacas ',
                'imagen'=>'playa.jpg',
            ],
            (object) [
                'nombre' => 'Servicios de Primera Clase',
                'descripcion' => 'Comodidad y conveniencia al alcance de tu mano con nuestros servicios de primera clase',
                'imagen'=>'servicios.jpg',
            ],
            (object) [
                'nombre' => 'Transporte Eficiente',
                'descripcion' => 'Con opciones de transporte público y alquiler de vehículos, llegar a tu destino nunca ha sido tan fácil.',
                'imagen'=>'transporte.jpg',
            ],
            (object) [
                'nombre' => 'Instalaciones Modernas',
                'descripcion' => 'Desde baños y duchas hasta áreas de picnic y zonas de juegos, nuestras instalaciones tienen todo lo que necesitas.',
                'imagen'=>'instalaciones.jpg',
            ],
        ]);


        return view('web.explora', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias= Categoria::all();
        return view('forms.evento',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoria_id' => 'required|exists:categorias,id',
            'asistente_id' => 'required|exists:users,id', 
            
        ]);


        $evento = new Evento();

        $evento->nombre = $request->nombre;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->descripcion = $request->descripcion;
        $evento->ciudad = $request->ciudad;
        $evento->direccion = $request->direccion;
        $evento->estado = $request->estado;
        $evento->aforomax = $request->aforomax;
        $evento->tipo = $request->tipo;
        $evento->numMaxEntradasPorPersona = $request->numMaxEntradasPorPersona;
        $evento->categoria_id = $request->categoria_id;
        $evento->asistente_id = $request->asistente_id;

    
         $evento->save();

         if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = 'evento_' . $evento->id . '.' . $imagen->getClientOriginalExtension();
            $imagen->storeAs('public/img', $nombreImagen);
        }

         return redirect()->route('eventos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $evento=Evento::where('id', $id)->first();
        $categorias= Categoria::all();

        return view('forms.editevento',compact( 'evento','categorias'));



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evento=Evento::where('id', $id)->first();

        $evento->nombre = $request->nombre;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->descripcion = $request->descripcion;
        $evento->ciudad = $request->ciudad;
        $evento->direccion = $request->direccion;
        $evento->estado = $request->estado;
        $evento->aforomax = $request->aforomax;
        $evento->tipo = $request->tipo;
        $evento->numMaxEntradasPorPersona = $request->numMaxEntradasPorPersona;
        $evento->categoria_id = $request->categoria_id;
        $evento->asistente_id = $request->asistente_id;

        $evento->save();

        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe
            if ($evento->imagen && Storage::exists('public/img/' . $evento->imagen)) {
                Storage::delete('public/img/' . $evento->imagen);
            }
        
            // Guardar la nueva imagen
            $imagen = $request->file('imagen');
            $nombreImagen = 'evento_' . $evento->id . '.' . $imagen->getClientOriginalExtension();
            $imagen->storeAs('public/img', $nombreImagen);
        
            // Actualizar el nombre de la imagen en la base de datos
            $evento->imagen = $nombreImagen;
        }

        return redirect()->route('eventos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evento=Evento::where('id', $id)->first();
        $evento->delete();
        return redirect()->route('eventos');
    }
}
