<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {

        $categorias =  Categorias::all();
        return $categorias;
    }

    public function create(Request $request)
    {
        $categorias = new Categorias();
        $categorias->categoria = $request->categoria;
        $categorias->save();
    }
}
