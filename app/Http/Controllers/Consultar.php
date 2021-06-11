<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Alumno;
use App\Models\User;
use App\Models\Pago;

class Consultar extends Controller
{
    public function consultarProfesor(Request $request){
        $profesor = Profesor::find($request->id_profesor);
        return view('gestores/maestros/consultar-eliminar-maestro', compact('profesor'));
    }

    public function consultarAlumno(Request $request){
        $alumno = Alumno::find($request->numero_control);
        return view('gestores/alumnos/consultar-eliminar-alumnos', compact('alumno'));
    }

    public function consultarUsuario(Request $request){
        $usuario = User::find($request->id);
        return view('gestores/usuarios/consultarE-usuario', compact('usuario'));
    }

    public function consultarPagos(Request $request){
        $pagos = Pago::find($request->numero_control);
        return view('gestores/pagos/consultar-pagos', compact('pagos'));
    }

    public function consultarDatos(Request $request){
        $datos = Pago::find($request->num_referencia);
        return view('gestores/pagos/consultar-pagos', compact('datos'));
    }

}
