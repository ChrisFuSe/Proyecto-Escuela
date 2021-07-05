<?php

namespace App\Observers;

use App\Models\Alumno;
use App\Models\Bitacora;

class AlumnosObserver
{
    public $bitacora;

    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
        $this -> bitacora = new Bitacora();
        $this -> bitacora -> usuario = auth()->user()->username;
        $this -> bitacora -> movimiento = "Alumnos";
        $this -> bitacora -> fechayhora = date("Y-m-d H:i:s");
    }

    /**
     * Handle the Alumno "created" event.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return void
     */
    public function created(Alumno $alumno)
    {
        $this -> bitacora -> descripcion = 'Se registro al alumno '.$alumno->nombres.
                                            ' '.$alumno->ap_paterno.' '.$alumno->ap_materno.
                                            ' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the Alumno "updated" event.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return void
     */
    public function updated(Alumno $alumno)
    {
        $this -> bitacora -> descripcion = 'Se actualizaron los datos del alumno '.$alumno->nombres.
                                            ' '.$alumno->ap_paterno.' '.$alumno->ap_materno.
                                            ' en el sistema.';
        if($alumno->estado_actual == 'Baja'){
            $this -> bitacora -> descripcion = 'Se dio de baja al alumno '.$alumno->nombres.
                                            ' '.$alumno->ap_paterno.' '.$alumno->ap_materno.
                                            ' del sistema.';
        }else if($alumno->estado_actual == 'Alta'){
            $this -> bitacora -> descripcion = 'Se dio de alta al alumno '.$alumno->nombres.
                                            ' '.$alumno->ap_paterno.' '.$alumno->ap_materno.
                                            ' al sistema.';
        }
        $this -> bitacora -> save();
    }

    public function deleted(Alumno $alumno)
    {
        $this -> bitacora -> descripcion = 'Se elimino al alumno '.$alumno->nombres.
                                            ' '.$alumno->ap_paterno.' '.$alumno->ap_materno.
                                            ' del sistema.';
        $this -> bitacora -> save();
    }
}
