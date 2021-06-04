<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }
    public function cargarHome($tipo)
    {
        switch ($tipo){
            case 'directora':
                return view('home/home-directora');
            break;
            case 'secretaria':
                return view('home/home-secretaria');
            break;
            case 'maestro':
                return view('home/home-maestro');
            break;
            default:
            abort(404);
        }
    }
    public function cargarGestor($gestor){
        switch ($gestor){
            case 'pagos':
                return view('gestores\pagos\gestor-pago');
            break;
            case 'alumnos':
                return view('gestores\alumnos\gestor-alumnos');
            break;
            case 'maestros':
                return view('gestores\maestros\gestor-maestros');
            break;
            case 'grupos':
                return view('gestores\grupos\gestor-grupos');
            break;
            case 'usuarios':
                return view('gestores\usuarios\gestor-usuarios');
            break;
            case 'cal-as':
                return view('gestores\cal_as\gestor-calificaciones-asistencia');
            break;
            default:
            abort(404);
        }
    }
}
