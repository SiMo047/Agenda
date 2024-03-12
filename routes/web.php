<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\EventoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\InscripcionController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Usuario sin loguearse 
Route::get('/', [EventoController::class, 'index_welcome'])->name('welcome');
Route::get('/agenda', [EventoController::class, 'agenda'])->name('agenda');
Route::get('/explora', [EventoController::class, 'explora'])->name('explora');
Route::get('/detalle-evento/{id}', [EventoController::class, 'detalle_evento'])->name('detalle_evento');
Route::get('/exp', [ExperienciaController::class, 'experiencias'])->name('exp');
Route::get('/agenda-filtro', [EventoController::class, 'filtro'])->name('filtroagenda');
Route::get('/exp-info/{id}', [ExperienciaController::class, 'detalle_exp'])->name('detalle_exp');


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('milogout');//cierra sesion


//Middleware de Admin
Route::middleware(['auth','verified','intranet:Administrador'])->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//categoria------------------------ 
    Route::get('/categorias', [CategoriaController::class , 'index'])->name('categorias');
    Route::get('/categoria/create', [CategoriaController::class , 'create'])->name('categoria.create');
    Route::post('/categoria/store', [CategoriaController::class , 'store'])->name('categoria.store');
    Route::get('/del-categoria/{id}', [CategoriaController::class , 'destroy'])->name('delcategoria');
//eventos----------------------
    Route::get('/eventos', [EventoController::class , 'index'])->name('eventos');
    Route::get('/evento/create', [EventoController::class , 'create'])->name('evento.create');
    Route::post('/evento/store', [EventoController::class , 'store'])->name('evento.store');
    Route::get('/del-evento/{id}', [EventoController::class , 'destroy'])->name('delevento');
    Route::get('/mod-evento/{id}', [EventoController::class , 'edit'])->name('modevento');
    Route::post('/update-evento/{id}', [EventoController::class , 'update'])->name('updateevento');

//experiencia-----------------
    Route::get('/experiencias', [ExperienciaController::class , 'index'])->name('experiencias');
    Route::get('/experiencia/create', [ExperienciaController::class , 'create'])->name('experiencia.create');
    Route::post('/experiencia/store', [ExperienciaController::class , 'store'])->name('experiencia.store');
    Route::get('/del-experiencia/{id}', [ExperienciaController::class , 'destroy'])->name('delexperiencia');
//empresa-------------------
    Route::get('/empresas', [EmpresaController::class , 'index'])->name('empresas');
    Route::get('/empresa/create', [EmpresaController::class , 'create'])->name('empresa.create');
    Route::post('/empresa/store', [EmpresaController::class , 'store'])->name('empresa.store');
    Route::get('/del-empresa/{id}', [EmpresaController::class , 'destroy'])->name('delempresa');
//usuarios --------------
    Route::get('/adminhome', [RegisteredUserController::class , 'index'])->name('usuarios');
    Route::get('/del-usuario/{id}', [RegisteredUserController::class , 'destroy'])->name('delusuario');
    Route::get('/mod-usuario/{id}', [RegisteredUserController::class , 'edit'])->name('modusuario');
    Route::post('/update-usuario/{id}', [RegisteredUserController::class , 'update'])->name('updateusuario');
});

//Middleware de Asistente
Route::middleware(['auth','verified','intranet:Asistente'])->group(function () {
    Route::get('/asistentehome', [EventoController::class, 'index_welcome'])->name('home');
    Route::post('/detalle-event', [InscripcionController::class, 'store'])->name('inscripcion');
    Route::get('/del-inscripcion/{id}', [InscripcionController::class, 'destroy'])->name('del-inscripcion');
   


});

//Middleware de CreadorEventos
Route::middleware(['auth','verified','intranet:CreadorEventos'])->group(function () {

    Route::get('/creadorhome', [EventoController::class , 'index'])->name('eventos');
    Route::get('/evento/create', [EventoController::class , 'create'])->name('evento.create');
    Route::post('/evento/store', [EventoController::class , 'store'])->name('evento.store');
    Route::get('/del-evento/{id}', [EventoController::class , 'destroy'])->name('delevento');
    Route::get('/mod-evento/{id}', [EventoController::class , 'edit'])->name('modevento');
    Route::post('/update-evento/{id}', [EventoController::class , 'update'])->name('updateevento');
    Route::get('/inscripciones', [InscripcionController::class , 'index'])->name('inscripciones');
    Route::get('/delinscripcion/{id}', [InscripcionController::class, 'destroy'])->name('delins');


});
require __DIR__.'/auth.php';
