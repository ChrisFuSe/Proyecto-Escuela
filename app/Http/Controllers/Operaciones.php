<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;
use App\Models\Profesor;
use App\Models\Grupo;

class Operaciones extends Controller
{
    public function opMaestro($operacion){
        switch($operacion){
            case 'alta': 
                return view('gestores/maestros/registrar-maestro');
            break;
            case 'editar':
                return view('gestores/maestros/modificar-maestro');
            break;
            case 'consultar-eliminar':
                return view('gestores/maestros/consultar-eliminar-maestro');
            break;
            default:
            abort(404);
        }
    }

    public function opConsultarMaestro(){
        return view('gestores/maestros/consultar-maestro');
    }

    public function opAlumno($operacion){
        switch($operacion){
            case 'alta': 
                return view('gestores/alumnos/registrar-alumnos');
            break;
            case 'editar':
                return view('gestores/alumnos/editar-alumnos');
            break;
            case 'consultar-eliminar':
                return view('gestores/alumnos/consultar-eliminar-alumnos');
            break;
            case 'consultar':
                return view('gestores/alumnos/consultar-alumnos');
            break;
            default:
            abort(404);
        }
    }
    public function opGrupo($operacion){
        switch ($operacion) {
            case 'crear':
                $niveles = Nivel::all();
                return view('gestores/grupos/registrar-grupo', compact('niveles'));
            break;
            case 'cargar':
                $grupos = Grupo::all();
                $profesores = Profesor::all();
                return view('gestores/grupos/cargar-informacion', compact('grupos', 'profesores'));
            break;
            case 'consultar':
                return view('gestores/grupos/consultar-grupo');
            break;
            case 'eliminar':
                return view('gestores/grupos/eliminar-grupo'); 
            break;
            case 'modificar':
                return view('gestores/grupos/modificar-grupo');
            break;
            default:
            abort(404);
        }
    }
    public function opCalificacion($operacion){
        switch($operacion){
            case 'registrar':
                return view('gestores/cal_as/registrar-calificacion');
            break;
            case 'modificar':
                return view('gestores/cal_as/modificar-calificacion');
            break;
            case 'consultar':
                return view('gestores/cal_as/consultar-calificacion');
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
                return view('gestores/usuarios/consultarE-usuario'); 
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
        return view('gestores/pagos/realizar-pagos');
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
}
