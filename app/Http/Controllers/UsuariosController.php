<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {

        $usuarios =  Usuarios::all();

        return $usuarios;
    }

    public function create(Request $request)
    {
        $usuarios = new Usuarios();
        $usuarios->create($request->all());
    }
}
