<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gestores extends Controller
{
    public function gesPago($gestor)
    {
        switch($gestor){
            case'reportes':
                return view('gestores/pagos/reportes');
            break;
            default:
            abort(404);
        }
        
    }
    public function gesCal_As($gestor)
    {
        switch($gestor){
            case'calificaciones':
                return view('gestores/cal_as/gestor-calificaciones');
            break;
            case'asistencia':
                return view('gestores/cal_as/gestor-asistencias');
            break;
            default:
            abort(404);
        }
    }
}
