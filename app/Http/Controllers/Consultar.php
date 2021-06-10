<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class Consultar extends Controller
{
    public function consultarProfesor(Request $request){
        $profesor = Profesor::find($request->id_profesor);
        return view('gestores/maestros/consultar-eliminar-maestro', compact('profesor'));
    }
}
