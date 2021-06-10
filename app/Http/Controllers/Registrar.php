<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Grupo;
use App\Models\User;
use App\Models\Alumno;
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
        return view('gestores\maestros\registrar-maestro');
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

        return view('gestores\usuarios\registrar-usuario');
    }

    public function registrarGrupo(Request $request){
        $grupo = new Grupo();

        $grupo->nombre = $request->nombre;
        $grupo->id_nivel = $request->id_nivel;
        $grupo->descripcion = $request->descripcion;

        $grupo->save();
        return view('gestores\grupos\registrar-grupo');
    }

    public function registrarAlumno(Request $request){
        $alumno = new Alumno();

        $alumno->numero_control = "PE-".$request->curp;
        $alumno->deuda_total = $request->deuda_total;
        $alumno->curp = $request->curp;
        $alumno->nombres = $request->nombres;
        $alumno->ap_paterno = $request->ap_paterno;
        $alumno->ap_materno = $request->ap_materno;
        $alumno->estado = $request->estado;
        $alumno->ciudad = $request->ciudad;
        $alumno->calle = $request->calle;
        $alumno->numero = $request->numero;
        $alumno->colonia = $request->colonia;
        $alumno->codigo_postal = $request->codigo_postal;
        $alumno->telefono = $request->telefono;
        $alumno->correo = $request->correo;
        $alumno->estado_actual = $request->estado_actual;
        $alumno->oyente_clase = $request->oyente_clase;
        $alumno->descuento = $request->descuento;
        $alumno->fecha_nac = $request->fecha_nac;
        $alumno->id_grupo = $request->id_grupo;
        $alumno->fnombres = $request->fnombres;
        $alumno->fdomicilio = $request->fdomicilio;
        $alumno->frfc = $request->frfc;
        $alumno->fcorreo = $request->fcorreo;
        $alumno->ftelefono = $request->ftelefono;
        $alumno->factura = $request->factura;

        $alumno->save();
        return redirect('gestores\alumnos\alta');
    }

}
