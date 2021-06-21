<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Horario;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function registrarGrupo(Request $request){
        $grupo = new Grupo();

        $grupo->nombre = $request->nombre;
        $grupo->id_nivel = $request->id_nivel;
        $grupo->descripcion = $request->descripcion;

        $grupo->save();

        $horario = new Horario();
        $hi = $request->horai;
        $hf = $request->horaf;
        //$hc = $hi.$hf;
        $horario->horarios = $hc;
        $horario->dia = $request->dia;
        $horario->save();
        return redirect('gestores/grupos/crear');
    }

    public function agregar_alumnoGrupo(Request $request, $id){
        $alumno = Alumno::findOrFail($id);
        $grupo = $request->get("grupo_s");
        $alumno->id_grupo = $grupo;
        //$alumno->save();
        return  $grupo;
        //return redirect('gestores/grupos/cargar');
    }
}
