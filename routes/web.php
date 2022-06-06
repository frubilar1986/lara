<?php

use App\Http\Controllers\AlumnController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use Database\Factories\AlumnoFactory;

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


Route::get('/', function () {
     return view('welcome');

     //     // echo '<a href="contacto">Contactos1</a> <br>';
     //     // echo '<a href="contacto">Contactos2</a> <br>';
     //     // echo '<a href="contacto">Contactos3</a> <br>';
     //     // echo '<a href="contacto">Contactos4</a> <br>';
     //     // echo '<a href="contacto">Contactos5</a> <br>';

     // echo '<a href="' . route('alumnos') . '">Listar alumnos</a> <br>';
     // echo '<a href="' . route('contacto') . '">Contacto 2</a> <br>';
     // echo '<a href="' . route('contacto') . '">Contacto 3</a> <br>';
     // echo '<a href="' . route('contacto') . '">Contacto 4</a> <br>';
     // echo '<a href="' . route('contacto') . '">Contacto 5</a> <br>';
});

Route::get('help', function () {
     return "contacto...dddddddd";
})->name('contacto');/* fx que ayuda a no cambiar nombre de enlace */

//--------------------------------
//Tutorial norvic intermedio 
//--------------------------------
Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores.index');
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('/profesores/crear', [ProfesorController::class, 'create'])->name('profesores.create');
Route::post('/profesores',  [ProfesorController::class, 'store'])->name('profesores.store');

Route::get('/alumnos/crear', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos',  [AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('/cursos/crear', [CursoController::class, 'create'])->name('cursos.create');
Route::post('/cursos',  [CursoController::class, 'store'])->name('cursos.store');

Route::get('/profesores/{id}/editar', [ProfesorController::class, 'edit'])->name('profesores.edit');
Route::put('/profesores/{id}', [ProfesorController::class, 'update'])->name('profesores.update');

Route::get('/alumnos/{id}/editar', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{id}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::get('/cursos/{id}/editar', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('cursos.update');


Route::get('/profesores/{id}/ver', [ProfesorController::class, 'show'])->name('profesores.show');
Route::get('/alumnos/{id}/ver', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('/cursos/{id}/ver', [CursoController::class, 'show'])->name('cursos.show');


Route::delete('/profesores/{id}', [ProfesorController::class, 'destroy'])->name('profesores.destroy');

Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');


//--------------------------------
//Pasar variables a la vista
//--------------------------------
// Route::get('inicio', function () {
//      $nombre = 'Francisco';
//     return view('inicio')->with('nombre',$nombre);
// });

// /* Enviar variables por url o vacio ?  */

// Route::get('saludo/{nombre?}',function($nombre='seniol'){
//     return 'hola '.$nombre;
// });

//Rutas de tutorial norvic
//---------------------------------------
// Route::get('alumnos', [AlumnController::class, 'index'])->name('alumnos');
/*
La ruta get, el primer parámetro que recibe es la url de la página, el segundo parámetro hace referencia al método create de AlumnoControlador, este método redirecciona al formulario crear de la vista. 
 */
// Route::get('/alumnos/crear', [AlumnController::class, 'create'])->name('crear');

/* La ruta post se encarga de enviar los datos del formulario al método store de nuestro controlador, éste se encarga  de guardar la información en  base de datos. */

// Route::post('/alumnos/crear', [AlumnController::class, 'store']);

/* Creamos la ruta  con el método get para poder mostrar los datos de un alumno. El método show recibe un parámetro ID y retorno un ítem que cumpla la condición y lo envía a la vista. */

// Route::get('/alumnos/ver/{id}', [AlumnController::class, 'show']);

/* La ruta get hace referencia al método edit de la clase AlumnoController con un parámetro ID y redirecciona al formulario editar de la vista con datos de un alumno en particular. */
// Route::get('/alumnos/editar/{id}', [AlumnController::class, 'edit']);

/* La ruta put se encarga de enviar los datos del formulario al método update del controlador, este se encarga de modificar la información de un registro con un identificador ID en la base de datos. */
// Route::put('/alumnos/editar/{id}',  [AlumnController::class, 'update']);


// Route::get('/alumnos/eliminar/{id}',  [AlumnController::class, 'destroy']);

// Route::controller(AlumnController::class)->group(function(){
//      Route::get('alumnos', 'index');
//      Route::get('alumnos/crear', 'create');
//      Route::post('alumnos/crear', 'store');
//      Route::get('alumnos/ver/{id}', 'show');
//      Route::get('alumnos/editar{id}', 'edit');
//      Route::put('alumnos/editar/{id}', 'update');
//      Route::get('alumnos/eliminar/{id}', 'destroy');
// });
