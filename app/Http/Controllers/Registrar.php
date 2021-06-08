<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registrar extends Controller
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
        return redirect('gestores\maestros\alta');
    }

    public function registrarUsuario(Request $request){
        $usuario = new User();

        $usuario->username = $request->username;
        $usuario->password = Hash::make($request->password);
        $usuario->email = $request->email;
        $usuario->nombres = $request->nombres;
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->tipo = $request->tipo;

        $usuario->save();

        return redirect('gestores\usuarios\alta');
    }
}