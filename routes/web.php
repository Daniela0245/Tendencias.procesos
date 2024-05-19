<?php

use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/estudiantes',[EstudianteController::class, 'index'])->name('estudiantes.index');
Route::post('/estudiantes',[EstudianteController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/create',[EstudianteController::class, 'create'])->name('estudiantes.create');
Route::delete('/estudiantes/{estudiante}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');
Route::put('/estudiantes/{estudiante}', [EstudianteController::class, 'update'])->name('estudiantes.update');
Route::get('/estudiantes/{estudiante}/edit',[EstudianteController::class, 'edit'])->name('estudiantes.edit');

Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores.index');
Route::post('/profesores',[ProfesorController::class, 'store'])->name('profesores.store');
Route::get('/profesores/create',[ProfesorController::class, 'create'])->name('profesores.create');
Route::delete('/profesores/{profesor}',[ProfesorController::class, 'destroy'])->name('profesores.destroy');
Route::put('/profesores/{profesor}',[ProfesorController::class, 'update'])->name('profesores.update');
Route::get('/profesores/{profesor}/edit',[ProfesorController::class, 'edit'])->name('profesores.edit');

Route::get('/cursos',[CursoController::class, 'index'])->name('cursos.index');
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::get('/inscripciones', [InscripcionController::class, 'index'])->name('inscripciones.index');
Route::post('/inscripciones', [InscripcionController::class, 'store'])->name('inscripciones.store');
Route::get('/inscripciones/create', [InscripcionController::class, 'create'])->name('inscripciones.create');
Route::delete('/inscripciones/{inscripcion}', [InscripcionController::class, 'destroy'])->name('inscripciones.destroy');
Route::put('/inscripciones/{inscripcion}', [InscripcionController::class, 'update'])->name('inscripciones.update');
Route::get('/inscripciones/{inscripcion}/edit', [InscripcionController::class, 'edit'])->name('inscripciones.edit');

Route::get('/pagos', [PagoController::class, 'index'])->name('pagos.index');
Route::post('/pagos', [PagoController::class, 'store'])->name('pagos.store');
Route::get('/pagos/create', [PagoController::class, 'create'])->name('pagos.create');
Route::delete('/pagos/{pago}', [PagoController::class, 'destroy'])->name('pagos.destroy');
Route::put('/pagos/{pago}', [PagoController::class, 'update'])->name('pagos.update');
Route::get('/pagos/{pago}/edit', [PagoController::class, 'edit'])->name('pagos.edit');

Route::get('/trabajos', [TrabajoController::class, 'index'])->name('trabajos.index');
Route::post('/trabajos', [TrabajoController::class, 'store'])->name('trabajos.store');
Route::get('/trabajos/create', [TrabajoController::class, 'create'])->name('trabajos.create');
Route::delete('/trabajos/{trabajo}', [TrabajoController::class, 'destroy'])->name('trabajos.destroy');
Route::put('/trabajos/{trabajo}', [TrabajoController::class, 'update'])->name('trabajos.update');
Route::put('/trabajos/{trabajo}', [TrabajoController::class, 'update'])->name('trabajos.update');
Route::get('/trabajos/{trabajo}/edit', [TrabajoController::class, 'edit'])->name('trabajos.edit');

Route::get('/entregas', [EntregaController::class, 'index'])->name('entregas.index');
Route::post('/entregas', [EntregaController::class, 'store'])->name('entregas.store');
Route::get('/entregas/create', [EntregaController::class, 'create'])->name('entregas.create');
Route::delete('/entregas/{entrega}', [EntregaController::class, 'destroy'])->name('entregas.destroy');
Route::put('/entregas/{entrega}', [EntregaController::class, 'update'])->name('entregas.update');
Route::get('/entregas/{entrega}/edit', [EntregaController::class, 'edit'])->name('entregas.edit');

Route::get('/calificaciones', [CalificacionController::class, 'index'])->name('calificaciones.index');
Route::post('/calificaciones', [CalificacionController::class, 'store'])->name('calificaciones.store');
Route::get('/calificaciones/create', [CalificacionController::class, 'create'])->name('calificaciones.create');
Route::delete('/calificaciones/{calificacion}', [CalificacionController::class, 'destroy'])->name('calificaciones.destroy');
Route::put('/calificaciones/{calificacion}', [CalificacionController::class, 'update'])->name('calificaciones.update');
Route::get('/calificaciones/{calificacion}/edit', [CalificacionController::class, 'edit'])->name('calificaciones.edit');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
