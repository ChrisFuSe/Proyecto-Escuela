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

    public function editarProfesor(Request $request){
        $profesor2 = Profesor::find($request->id_profesor);
        $profesor2 -> $request->rfc;
        $profesor2 = $request->nombres;
        $profesor2 = $request->ap_paterno;
        $profesor2 = $request->ap_materno;
        $profesor2 = $request->estado;
        $profesor2 = $request->ciudad;
        $profesor2 = $request->calle;
        $profesor2 = $request->numero;
        $profesor2 = $request->colonia;
        $profesor2 = $request->codigo_postal;
        $profesor2 = $request->correo;
        $profesor2 = $request->telefono;

        $profesor2->save();
        return redirect('gestores\maestros\editar');
        
    }

}
