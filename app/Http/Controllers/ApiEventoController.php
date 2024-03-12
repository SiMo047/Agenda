<?php

namespace App\Http\Controllers;

use App\Models\Evento;

use Illuminate\Http\Request;

class ApiEventoController extends Controller
{
    
    public function index()
    {
        $eventos = Evento::all();
        return response()->json($eventos);
    }

    public function show($id)
    {
        $evento = Evento::where('id', $id)->first();
        return response()->json($evento);
    }

    public function store(Request $request)
    {
         
        
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
        return response()->json($evento);
    }

    public function destroy($id)
    {
        $evento = Evento::where('id', $id)->first();
        $evento->delete();
        return response()->json('mensaje'=>'Evento eliminado');
    }


}
