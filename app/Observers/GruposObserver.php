<?php

namespace App\Observers;

use App\Models\Grupo;
use App\Models\Bitacora;

class GruposObserver
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
     * Handle the Grupo "created" event.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return void
     */
    public function created(Grupo $grupo)
    {
        $this -> bitacora -> descripcion = 'Se registro el grupo '.$grupo->nombre.' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the Grupo "updated" event.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return void
     */
    public function updated(Grupo $grupo)
    {
        $this -> bitacora -> descripcion = 'Se actualizo el grupo '.$grupo->nombre.' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the Grupo "deleted" event.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return void
     */
    public function deleted(Grupo $grupo)
    {
        $this -> bitacora -> descripcion = 'Se elimino el grupo '.$grupo->nombre.' de el sistema.';
        $this -> bitacora -> save();
    }
}
