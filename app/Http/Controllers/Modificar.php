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
        $profesor = Profesor::find($request->id_profesor);
        $profesor->rfc = $request->rfc;
        $profesor->nombres = $request->nombres;
        $profesor->ap_paterno = $request->ap_paterno;
        $profesor->ap_materno = $request->ap_materno;
        $profesor->estado = $request->estado;
        $profesor->ciudad = $request->ciudad;
        $profesor->calle = $request->calle;
        $profesor->numero = $request->numero;
        $profesor->colonia = $request->colonia;
        $profesor->codigo_postal = $request->codigo_postal;
        $profesor->correo = $request->correo;
        $profesor->telefono = $request->telefono;

        $profesor->save();
        return redirect('gestores\maestros\editar');
        
    }

   
    

}
