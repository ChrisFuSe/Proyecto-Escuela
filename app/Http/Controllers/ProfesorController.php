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

    public function consultarProfesor(Request $request){
        $profesor = Profesor::find($request->id_profesor);
        return view('gestores/maestros/consultar-eliminar-maestro', compact('profesor'));
    }

    public function eliminarProfesor($id){
        $profesor = Profesor::where('id_profesor',$id)->first();
        $profesor->delete();
        return redirect('gestores\maestros\consultar-eliminar');
    }

   /* public function llenarProfesor(){
        $profesor = Profesor::all();
        
        return view('gestores/maestros/modificar-maestro', compact('profesor'));
        //dd($profesor);
        //return view('profesor', array('profesores'->$profesor));
    }*/

    public function editarProfesor($id){

    }
}
