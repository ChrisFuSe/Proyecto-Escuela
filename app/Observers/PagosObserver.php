<?php

namespace App\Observers;

use App\Models\Pago;
use App\Models\Bitacora;

class PagosObserver
{
    /**
     * Handle the Pago "created" event.
     *
     * @param  \App\Models\Pago  $pago
     * @return void
     */
    public function creating(Pago $pago)
    {
        $bitacora = new Bitacora();
        $bitacora -> usuario = auth()->user()->username;
        $bitacora -> movimiento = 'Pagos';
        $bitacora -> descripcion = 'Se ha hecho un pago hacia el alumno con numero de control: '.$pago->numero_control;
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
