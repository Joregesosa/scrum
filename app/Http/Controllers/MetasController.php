<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MetasController extends Controller
{
    public function index(Request $request)
    {

        $usuario = Usuarios::with('curso', 'pais', 'registros.subcategoria')->where('id', $request->id)->get();

        $userData = ["nombre" => $usuario[0]->nombre . ' ' . $usuario[0]->apellido, "curso" => $usuario[0]->curso, "pais" => $usuario[0]->pais];

        $registrosByFecha = $usuario[0]->registros->groupBy('meta_fecha');
        $years = [];
        $espiritual = [];
        $familiar = [];
        $intelectual = [];
        $laboral = [];
        $fisico = [];

        foreach ($registrosByFecha as $byFecha) {

            $date =  $byFecha[0]->meta_fecha;
            $years[] = $date;
            $record_e = [];
            $record_f = [];
            $record_i = [];
            $record_l = [];
            $record_fs = [];

            foreach ($byFecha as $registro) {

                $categoria_id = $registro->subcategoria->categoria_id;

                switch ($categoria_id) {
                    case 1:
                        $record_e[$registro->subcategoria->subcategoria] = $registro->que;
                        $espiritual[$date] = $record_e;
                        break;
                    case 2:
                        $record_f[$registro->subcategoria->subcategoria] = $registro->que;
                        $familiar[$date] = $record_f;
                        break;
                    case 3:
                        $record_i[$registro->subcategoria->subcategoria] = $registro->que;
                        $intelectual[$date] = $record_i;
                        break;
                    case 4:
                        $record_l[$registro->subcategoria->subcategoria] = $registro->que;
                        $laboral[$date] = $record_l;
                        break;
                    case 5:
                        $record_fs[$registro->subcategoria->subcategoria] = $registro->que;
                        $fisico[$date] = $record_fs;
                        break;
                }
            }
        }

        $brujula = [
            "usuario" => $userData,
            "years" => $years,

            "metas" => [
                "espiritual" => $espiritual,
                "familiar" => $familiar,
                "intelectual" => $intelectual,
                "laboral" => $laboral,
                "fisico" => $fisico
            ]
        ];

        // return $brujula;

        $pdf = Pdf::loadView('pdf', compact("brujula"));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
