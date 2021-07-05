<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;
use App\Models\Grupo;

class CalificacionesController extends Controller
{
    public function consultarNiveles(Request $request){
        $grupo = Grupo::select('id_nivel')->where('id_grupo',$request->grupo)->first();
        $niveles = Nivel::select('descripcion')
                            ->where('id_nivel', $grupo->id_nivel)
                            ->first();
        return $niveles;
    }
}
