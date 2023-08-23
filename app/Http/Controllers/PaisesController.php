<?php

namespace App\Http\Controllers;

use App\Models\Paises;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    public function index()
    {

        $paises =  Paises::all();

        return $paises;
    }

    public function create(Request $request)
    {
        $paises = new Paises();
        $paises->pais = $request->pais;
        $paises->save();
    }
}
