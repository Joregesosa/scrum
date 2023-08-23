<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function index()
    {

        $registros =  Registros::all();

        return $registros;
    }

    public function create(Request $request)
    {

        for ($i = 1; $i < 12; $i++) {

            $registros = new Registros();

            $registros->meta_fecha = $request->meta_fecha;

            $registros->usuario_id = $request->usuario_id;

            $registros->subcategoria_id = $i;

            $registros->save();
        }
    }

    public function update(Request $request)
    {
        $registro = Registros::find($request->id);

        $registro->update($request->all());
    }
}
