<?php

namespace App\Observers;

use App\Models\Horario;
use App\Models\Bitacora;

class HorariosObserver
{
    public $bitacora;

    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
        $this -> bitacora = new Bitacora();
        $this -> bitacora -> usuario = auth()->user()->username;
        $this -> bitacora -> movimiento = "Grupos";
        $this -> bitacora -> fechayhora = date("Y-m-d H:i:s");
    }

    /**
     * Handle the Horario "created" event.
     *
     * @param  \App\Models\Horario  $horario
     * @return void
     */
    public function created(Horario $horario)
    {
        $this -> bitacora -> descripcion = 'Se registro el horario '.$horario->horarios.' '.$horario->dia.' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the Horario "updated" event.
     *
     * @param  \App\Models\Horario  $horario
     * @return void
     */
    public function updated(Horario $horario)
    {
        $this -> bitacora -> descripcion = 'Se actualizo el horario '.$horario->horarios.' '.$horario->dia.' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the Horario "deleted" event.
     *
     * @param  \App\Models\Horario  $horario
     * @return void
     */
    public function deleted(Horario $horario)
    {
        $this -> bitacora -> descripcion = 'Se elimino el horario '.$horario->horarios.' '.$horario->dia.' de el sistema.';
        $this -> bitacora -> save();
    }
}
