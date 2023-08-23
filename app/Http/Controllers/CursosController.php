<?php

namespace App\Http\Controllers;

use App\Models\cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        $cursos =  cursos::all();
        return $cursos;
    }

    public function create(Request $request)
    {
        $cursos = new cursos();
        $cursos->curso = $request->curso;
        $cursos->save();
    }
}
