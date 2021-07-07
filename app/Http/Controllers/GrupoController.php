<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Horario;
use App\Models\Profesor;
use App\Models\Nivel;
use App\Models\Asistencia;
use App\Models\Calificacion;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GrupoController extends Controller
{
    public function registrarGrupo(Request $request){
        $grupo = new Grupo();
        $grupo->nombre = $request->nombre;
        $grupo->descripcion = $request->descripcion;
        $grupo->id_nivel = $request->id_nivel;
        $grupo->id_horario = $request->id_horario;
        $grupo->id_profesor = $request->id_profesor;   
        $grupo->save();
        return redirect('gestores\grupos\crear');
    }

    public function agregar_alumnoGrupo(Request $request){
        $alumno = Alumno::findOrFail($request->numero_control);
        $alumno->id_grupo = $request->grupo;
        $alumno->save();
        $grupo = Grupo::findOrFail($request->grupo);
        return "Se ha agregado al alumno con el numero de control ".$alumno->numero_control." al grupo de ".$grupo->nombre;
    }

    public function quitar_alumnoGrupo(Request $request){
        $alumno = Alumno::findOrFail($request->numero_control);
        if($alumno->id_grupo == ""){
            return "El alumno no tenia grupo";
        }else{
            $alumno->id_grupo = NULL;
            $alumno->save();
            $grupo = Grupo::findOrFail($request->grupo);
            return "Se ha quitado al alumno con el numero de control ".$alumno->numero_control." del grupo de ".$grupo->nombre;
        }
    }

    public function eliminarGrupo($id){
        $grupos = Grupo::where('id_grupo',$id)->first();
        $grupos->delete();
        return redirect('gestores\grupos\consultar');
    }

    public function llenarGrupo($id){
        $grupos = Grupo::where('id_grupo',$id)->first();
        $prof = Profesor::where('id_profesor',$grupos->id_profesor)->first();
        $name = $prof->nombres;
        $app = $prof->ap_paterno;
        $apm = $prof->ap_materno;
        $profesor = $name." ".$app." ".$apm;
        $hor = Horario::where('id_horario',$grupos->id_horario)->first();
        $h = $hor->horarios;
        $d = $hor->dia;
        $horario = $h." ".$d;
        $niv = Nivel::where('id_nivel',$grupos->id_nivel)->first();
        $nivel = $niv->descripcion;
        $profesort = Profesor::where('id_profesor','!=',$grupos->id_profesor)->get();
        $horariot = Horario::where('id_horario','!=',$grupos->id_horario)->get();
        $nivelt = Nivel::where('id_nivel','!=',$grupos->id_nivel)->get();
        return view('gestores\grupos\modificar-grupo', compact('grupos','profesor','horario','nivel','profesort','horariot','nivelt'));
    }

    public function listarGrupo($id){
        $grupos = Grupo::where('id_grupo',$id)->first();
        $prof = Profesor::where('id_profesor',$grupos->id_profesor)->first();
        $name = $prof->nombres;
        $app = $prof->ap_paterno;
        $apm = $prof->ap_materno;
        $profesor = $name." ".$app." ".$apm;
        $hor = Horario::where('id_horario',$grupos->id_horario)->first();
        $h = $hor->horarios;
        $d = $hor->dia;
        $horario = $h." ".$d;
        $niv = Nivel::where('id_nivel',$grupos->id_nivel)->first();
        $nivel = $niv->descripcion;
        $alum = Alumno::where('id_grupo',$id)->get();
        $cal = Calificacion::rightJoin("alumnos","calificaciones.numero_control","=","alumnos.numero_control")
        ->where('alumnos.id_grupo','=',$id)
        ->select('alumnos.nombres','alumnos.ap_paterno', 'alumnos.ap_materno', 'alumnos.numero_control' ,'calificaciones.calificacion_escrita', 'calificaciones.calificacion_oral','calificaciones.unidad','calificaciones.asistencia_total','calificaciones.id_calificacion','calificaciones.id_nivel')
        ->get();
        //return $cal;
        return view('gestores\grupos\listar-grupo', compact('grupos','profesor','horario','nivel','alum','cal'));
       // return view('gestores\grupos\listar-grupo', compact('grupos','profesor','horario','nivel','alum'));
    }

    public function actualizarGrupo(Request $request, $id){
        $grupo = Grupo::findOrFail($id);
        $grupo->nombre = $request->nombre;
        $grupo->descripcion = $request->descripcion;
        $grupo->id_nivel = $request->id_nivel;
        $grupo->id_horario = $request->id_horario;
        $grupo->id_profesor = $request->id_profesor;
        try{
            $grupo->save();
            return redirect('gestores\grupos\consultar');
        }catch(Exception $e){
            return "Error no se han podido actualizar los datos del grupo en la base de datos";
        }
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
        return redirect('gestores\grupos\crearh');
    }

    public function eliminarHorario($id){
        $horario = Horario::where('id_horario',$id)->first();
        $grupo = Grupo::where('id_horario',$id)->first();
        if(!empty($grupo)){
            return redirect()->back()->with('error', 'No se pueden eliminar horarios con grupos asignados');   
        }
        else{
            $horario->delete();
            return redirect()->back()->with('success', 'Se ha eliminado correctamente');   
        } 
    }

}
