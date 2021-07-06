<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        return redirect('gestores\usuarios\alta');
    }

    public function eliminarUsuario($id){
        $usuarios = User::where('id',$id)->first();
        $usuarios->delete();
        return redirect('gestores\usuarios\consultar-eliminar');
    }

    public function llenarUsuario($id){
        $usuarios = User::where('id',$id)->first();
        return view('gestores\usuarios\editar-usuario', compact('usuarios'));
    }

    public function actualizarUsuario(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->username = $request->username;
        $usuario->password = Hash::make($request->password);
        $usuario->email = $request->email;
        $usuario->nombres = $request->nombres;
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->tipo = $request->tipo;

        $usuario->save();
        return redirect('gestores\usuarios\consultar-eliminar');
    }

    public function consultarBitacora(){
        $bitacora = Bitacora::all();
        return datatables()->of($bitacora)->toJson();
    }
}
