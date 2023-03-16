<?php

use App\Http\Controllers\JugadorControlador;
use App\Http\Controllers\AmpayerControlador;
use App\Http\Controllers\EquipoControlador;
use App\Http\Controllers\JuegoControlador;

use App\Models\Ampayer;
use App\Models\Jugador;
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
Route::redirect("/","/inicio");

Route::get('/Boxscore', function () {
    return view('Boxscore');
});

Route::get('/Resultados', function () {
    return view('Resultados');
});

/** Jugadores routes */
Route::get('/abc/jugadores/create', [JugadorControlado::class,'create']) -> name('jugadoresCreate'); 
Route::post('/abc/jugadores/store', [JugadorControlador::class,'store'])->name("jugadoresStore"); 
Route::get("/abc/jugadores",[JugadorControlador::class,"index"])->name("jugadoresIndex");
Route::get("/abc/jugadores/edit/{id}",[JugadorControlador::class,"edit"])->name("jugadoresEdit");
Route::post("/abc/jugadores/update",[JugadorControlador::class,"update"]) -> name("jugadoresUpdate");

/**juegos */
Route::get('/abc/juegos/create', [JuegoControlador::class,'create']) -> name('juegosCreate'); 
Route::post('/abc/juegos/store', [JuegoControlador::class,'store'])->name("juegosStore"); 
Route::get("/abc/juegos",[JuegoControlador::class,"index"])->name("jugadoresIndex");
Route::get("/abc/juegos/edit/{id}",[JuegoControlador::class,"edit"])->name("jugadoresEdit");
Route::post("/abc/juegos/update",[JuegoControlador::class,"update"]) -> name("juegosUpdate");
/**Entradas */
Route::get('/abc/Entrada/create', [JuegoControlador::class,'create']) -> name('EntradaCreate'); 
Route::post('/abc/Entrada/store', [JuegoControlador::class,'store'])->name("EntradaStore"); 
Route::get("/abc/Entrada",[JuegoControlador::class,"index"])->name("jugadoresIndex");
Route::get("/abc/Entrada/edit/{id}",[JuegoControlador::class,"edit"])->name("jugadoresEdit");
Route::post("/abc/Entrada/update",[JuegoControlador::class,"update"]) -> name("EntradaUpdate");

/** Ampayers routes */
Route::get('/abc/Ampayers/create', [AmpayerControlador::class,'create']) -> name('AmpayersCreate'); 
Route::post('/abc/Ampayers/store', [AmpayerControlador::class,'store'])->name("AmpayersStore"); 
Route::get("/abc/Ampayers",[AmpayerControlador::class,"index"])->name("AmpayersIndex");
Route::get("/abc/Ampayers/edit/{id}",[AmpayerControlador::class,"edit"])->name("AmpayersEdit");
Route::post("/abc/Ampayers/update",[AmpayerControlador::class,"update"]) -> name("AmpayersUpdate");
Route::get('/inicio', function () {
    return view('/inicio/inicio');
}); 
/** Equipos routes */
Route::get('/abc/equipos/create', [EquipoControlador::class,'create']) -> name('equiposcreate'); 
Route::post('/abc/equipos/store', [EquipoControlador::class,'store'])->name("equiposStore"); 
Route::get("/abc/equipos",[EquipoControlador::class,"index"])->name("equiposIndex");
Route::get("/abc/equipos/edit/{id}",[EquipoControlador::class,"edit"])->name("equiposEdit");
Route::post("/abc/equipos/update",[EquipoControlador::class,"update"]) -> name("equiposUpdate");
Route::get('/inicio', function () {
    return view('/inicio/inicio');
}); 


?>