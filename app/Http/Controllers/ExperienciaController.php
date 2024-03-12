<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;
use App\Models\Empresa;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiencias=Experiencia::paginate(11);
        return view('experiencias',['experiencias'=>$experiencias]);
    }


    public function experiencias()
    {
        $experiencias=Experiencia::all();
        return view('web.experiencia',compact('experiencias'));
    }

    public function detalle_exp($id)
    {
        $experiencia=Experiencia::where('id', $id)->first();

    

        return view('web.detalle_exp',compact('experiencia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas=Empresa::all();
        return view('forms.experiencia',compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experiencia = new Experiencia();
        $experiencia->nombre = $request->nombre;
        $experiencia->fechaInicio = $request->fechaInicio;
        $experiencia->fechaTexto = $request->fechaTexto;
        $experiencia->descripcion_corta = $request->descripcion_corta;
        $experiencia->precio_por_persona = $request->precio_por_persona;
        $experiencia->link = $request->link;
        $experiencia->descripcion_larga = $request->descripcion_larga;
        $experiencia->empresa_id = $request->empresa_id;

        $experiencia->save();

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = 'experiencia_' . $experiencia->id . '.' . $imagen->getClientOriginalExtension();
            $imagen->storeAs('public/img', $nombreImagen);
        }

        return redirect()->route('experiencias');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experiencia $experiencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experiencia $experiencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experiencia $experiencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experiencia=Experiencia::where('id', $id)->first();
        $experiencia->delete();
        return redirect()->route('experiencias');
    }
}
