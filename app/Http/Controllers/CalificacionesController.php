<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;
use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Calificacion;

class CalificacionesController extends Controller
{
    public function consultarNiveles(Request $request){
        $grupo = Grupo::select('id_nivel')->where('id_grupo',$request->grupo)->first();
        $niveles = Nivel::select('descripcion')
                            ->where('id_nivel', $grupo->id_nivel)
                            ->first();
        return $niveles;
    }

    public function agregarCalAS (Request $request){
        $calificacion = new Calificacion();
        $calificacion->calificacion_escrita = $request->calificacion_escrita;
        $calificacion->calificacion_oral = $request->calificacion_oral;
        $calificacion->unidad = $request->unidad;
        $calificacion->nivel = $request->nivel;
        $calificacion->numero_control = $request->numero_control;
        return $calificacion;
    }

    public function editarCalAs($id){
        $grupos = Grupo::where('id_grupo',$id)->first();
        $alumnos = Alumno::where('id_grupo',$id)->first();
        return view('gestores\cal_as\registrar-calificacion', compact('grupos','alumnos'));
    }
}
