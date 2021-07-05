<?php

namespace App\Observers;

use App\Models\Calificacion;
use App\Models\Bitacora;

class CalificacionesObserver
{
    /**
     * Handle the Calificacion "created" event.
     *
     * @param  \App\Models\Calificacion  $calificacion
     * @return void
     */
    public function created(Calificacion $calificacion)
    {
        //
    }

    /**
     * Handle the Calificacion "updated" event.
     *
     * @param  \App\Models\Calificacion  $calificacion
     * @return void
     */
    public function updated(Calificacion $calificacion)
    {
        //
    }

    /**
     * Handle the Calificacion "deleted" event.
     *
     * @param  \App\Models\Calificacion  $calificacion
     * @return void
     */
    public function deleted(Calificacion $calificacion)
    {
        //
    }
}
