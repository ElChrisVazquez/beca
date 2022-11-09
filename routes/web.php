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

Route::get('/', function () {
    return view('main', [
        'title' => 'Inicio'
    ]);
});
Route::get('/estudio', function () {
    return view('formatos.estudio', [
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
