<?php

namespace App\Http\Controllers;

use App\Models\Concepto;
use Illuminate\Http\Request;
use App\Models\Nivel;
use App\Models\Profesor;
use App\Models\Alumno;
use App\Models\User;
use App\Models\Horario;
use App\Models\Grupo;

class Operaciones extends Controller
{
    public function opMaestro($operacion){
        switch($operacion){
            case 'alta': 
                return view('gestores/maestros/registrar-maestro');
            break;
            case 'consultarE':
                $profesor = Profesor::all();
                return view('gestores/maestros/consultarE-maestro', compact('profesor'));
            break;
            case 'editar':
                return view('gestores/maestros/editar-maestro');
            break;
            default:
            abort(404);
        }
    }

    public function opConsultarMaestro(){
        $profesor = Profesor::all();
        return view('gestores/maestros/consultar-maestro', compact('profesor'));
    }

    public function opAlumno($operacion){
        switch($operacion){
            case 'alta': 
                return view('gestores/alumnos/registrar-alumnos');
            break;
            case 'consultarE':
                $alumnos = Alumno::all()
                        ->where('estado_actual', 'Alta');
                return view('gestores/alumnos/consultarE-alumnos', compact('alumnos'));
            break;
            case 'modificar':
                return view('gestores/alumnos/modificar-alumnos');
            break;
            case 'consultar':
                $alumnos = Alumno::all()
                        ->where('estado_actual', 'Alta');
                return view('gestores/alumnos/consultar-alumnos', compact('alumnos'));
            break;
            default:
            abort(404);
        }
    }
    public function opGrupo($operacion){
        switch ($operacion) {
            case 'crear':
                $niveles = Nivel::all();
                $profesores = Profesor::all();
                $horarios = Horario::all();
                return view('gestores/grupos/registrar-grupo', compact('niveles','profesores', 'horarios'));
            break;
            case 'cargar':
                $grupos = Grupo::all();
                $alumnos = Alumno::all();
                return view('gestores/grupos/cargar-informacion', compact('grupos', 'alumnos'));
            break;
            case 'consultar':
                $grupos = Grupo::all();
                $profesores = Profesor::all();
                $horarios = Horario::all();
                $niveles = Nivel::all();
                return view('gestores/grupos/consultar-grupo', compact('grupos', 'profesores', 'horarios','niveles'));
            break;
            case 'consultarE':
                $grupos = Grupo::all();
                $profesores = Profesor::all();
                $horarios = Horario::all();
                $niveles = Nivel::all();
                return view('gestores/grupos/consultarE-grupo', compact('grupos', 'profesores', 'horarios','niveles'));
            break;
            case 'crearh':
                $horarios = Horario::all();
                return view('gestores/grupos/crearh-grupo', compact('horarios')); 
            break;
            default:
            abort(404);
        }
    }
    public function opCalificacion($operacion){
        switch($operacion){
            case 'registrar':
                $grupos = Grupo::all();
                $niveles = Nivel::all();
                $alumnos = Alumno::all();
                return view('gestores/cal_as/registrar-calificacion', compact('grupos', 'niveles','alumnos'));
            break;
            case 'modificar':
                return view('gestores/cal_as/modificar-calificacion');
            break;
            case 'consultar':
                return view('gestores/cal_as/consultar-calificacion');
            break;
            case 'listar':
                return view('gestores/grupos/listar-grupo');
            break;
            default:
            abort(404);
        }
    }
    public function opAsistencia($operacion){
        switch($operacion){
            case 'registrar':
                return view('gestores/cal_as/registrar-asistencia');
            break;
            case 'modificar':
                return view('gestores/cal_as/modificar-asistencia');
            break;
            case 'consultar':
                return view('gestores/cal_as/consultar-asistencia');
            break;
            default:
            abort(404);
        }
    }
    public function opUsuarios($operacion){
        switch($operacion){
            case 'alta':
                return view('gestores/usuarios/registrar-usuario'); 
            break;
            case 'editar':
                return view('gestores/usuarios/editar-usuario'); 
            break;
            case 'consultar-eliminar':
                $usuarios = User::all();
                return view('gestores/usuarios/consultarE-usuario', compact('usuarios')); 
            break;
            case 'bitacora':
                return view('gestores/usuarios/bitacora'); 
            break;
            default:
            abort(404);
        }
    }
    public function opTransaccion()
    {
        $conceptos = Concepto::all();
        return view('gestores/pagos/realizar-pagos', compact('conceptos'));
    }
    public function opGestion_Pago()
    {
        return view('gestores/pagos/consultar-pagos');
    }
    public function opReportes($operacion)
    {
        switch($operacion){
            case 'reporte-atrasos':
                return view('gestores/pagos/reporte-atrasos');
            break;
            case 'reporte-pagos':
                return view('gestores/pagos/reporte-pagos');
            break;
            default:
            abort(404);
        }
    }
    public function opCambiarPrecio()
    {
        $conceptos = Concepto::all();
        return view('gestores/pagos/cambiar-precios', compact('conceptos'));
    }

}
