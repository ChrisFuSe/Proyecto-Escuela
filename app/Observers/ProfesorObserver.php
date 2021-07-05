<?php

namespace App\Observers;

use App\Models\Profesor;
use App\Models\Bitacora;

class ProfesorObserver
{
    public $bitacora;

    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
        $this -> bitacora = new Bitacora();
        $this -> bitacora -> usuario = auth()->user()->username;
        $this -> bitacora -> movimiento = "Profesores";
        $this -> bitacora -> fechayhora = date("Y-m-d H:i:s");
    }

    /**
     * Handle the Profesor "created" event.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return void
     */
    public function created(Profesor $profesor)
    {
        $this -> bitacora -> descripcion = 'Se registro al profesor '.$profesor->nombres.
                                            ' '.$profesor->ap_paterno.' '.$profesor->ap_materno.
                                            ' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the Profesor "updated" event.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return void
     */
    public function updated(Profesor $profesor)
    {
        $this -> bitacora -> descripcion = 'Se actualizaron los datos del profesor '.$profesor->nombres.
                                            ' '.$profesor->ap_paterno.' '.$profesor->ap_materno.
                                            ' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the Profesor "deleted" event.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return void
     */
    public function deleted(Profesor $profesor)
    {
        $this -> bitacora -> descripcion = 'Se elimino al profesor '.$profesor->nombres.
                                            ' '.$profesor->ap_paterno.' '.$profesor->ap_materno.
                                            ' del sistema.';
        $this -> bitacora -> save();
    }
}
