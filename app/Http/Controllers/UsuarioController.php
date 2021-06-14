<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuarioController extends Controller
{
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

        return view('gestores\usuarios\registrar-usuario');
    }

    public function consultarUsuario(Request $request){
        $usuario = User::find($request->id);
        return view('gestores/usuarios/consultarE-usuario', compact('usuario'));
    }

    public function eliminarUsuario($id){
        $usuario = User::where('id',$id)->first();
        $usuario->delete();
        return view('gestores\usuarios\consultarE-usuario');
    }
}
