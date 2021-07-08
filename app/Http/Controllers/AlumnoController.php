<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Alumno;
use App\Models\Adeudo;
use Exception;

class AlumnoController extends Controller
{
    public function registrarAlumno(Request $request){
        $alumno = new Alumno();
        $alumno->numero_control = "PE-".$request->curp;
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

    public function eliminarAlumno($id){
        $alumno = Alumno::where('numero_control',$id)->first();
        $adeudos = Adeudo::where('numero_control',$id)->get();
        if(!$adeudos){
            foreach($adeudos as $a){
                if($a->monto_adeudo>0){
                    return redirect()->back()->with('error', 'No se pueden eliminar alumnos con adeudos'); 
                }
            }
        }
        else{
            $alumno->delete();
            return redirect()->back()->with('success', 'Se ha eliminado correctamente');   
        } 
    }

    public function llenarAlumno($id){
        $alumno = Alumno::where('numero_control',$id)->first();
        return view('gestores\alumnos\modificar-alumnos', compact('alumno'));
    }

    public function actualizarAlumno(Request $request, $id){
        $alumno = Alumno::findOrFail($id);
        
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
        $alumno->descuento = $request->descuento;
        $alumno->fecha_nac = $request->fecha_nac;
        $alumno->id_grupo = $request->id_grupo;
        $alumno->fnombres = $request->fnombres;
        $alumno->fdomicilio = $request->fdomicilio;
        $alumno->frfc = $request->frfc;
        $alumno->fcorreo = $request->fcorreo;
        $alumno->ftelefono = $request->ftelefono;
        $alumno->factura = $request->factura;

        try{
            $alumno->save();
            return redirect('gestores\alumnos\consultarE');
        }catch(Exception $e){
            return "Error no se han podido actualizar los datos del alumno en la base de datos";
        }
    }
}
