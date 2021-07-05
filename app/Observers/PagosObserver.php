<?php

namespace App\Observers;

use App\Models\Pago;
use App\Models\Bitacora;
use Illuminate\Support\Facades\DB;

class PagosObserver
{
    /**
     * Handle the Pago "created" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function created(Pago $pago)
    {
        date_default_timezone_set('America/Mexico_City');
        $alumno = Pago::select('concepto', DB::raw("CONCAT(nombres,ap_paterno,ap_materno) AS nombre"))
                      ->join('alumnos', 'pagos.numero_control', '=', 'alumnos.numero_control')
                      ->join('adeudos', 'pagos.id_adeudo', '=', 'adeudos.id_adeudo')
                      ->where('num_referencia', $pago->num_referencia)
                      ->first();
        $bitacora = new Bitacora();
        $bitacora -> usuario = auth()->user()->username;
        $bitacora -> movimiento = 'Pagos';
        $bitacora -> descripcion = 'Se ha hecho un pago de $'.$pago->monto.' para el adeudo de '.$alumno->concepto.' del alumno '.$alumno->nombre.' con numero de control '.$pago->numero_control;
        $bitacora -> fechayhora = date("Y-m-d H:i:s");
        $bitacora->save();
    }

    /**
     * Handle the Pago "deleted" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function deleted(Pago $pago)
    {
        //
    }
}
