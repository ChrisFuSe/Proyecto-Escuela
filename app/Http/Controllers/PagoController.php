<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Pago;
use App\Models\Adeudo;
use App\Models\Concepto;
use App\Models\Alumno;

class PagoController extends Controller
{
    public function registrarprimerPago(Request $request){
        $alum = Alumno::where('numero_control',$request -> numero_control)->first();
        if(empty($alum)){
            return redirect()->back()->with('error', 'No hay alumnos con ese numero de control');              
        }else{        
            if($alum->estado_actual == "Baja"){
                return redirect()->back()->with('error2', 'El alumno esta dado de baja');      
            }else{
                $adeudo = new Adeudo();
            $alumno = Alumno::all();
            $adeudo -> concepto = $request->concepto;
            $adeudo -> fecha_adeudo = $request->fecha;
            $adeudo -> numero_control = $request->numero_control;
            $adeudo -> save();
            $adeudo = Adeudo::select('id_adeudo')
                            ->where('numero_control', $request->numero_control)
                            ->where('concepto', $request->concepto)
                            ->where('fecha_adeudo', $request->fecha)->first();
            $pago = new Pago();
            $pago -> monto = $request -> monto;
            $pago -> fecha_pago = $request -> fecha;
            $pago -> descripcion = $request -> descripcion;
            $pago -> id_adeudo = $adeudo -> id_adeudo;
            $pago -> numero_control = $request -> numero_control;
            $pago -> save();
            return redirect()->back()->with('success','Se ha registrado correctamente');  
            } 
        }
    }

    public function registrarpagoAdeudo(Request $request){
        $pago = new Pago();
        $pago -> monto = $request -> pago_adeudo_monto;
        $pago -> fecha_pago = $request -> pago_adeudo_fecha;
        $pago -> descripcion = $request -> pago_adeudo_descripcion;
        $pago -> id_adeudo = $request -> adeudos;
        $pago -> numero_control = $request -> pago_adeudo_numero_control;
        $pago -> save();
        return redirect(route('realizar.pago'));
    }

    public function consultarConceptos(Request $request){
        $concepto = Concepto::select('monto')
                            ->where('id_concepto', $request->concepto)
                            ->first();
        return $concepto;
    }

    public function consultaradeudosAlumno(Request $request){
        $adeudo = Adeudo::select("id_adeudo", 'monto_adeudo', 'concepto', 'fecha_adeudo')
                        ->where('numero_control', $request->numero_control)
                        ->where('pagado', 'n')->get();
        return response(json_encode($adeudo),200)->header('Content-type', 'text/plain');
    }

    public function consultarPagos(){
        $pago = Pago::select('num_referencia', 'monto', 'fecha_pago', 'descripcion', 
                            'concepto', 'pagos.numero_control', DB::raw("CONCAT(nombres,ap_paterno,ap_materno) AS nombre"))
                    ->join('alumnos', 'pagos.numero_control', '=', 'alumnos.numero_control')
                    ->join('adeudos', 'pagos.id_adeudo', '=', 'adeudos.id_adeudo')
                    ->get();
        return datatables()->of($pago)->toJson();
    }

    public function consultarAdeudos(){
        $adeudo = Adeudo::select('id_adeudo', 'monto_adeudo', 'concepto', 'pagado', 
                                'fecha_adeudo', 'adeudos.numero_control', DB::raw("CONCAT(nombres,ap_paterno,ap_materno) AS nombre"))
                        ->join('alumnos', 'adeudos.numero_control', '=', 'alumnos.numero_control')
                        ->get();
        return datatables()->of($adeudo)->toJson();
    }

    public function pagosMensuales(Request $request){
        $pago = Pago::select('num_referencia', 'monto', 'fecha_pago', 'descripcion', 
                            'concepto', 'pagos.numero_control', DB::raw("CONCAT(nombres,ap_paterno,ap_materno) AS nombre"))
                    ->join('alumnos', 'pagos.numero_control', '=', 'alumnos.numero_control')
                    ->join('adeudos', 'pagos.id_adeudo', '=', 'adeudos.id_adeudo')
                    ->whereMonth('fecha_pago', '=', $request->mes)
                    ->whereYear('fecha_pago', '=', $request->anio)
                    ->get();
        return datatables()->of($pago)->toJson();
    }

    public function adeudosMensuales(){
        $adeudo = Adeudo::select('id_adeudo', 'monto_adeudo', 'concepto', 
                                'fecha_adeudo', 'adeudos.numero_control', DB::raw("CONCAT(nombres,ap_paterno,ap_materno) AS nombre"))
                        ->join('alumnos', 'adeudos.numero_control', '=', 'alumnos.numero_control')
                        ->where('pagado', 'n')
                        ->whereRaw('TIMESTAMPDIFF(MONTH, fecha_adeudo, "2021-06-23") >= 1', [date('Y-m-d')])
                        ->get();
        return datatables()->of($adeudo)->toJson();
    }

    public function cambiarPrecios(Request $request){
        $concepto = Concepto::select('id_concepto','monto')
                            ->where('id_concepto', $request->concepto)
                            ->first();
        $concepto->monto = $request->precio;
        $concepto->save();
        return redirect(route('consultar.precios'));
    }
}
