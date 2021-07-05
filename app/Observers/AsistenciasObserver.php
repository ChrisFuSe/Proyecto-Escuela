<?php

namespace App\Observers;

use App\Models\Asistencia;
use App\Models\Bitacora;

class AsistenciasObserver
{
    /**
     * Handle the Asistencia "created" event.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return void
     */
    public function created(Asistencia $asistencia)
    {
        //
    }

    /**
     * Handle the Asistencia "updated" event.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return void
     */
    public function updated(Asistencia $asistencia)
    {
        //
    }

    /**
     * Handle the Asistencia "deleted" event.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return void
     */
    public function deleted(Asistencia $asistencia)
    {
        //
    }
}
