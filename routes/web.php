<?php

use App\Http\Controllers\Gestores;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Operaciones;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('login');

Route::post('login', [LoginController::class, 'authenticate'])->name('login.autenticar');

Route::get('login', [LoginController::class, 'logout'])->name('login.salir');

Route::get('home', [HomeController::class, 'dirigirHome'])->middleware('auth')->name('home');

Route::get('gestores/{gestor}', [HomeController::class, 'cargarGestor'])->middleware('auth');

Route::get('gestores/maestros/{operacion}', [Operaciones::class, 'opMaestro']);

Route::get('gestores/pagos/{gestor}', [Gestores::class, 'gesPago']);

Route::get('gestores/pagos/transaccion/{operacion}', [Operaciones::class, 'opTransaccion']);

Route::get('gestores/pagos/gestion-pagos/{operacion}', [Operaciones::class, 'opGestion_Pago']);

Route::get('gestores/pagos/reportes/{operacion}', [Operaciones::class, 'opReportes']);

Route::get('gestores/alumnos/{operacion}', [Operaciones::class, 'opAlumno']);

Route::get('gestores/grupos/{operacion}', [Operaciones::class, 'opGrupo']);

Route::get('gestores/cal_as/{gestor}', [Gestores::class, 'gesCal_As']);

Route::get('gestores/cal_as/calificaciones/{operacion}', [Operaciones::class, 'opCalificacion']);

Route::get('gestores/cal_as/asistencia/{operacion}', [Operaciones::class, 'opAsistencia']);

Route::get('gestores/usuarios/{operacion}', [Operaciones::class, 'opUsuarios']);
