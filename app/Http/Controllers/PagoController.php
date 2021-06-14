<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\Adeudo;

class PagoController extends Controller
{
    public function registrarprimerPago(Request $request){
        $adeudo = new Adeudo();
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
        return view('gestores\pagos\realizar-pagos');
    }

    public function consultarAdeudos(Request $request){
        $adeudo = Adeudo::select("id_adeudo",'concepto','fecha_adeudo','monto_adeudo')
                        ->where('numero_control', $request->numero_control)
                        ->where('pagado', 'n')->get();
        return response(json_encode($adeudo),200)->header('Content-type', 'text/plain');
    }

    public function consultarPagos(Request $request){
        $pagos = Pago::find($request->numero_control);
        return view('gestores/pagos/consultar-pagos', compact('pagos'));
    }

    public function consultarDatos(Request $request){
        $datos = Pago::find($request->num_referencia);
        return view('gestores/pagos/consultar-pagos', compact('datos'));
    }
}
