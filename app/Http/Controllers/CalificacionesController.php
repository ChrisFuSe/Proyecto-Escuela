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

    public function agregarCalAS(Request $request, $id){
        $a = Alumno::where('numero_control',$id)->first();
        $g = $a->id_grupo;
        $f = Grupo::where('id_grupo',$g)->first();
        $nivel = $f->id_nivel;
        return view('gestores\cal_as\registrar-calificacion', compact('id','nivel'));
    }

    public function editarCalAs(Request $request, $id){
        $calificacion = Calificacion::findOrFail($id);
        $calificacion->calificacion_escrita = $request->calificacion_escrita;
        $calificacion->calificacion_oral = $request->calificacion_oral;
        $calificacion->unidad = $request->unidad;
        $calificacion->id_nivel = $request->nivel;
        $calificacion->asistencia_total = $request->asistencia_total;
        $calificacion->numero_control = $request->numero_control; 
        $calificacion->save();
        return redirect('gestores/grupos/consultar');
    }

    public function registrarCalAs(Request $request){
        $calificacion = new Calificacion();
        $calificacion->calificacion_escrita = $request->calificacion_escrita;
        $calificacion->calificacion_oral = $request->calificacion_oral;
        $calificacion->unidad = $request->unidad;
        $calificacion->id_nivel = $request->nivel;
        $calificacion->asistencia_total = $request->asistencia_total;
        $calificacion->numero_control = $request->numero_control; 
        $calificacion->save();
        return redirect('gestores/grupos/consultar');
    }

    public function llenarCalAs($id){
        $cal = Calificacion::where('id_calificacion',$id)->first();
        return view('gestores\cal_as\modificar-calificacion', compact('cal'));
    }
}
