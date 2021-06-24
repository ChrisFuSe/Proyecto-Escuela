<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AtrasosMailable;
use App\Models\Adeudo;

class MailController extends Controller
{
    public function EnviarEmail(){
        $adeudos = Adeudo::select('monto_adeudo', 'concepto', 
                                'fecha_adeudo', 'correo', 'estado_actual')
                        ->join('alumnos', 'adeudos.numero_control', '=', 'alumnos.numero_control')
                        ->where('pagado', 'n')
                        ->where('estado_actual', 'Alta')
                        ->whereRaw('TIMESTAMPDIFF(MONTH, fecha_adeudo, "2021-06-23") >= 1', [date('Y-m-d')])
                        ->get();
        foreach ($adeudos as $adeudo) {
            $detalles = [
                'concepto' => $adeudo->concepto,
                'monto' => $adeudo->monto_adeudo,
                'fecha' => $adeudo->fecha_adeudo
            ];
            Mail::to($adeudo->correo)->send(new AtrasosMailable($detalles));
        }
        return redirect('/gestores/pagos/reportes/reporte-atrasos');
    }
}
