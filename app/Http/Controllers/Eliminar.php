<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Alumno;
use App\Models\User;

class Eliminar extends Controller
{
    public function eliminarProfesor($id){
        $profesor = Profesor::where('id_profesor',$id)->first();
        $profesor->delete();
        return redirect('gestores\maestros\consultar-eliminar');
    }

    public function eliminarAlumno($id){
        $alumno = Alumno::where('id_alumno',$id)->first();
        $alumno->delete();
        return redirect('gestores\alumno\consultar-eliminar-alumnos');
    }

    public function eliminarUsuario($id){
        $usuario = User::where('id',$id)->first();
        $usuario->delete();
        return view('gestores\usuarios\consultarE-usuario');
    }
}
