<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Grupo;

class Consultar extends Controller
{
    public function consultarProfesor(Request $request){
        $profesor = Profesor::find($request->id_profesor);
        return view('gestores/maestros/consultar-eliminar-maestro', compact('profesor'));
    }

    public function consultarGrupo(Request $request){
        //$grupo = Grupo::where('nombre', $request->grupo);
        return $request;
    }
}
