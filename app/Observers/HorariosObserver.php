<?php

namespace App\Observers;

use App\Models\Horario;
use App\Models\Bitacora;

class HorariosObserver
{
    /**
     * Handle the Horario "created" event.
     *
     * @param  \App\Models\Horario  $horario
     * @return void
     */
    public function created(Horario $horario)
    {
        //
    }

    /**
     * Handle the Horario "updated" event.
     *
     * @param  \App\Models\Horario  $horario
     * @return void
     */
    public function updated(Horario $horario)
    {
        //
    }

    /**
     * Handle the Horario "deleted" event.
     *
     * @param  \App\Models\Horario  $horario
     * @return void
     */
    public function deleted(Horario $horario)
    {
        //
    }
}
