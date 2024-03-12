<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;

class ApiExperienciaController extends Controller
{
    public function index()
    {
        $experiencias = Experiencia::all();
        return response()->json($experiencias);
    }
}
