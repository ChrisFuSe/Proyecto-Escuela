<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Horario;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function registrarGrupo(Request $request){
        
        
        $grupo = new Grupo();

        $grupo->nombre = $request->nombre;
        $grupo->id_nivel = $request->id_nivel;
        $grupo->descripcion = $request->descripcion;
        $grupo->id_horario = $request->id_horario;
        $grupo->id_profesor = $request->id_profesor;
        //$grupo->save();

        
        return $grupo;
    }

    public function agregar_alumnoGrupo(Request $request){
        $alumno = Alumno::findOrFail($request->numero_control);
        $alumno->id_grupo = $request->grupo;
        $alumno->save();
        $grupo = Grupo::findOrFail($request->grupo);
        return "Se a agregado al alumno con el numero de control ".$alumno->numero_control." al grupo de ".$grupo->nombre;
    }

    public function eliminarGrupo($id){
        $grupos = Grupo::where('id_grupo',$id)->first();
        $grupos->delete();
        return redirect('gestores\grupos\consultar-grupo');
    }

    public function llenarGrupo($id){
        $grupos = Grupo::where('id_grupo',$id)->first();
        return view('gestores\grupos\modificar-grupo', compact('grupos'));
    }
    
    public function crearHorario(Request $request){
        $horario = new Horario();
        $hi = $request->horai;
        $hf = $request->horaf;
        $hc = $hi."-".$hf;
        $horario->horarios = $hc;
        $filtro = implode(",",$request->dias);
        $horario->dia = $filtro;
        $horario->save();
        return view('gestores\grupos\crearh-grupo');
    }
}
