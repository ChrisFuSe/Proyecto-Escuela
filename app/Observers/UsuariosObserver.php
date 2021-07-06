<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Bitacora;

class UsuariosObserver
{
    public $bitacora;

    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
        $this -> bitacora = new Bitacora();
        $this -> bitacora -> usuario = auth()->user()->username;
        $this -> bitacora -> movimiento = "Usuarios";
        $this -> bitacora -> fechayhora = date("Y-m-d H:i:s");
    }

    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $this -> bitacora -> descripcion = 'Se registro al usuario '.$user->username.' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        $this -> bitacora -> descripcion = 'Se actualizaron los datos del usuario '.$user->username.' en el sistema.';
        $this -> bitacora -> save();
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        $this -> bitacora -> descripcion = 'Se elimino al usuario '.$user->username.' del sistema.';
        $this -> bitacora -> save();
    }
}
