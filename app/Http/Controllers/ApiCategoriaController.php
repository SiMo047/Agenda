<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;


class ApiCategoriaController extends Controller
{
    public function show($id)
    {
        $categoria = Categoria::where('id', $id)->first();
        $eventos = $categoria->eventos;
        return response()->json($eventos);
    }
}
