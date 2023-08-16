<?php

use Illuminate\Support\Facades\Route;
use App\Models\RegionesTest;
use App\Http\Controllers\DatosVotacionController;
use App\Http\Controllers\MiControlador;


Route::get('/', function () {
    return view('votacion.index');
});
Route::get('/cargar-datos-votacion', [MiControlador::class, 'funcion1'])->name('nombre.ruta1');
// Route::get('/cargar-datos-votacion', 'DatosVotacionControllerr@metodoCargarDatosVotacion');
// Route::get('/cargar-datos-votacion',[DatosVotacionControllerr::class, 'metodoCargarDatosVotacion']);

