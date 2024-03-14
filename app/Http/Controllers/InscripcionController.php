<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Evento;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones=Inscripcion::paginate(10);
        
        return view('inscripciones',compact( 'inscripciones',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $inscripcion = new Inscripcion();

       $evento_id=$request->evento_id;
       $evento=Evento::where('id', $evento_id)->first();

       $inscripcion->asistente_id = $request->asistente_id;
       $inscripcion->evento_id = $request->evento_id;
       $inscripcion->numEntradas = $request->num_entradas;
       $inscripcion->estado = 'recibida';

       $inscripcion->save();

       $usuario=auth()->user();
       $registrado=Inscripcion::where('asistente_id',$usuario->id)->where('evento_id',$evento->id)->exists();

        return view('web.detalle_evento',compact('evento','inscripcion','registrado'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inscripcion=Inscripcion::where('id',$id)->first();
        $inscripcion->delete();
        return redirect()->route('home');
    }
}
