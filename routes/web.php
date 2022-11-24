<?php

use App\Http\Controllers\CatalogsController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dos', function () {
    return view('formatos.dos', [
        'title' => 'Inicio'
    ]);
});
Route::get('/tres', function () {
    return view('formatos.tres', [
        'title' => 'Inicio'
    ]);
});
Route::get('/cuatro', function () {
    return view('formatos.cuatro', [
        'title' => 'Inicio'
    ]);
});
Route::get('/uno', function () {
    return view('formatos.uno', [
        'title' => 'Inicio'
    ]);
});
Route::get('/solicitud', function () {
    return view('formatos.solicitud', [
        'title' => 'Inicio'
    ]);
});

// Catalogos
Route::get('/entidades', [CatalogsController::class, 'getEntidades'])->name('entidades');
Route::get('/municipios', [CatalogsController::class, 'getMunicipios'])->name('municipios');
Route::get('/localidades', [CatalogsController::class, 'getLocalidades'])->name('localidades');
Route::get('/colonias', [CatalogsController::class, 'getColonias'])->name('colonias');
Route::get('/cps', [CatalogsController::class, 'getCps'])->name('cps');
Route::get('/escolaridades', [CatalogsController::class, 'getEscolaridades'])->name('escolaridades');
Route::get('/parentescos', [CatalogsController::class, 'getParentescos'])->name('parentescos');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'inicio'])->name('inicio');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'checkStudent'])->name('check');

Route::get('/uno', [App\Http\Controllers\EstudioUnoController::class, 'index'])->name('estudio.uno.index');
Route::post('/uno', [App\Http\Controllers\EstudioUnoController::class, 'setEstudio'])->name('estudio.uno.set');

Route::get('/dos', [App\Http\Controllers\EstudioDosController::class, 'index'])->name('estudio.dos.index');
Route::post('/dos', [App\Http\Controllers\EstudioDosController::class, 'setEstudio'])->name('estudio.dos.set');

Route::get('/tres', [App\Http\Controllers\EstudioTresController::class, 'index'])->name('estudio.tres.index');
Route::post('/tres', [App\Http\Controllers\EstudioTresController::class, 'setEstudio'])->name('estudio.tres.set');

Route::get('/cuatro', [App\Http\Controllers\EstudioCuatroController::class, 'index'])->name('estudio.cuatro.index');
Route::post('/cuatro', [App\Http\Controllers\EstudioCuatroController::class, 'setEstudio'])->name('estudio.cuatro.set');

