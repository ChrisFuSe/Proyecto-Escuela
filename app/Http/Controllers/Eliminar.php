<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class Eliminar extends Controller
{
    public function eliminarProfesor($id){
        $profesor = Profesor::where('id_profesor',$id)->first();
        $profesor->delete();
        return redirect('gestores\maestros\consultar-eliminar');
    }
}
