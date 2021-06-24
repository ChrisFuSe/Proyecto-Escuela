<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Gestores;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Operaciones;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MailController;

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

//          Rutas para Home y Login             //
Route::get('/', HomeController::class)->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.autenticar');
Route::get('login', [LoginController::class, 'logout'])->name('login.salir');
Route::get('home', [HomeController::class, 'dirigirHome'])->middleware('auth')->name('home');


//          Rutas para enlazar Operaciones       //
Route::get('gestores/pagos/realizar_pago', [Operaciones::class, 'opTransaccion'])->middleware('auth')->name('realizar.pago');
Route::get('gestores/pagos/consultar', [Operaciones::class, 'opGestion_Pago'])->middleware('auth')->name('consultar.pago');
Route::get('gestores/pagos/precios', [Operaciones::class, 'opCambiarPrecio'])->middleware('auth')->name('consultar.precios');
Route::get('gestores/pagos/reportes/{operacion}', [Operaciones::class, 'opReportes'])->middleware('auth');
Route::get('gestores/alumnos/{operacion}', [Operaciones::class, 'opAlumno'])->middleware('auth');
Route::get('gestores/grupos/{operacion}', [Operaciones::class, 'opGrupo'])->middleware('auth');
Route::get('gestores/cal_as/calificaciones/{operacion}', [Operaciones::class, 'opCalificacion'])->middleware('auth');
Route::get('gestores/cal_as/asistencia/{operacion}', [Operaciones::class, 'opAsistencia'])->middleware('auth');
Route::get('gestores/usuarios/{operacion}', [Operaciones::class, 'opUsuarios'])->middleware('auth');
Route::get('gestores/maestros/consultar', [Operaciones::class, 'opConsultarMaestro'])->middleware('auth')->name('maestro.consultar');
Route::get('gestores/maestros/{operacion}', [Operaciones::class, 'opMaestro'])->middleware('auth');


//          Rutas para enlazar gestores         //
Route::get('gestores/{gestor}', [HomeController::class, 'cargarGestor'])->middleware('auth');
Route::get('gestores/pagos/{gestor}', [Gestores::class, 'gesPago'])->middleware('auth');
Route::get('gestores/cal_as/{gestor}', [Gestores::class, 'gesCal_As'])->middleware('auth');


//          Rutas para gestor Alumnos           //
Route::post('registrar/alumno', [AlumnoController::class, 'registrarAlumno'])->middleware('auth')->name('registrar.alumnos');
Route::post('consultar/alumno', [AlumnoController::class, 'consultarAlumno'])->middleware('auth')->name('consultar.alumno');
Route::get('elimnar/alumno/{id}', [AlumnoController::class, 'eliminarAlumno'])->middleware('auth')->name('eliminar.alumno');
Route::get('actualizar/alumno/{id}', [AlumnoController::class, 'actualizarAlumno'])->middleware('auth')->name('actualizar.alumno');
Route::get('llenar/alumno/{id}', [AlumnoController::class, 'llenarAlumno'])->middleware('auth')->name('llenar.alumno');


//          Rutas para gestor de Profesores     //
Route::post('registrar/profesor', [ProfesorController::class, 'registrarProfesor'])->middleware('auth')->name('registrar.profesor');
Route::post('consultar/profesor', [ProfesorController::class, 'consultarProfesor'])->middleware('auth')->name('consultar.profesor');
Route::get('elimnar/profesor/{id}', [ProfesorController::class, 'eliminarProfesor'])->middleware('auth')->name('eliminar.profesor');
Route::get('actualizar/profesor/{id}', [ProfesorController::class, 'actualizarProfesor'])->middleware('auth')->name('actualizar.profesor');
Route::get('llenar/profesor/{id}', [ProfesorController::class, 'llenarProfesor'])->middleware('auth')->name('llenar.profesor');


//          Rutas para gestor de Pagos          //
Route::post('registrar/primer_pago', [PagoController::class, 'registrarprimerPago'])->middleware('auth')->name('registrar.pago');
Route::post('registrar/pago', [PagoController::class, 'registrarpagoAdeudo'])->middleware('auth')->name('registrar.pago.adeudo');
Route::post('consultar/adeudos/alumno', [PagoController::class, 'consultaradeudosAlumno'])->middleware('auth')->name('consultar.adeudos.alumno');
Route::post('consultar/concepto', [PagoController::class, 'consultarConceptos'])->middleware('auth')->name('consultar.conceptos');
Route::get('consultar/pagos', [PagoController::class, 'consultarPagos'])->middleware('auth')->name('consultar.pagos');
Route::get('reporte/pagos', [PagoController::class, 'reportePagos'])->middleware('auth')->name('reporte.pagos');
Route::get('consultar/adeudos', [PagoController::class, 'consultarAdeudos'])->middleware('auth')->name('consultar.adeudos');
Route::get('reporte/pagos', [PagoController::class, 'pagosMensuales'])->middleware('auth')->name('reporte.pagos');
Route::get('reporte/adeudos', [PagoController::class, 'adeudosMensuales'])->middleware('auth')->name('reporte.adeudos');
Route::post('cambiar/precio', [PagoController::class, 'cambiarPrecios'])->middleware('auth')->name('cambiar.precios');


//          Rutas para gestor de Grupos         //
Route::post('registrar/grupo', [GrupoController::class, 'registrarGrupo'])->middleware('auth')->name('registrar.grupo');
Route::post('agregar_alumno/grupo', [GrupoController::class, 'agregar_alumnoGrupo'])->middleware('auth')->name('agregar_alumno.grupo');
Route::post('quitar_alumno/grupo', [GrupoController::class, 'quitar_alumnoGrupo'])->middleware('auth')->name('quitar_alumno.grupo');
Route::post('consultar/grupo', [GrupoController::class, 'consultarGrupo'])->middleware('auth')->name('consultar.grupo');
Route::get('eliminar/grupo/{id}', [GrupoController::class, 'eliminarGrupo'])->middleware('auth')->name('eliminar.grupo');
Route::get('actualizar/grupo/{id}', [GrupoController::class, 'actualizarGrupo'])->middleware('auth')->name('actualizar.grupo');
Route::get('llenar/grupo/{id}', [GrupoController::class, 'llenarGrupo'])->middleware('auth')->name('llenar.grupo');
Route::get('listar/grupo/{id}', [GrupoController::class, 'listarGrupo'])->middleware('auth')->name('listar.grupo');
Route::post('crear_horario/grupo', [GrupoController::class, 'crearHorario'])->middleware('auth')->name('crear_horario.grupo');
Route::get('eliminar_horario/grupo/{id}', [GrupoController::class, 'eliminarHorario'])->middleware('auth')->name('eliminar_horario.grupo');


//          Rutas para gestor de Usuarios       //
Route::post('registrar/usuario', [UsuarioController::class, 'registrarUsuario'])->middleware('auth')->name('registrar.usuarios');
Route::post('consultar/usuario', [UsuarioController::class, 'consultarUsuario'])->middleware('auth')->name('consultar.usuario');
Route::get('elimnar/usuario/{id}', [UsuarioController::class, 'eliminarUsuario'])->middleware('auth')->name('eliminar.usuario');
Route::get('actualizar/usuario/{id}', [UsuarioController::class, 'actualizarUsuario'])->middleware('auth')->name('actualizar.usuario');
Route::get('llenar/usuario/{id}', [UsuarioController::class, 'llenarUsuario'])->middleware('auth')->name('llenar.usuario');


//          Rutas para enviar correos           //
Route::get('enviar-correos', [MailController::class, 'EnviarEmail'])->middleware('auth','directora')->name('enviar.mail');