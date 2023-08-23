<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index()
    {

        $roles =  roles::all();

        return $roles;
    }

    public function create(Request $request)
    {
        $rol = new roles();
        $rol->rol = $request->rol;
        $rol->save();
    }
}
