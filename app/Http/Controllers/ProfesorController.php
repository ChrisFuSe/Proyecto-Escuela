<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function registrarProfesor(Request $request){
        $profesor = new Profesor();

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
        return view('gestores\maestros\registrar-maestro');
    }

    public function eliminarProfesor($id){
        $profesor = Profesor::where('id_profesor',$id)->first();
        $profesor->delete();
        return redirect('gestores\maestros\consultarE');
    }

    public function llenarProfesor($id){
        $profesor = Profesor::where('id_profesor',$id)->first();
        return view('gestores\maestros\editar-maestro', compact('profesor'));
    }

    public function actualizarProfesor(Request $request, $id){
        $profesor = Profesor::findOrFail($id);
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
        return redirect('gestores\maestros\consultarE');
    }
}
