<?php

namespace App\Http\Controllers;

use App\Models\Subcategorias;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index()
    {


        $usuarios = Usuarios::with(
            'pais',
            'registros.subcategoria.categoria'
        )->select(
            'id',
            'nombre',
            'apellido',
            'vision',
            'status',
            'pais_id',
            'curso_id'
        )->get();


        return $usuarios;
    }

    public function show(Request $request)
    {

        $usuarios = Usuarios::with('pais','curso','registros.subcategoria.categoria')
            ->select(
                'id',
                'nombre',
                'apellido',
                'vision',
                'status',
                'pais_id',
                'curso_id',
            )
            ->find($request->id);

        return $usuarios;
    }

    public function create(Request $request)
    {
        $usuarios = new Usuarios();

        $usuarios->correo = $request->correo;

        $pass = Hash::make($request->pass);

        $usuarios->pass =  $pass;

        $usuarios->save();
    }

    public function update(Request $request)
    {
        $usuario = Usuarios::find($request->id);

        $usuario->update($request->all());
    }
}
