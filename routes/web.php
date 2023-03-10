<?php

use App\Http\Controllers\JugadorControlador;
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
Route::get('/abc/jugadores/create', [JugadorControlador::class,'create']) -> name('jugadoresCreate'); 
Route::post('/abc/jugadores/store', [JugadorControlador::class,'store'])->name("jugadoresStore"); 
Route::get("/abc/jugadores",[JugadorControlador::class,"index"])->name("jugadoresIndex");
Route::get("/abc/jugadores/edit/{id}",[JugadorControlador::class,"edit"])->name("jugadoresEdit");
Route::post("/abc/jugadores/update",[JugadorControlador::class,"update"]) -> name("jugadoresUpdate");

Route::get('/inicio', function () {
    return view('/inicio/inicio');
}); 
Route::get('/inicio', function () {
    return view('/inicio/inicio');
}); 

Route::get('tablajugadores', function () {
    return view('/tablajugadores/tablajugadores');
});
?>