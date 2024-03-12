<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\User;
use Illuminate\Http\Request;

class ApiInscripcionController extends Controller
{
    public function index($dni)
    {
        $asistente = User::where('dni', $dni)->first();
        $inscripciones = Inscripcion::where('asistente_id', $asistente->id)->get();
        
        return response()->json($inscripciones);
    }


}
