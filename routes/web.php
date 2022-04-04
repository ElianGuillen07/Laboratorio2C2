<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


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
});

Route::get('/estudiante/{id}/{codigo}/{nombre}/{apellido}/{telefono}', function ($id=0, $codigo='', $nombre='', $apellido='', $telefono='') {
    return ('ID estudiante: '.$id. '; codigo: '. $codigo. '; nombre: '. $nombre. '; apellido: '. $apellido. '; telefono: '. $telefono);
})->where('id', '[0-9]+');

Route::resource('estudiante',EstudianteController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


