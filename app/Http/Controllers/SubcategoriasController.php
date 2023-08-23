<?php

namespace App\Http\Controllers;

use App\Models\Subcategorias;
use Illuminate\Http\Request;

class SubcategoriasController extends Controller
{
    public function index()
    {
        $subcategorias =  Subcategorias::all();
        return $subcategorias;
    }

    public function create(Request $request)
    {

        $subcategorias = new Subcategorias();

        $subcategorias->create($request->all());
    }
}
