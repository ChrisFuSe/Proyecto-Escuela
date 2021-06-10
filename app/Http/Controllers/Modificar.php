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

    /*public function editaresProfesor(Request $request,$id){
        $profesor = new Profesor();
        $profesor->fill($request->input())->save();
        return $profesor;
        //return redirect('gestores\maestros\editar');
    }

    public function editaresProfesor(Request $request,$id){
        Profesor::where('id_profesor','=',$id)->update(
            ['id_profesor' => $request->input('id_profesor')],
            ['rfc' => $request->input('rfc')],
            ['nombres' => $request->input('nombres')],
            ['ap_paterno' => $request->input('ap_paterno')],
            ['ap_materno' => $request->input('ap_materno')],
            ['estado' => $request->input('estado')],
            ['ciudad' => $request->input('ciudad')],
            ['calle' => $request->input('calle')],
            ['numero' => $request->input('numero')],
            ['colonia' => $request->input('colonia')],
            ['codigo_postal' => $request->input('codigo_postal')],
            ['correo' => $request->input('correo')],
            ['telefono' => $request->input('telefono')]
        );
        return $request->input('id_profesor');
        //return view('gestores/maestros/modificar-maestro');*/
    }

}
