<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
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

    public function consultarAlumno(Request $request){
        $alumnos = Alumno::all();
        return view('gestores/alumnos/editar-alumnos', compact('alumnos'));
    }

    public function eliminarAlumno($id){
        $alumno = Alumno::where('id_alumno',$id)->first();
        $alumno->delete();
        return redirect('gestores\alumno\consultar-eliminar-alumnos');
    }
}
