<?php

use App\Http\Controllers\Gestores;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Operaciones;
use App\Http\Controllers\Registrar;
use App\Http\Controllers\Consultar;
use App\Http\Controllers\Eliminar;
use App\Http\Controllers\Modificar;
use App\Http\Livewire\CargarInformacion;

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

Route::get('gestores/maestros/consultar', [Operaciones::class, 'opConsultarMaestro'])->middleware('auth')->name('maestro.consultar');

Route::get('gestores/maestros/{operacion}', [Operaciones::class, 'opMaestro'])->middleware('auth');

Route::get('gestores/pagos/consultar', [Operaciones::class, 'opGestion_Pago'])->middleware('auth');

Route::get('gestores/pagos/realizar_pago', [Operaciones::class, 'opTransaccion'])->middleware('auth');

Route::get('gestores/pagos/{gestor}', [Gestores::class, 'gesPago'])->middleware('auth');

Route::get('gestores/pagos/reportes/{operacion}', [Operaciones::class, 'opReportes'])->middleware('auth');

Route::get('gestores/alumnos/{operacion}', [Operaciones::class, 'opAlumno'])->middleware('auth');

Route::get('gestores/grupos/{operacion}', [Operaciones::class, 'opGrupo'])->middleware('auth');

Route::get('gestores/cal_as/{gestor}', [Gestores::class, 'gesCal_As'])->middleware('auth');

Route::get('gestores/cal_as/calificaciones/{operacion}', [Operaciones::class, 'opCalificacion'])->middleware('auth');

Route::get('gestores/cal_as/asistencia/{operacion}', [Operaciones::class, 'opAsistencia'])->middleware('auth');

Route::get('gestores/usuarios/{operacion}', [Operaciones::class, 'opUsuarios'])->middleware('auth');

Route::post('registrar/profesor', [Registrar::class, 'registrarProfesor'])->middleware('auth')->name('registrar.profesor');

Route::post('registrar/usuario', [Registrar::class, 'registrarUsuario'])->middleware('auth')->name('registrar.usuarios');

Route::post('consultar/usuario', [Consultar::class, 'consultarUsuario'])->middleware('auth')->name('consultar.usuario');

Route::get('elimnar/usuario/{id}', [Eliminar::class, 'eliminarUsuario'])->middleware('auth')->name('eliminar.usuario');

Route::post('registrar/grupo', [Registrar::class, 'registrarGrupo'])->middleware('auth')->name('registrar.grupo');

Route::post('registrar/alumno', [Registrar::class, 'registrarAlumno'])->middleware('auth')->name('registrar.alumnos');

Route::post('consultar/alumno', [Consultar::class, 'consultarAlumno'])->middleware('auth')->name('consultar.alumno');

Route::get('elimnar/alumno/{id}', [Eliminar::class, 'eliminarAlumno'])->middleware('auth')->name('eliminar.alumno');

Route::post('consultar/profesor', [Consultar::class, 'consultarProfesor'])->middleware('auth')->name('consultar.profesor');

Route::get('elimnar/profesor/{id}', [Eliminar::class, 'eliminarProfesor'])->middleware('auth')->name('eliminar.profesor');

Route::post('editar/profesor', [Modificar::class, 'editarProfesor'])->middleware('auth')->name('editar.profesor');

Route::get('llenar/profesor', [Modificar::class, 'llenarProfesor'])->middleware('auth')->name('llenar.profesor');

Route::post('registrar/pago', [Registrar::class, 'registrarPago'])->middleware('auth')->name('registrar.pago');

Route::post('precio/concepto', [Consultar::class, 'conceptoPrecio'])->middleware('auth');

Route::post('consultar/pagos', [Consultar::class, 'consultarPagos'])->middleware('auth')->name('consultar.pagos');

Route::get('consultar/datos/{id}', [Consultar::class, 'consultarDatos'])->middleware('auth')->name('consultar.datos');

Route::get('prueba', function () {
    return view('gestores\grupos\cargar-informacion2');
});
Route::get('llenar/profesor', [Modificar::class, 'llenarProfesor'])->middleware('auth')->name('llenar.profesor');
