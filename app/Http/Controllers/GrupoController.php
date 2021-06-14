<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function registrarGrupo(Request $request){
        $grupo = new Grupo();

        $grupo->nombre = $request->nombre;
        $grupo->id_nivel = $request->id_nivel;
        $grupo->descripcion = $request->descripcion;

        $grupo->save();
        return redirect('gestores/grupos/crear');
    }
}
