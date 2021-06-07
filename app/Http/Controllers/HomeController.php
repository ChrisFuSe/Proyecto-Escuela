<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }

    public function dirigirHome()
    {
        switch(auth()->user()->tipo){
            case '1':
                return view('home/home-directora');
                break;
            case '2':
                return view('home/home-secretaria');
                break;
            case '3':
                return view('home/home-maestro');
                break;
            default:
                return "Tipo inválido";
        }
    }

    public function cargarGestor($gestor){
        switch(auth()->user()->tipo){
            case '1':
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
                break;
            case '2':
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
                    case 'cal-as':
                        return view('gestores\cal_as\gestor-calificaciones-asistencia');
                    break;
                    default:
                    abort(404);
                }
                break;
            case '3':
                switch ($gestor){
                    case 'cal-as':
                        return view('gestores\cal_as\gestor-calificaciones-asistencia');
                    break;
                    default:
                    abort(404);
                }
                break;
            default:
                return "Tipo inválido";
        }
    }
}
