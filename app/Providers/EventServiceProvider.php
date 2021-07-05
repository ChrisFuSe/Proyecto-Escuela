<?php

namespace App\Providers;

use App\Models\Alumno;
use App\Models\Asistencia;
use App\Models\Calificacion;
use App\Models\Grupo;
use App\Models\Horario;
use App\Models\Pago;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Observers\AlumnosObserver;
use App\Observers\AsistenciasObserver;
use App\Observers\CalificacionesObserver;
use App\Observers\GruposObserver;
use App\Observers\HorariosObserver;
use App\Observers\PagosObserver;
use App\Observers\ProfesorObserver;
use App\Observers\UsuariosObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Alumno::observe(AlumnosObserver::class);
        Asistencia::observe(AsistenciasObserver::class);
        Calificacion::observe(CalificacionesObserver::class);
        Grupo::observe(GruposObserver::class);
        Horario::observe(HorariosObserver::class);
        Pago::observe(PagosObserver::class);
        Profesor::observe(ProfesorObserver::class);
        User::observe(UsuariosObserver::class);
    }
}
