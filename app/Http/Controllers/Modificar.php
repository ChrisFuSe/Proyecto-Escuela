<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class Modificar extends Controller
{
    public function llenarProfesor(Request $request){
        $profesor = Profesor::find($request->id_profesor);
        return view('gestores/maestros/modificar-maestro', compact('profesor'));
    }

    public function editarProfesor(Request $request, Profesor $profesor){

        $request->validate([
            'id_profesor' => 'required',
            'rfc' => 'required',
            'nombres' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'estado' => 'required',
            'ciudad' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'colonia' => 'required',
            'codigo_postal' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
        ]);

        return redirect('gestores/editar/profesor');
    }

}
