<?php

use App\Http\Controllers\JugadorControlador;
use App\Http\Controllers\AmpayerControlador;
use App\Http\Controllers\AmpayersJuegoControlador;
use App\Http\Controllers\EquipoControlador;
use App\Http\Controllers\JuegoControlador;
use App\Http\Controllers\LanzadorControlador;
use App\Http\Controllers\LigaControlador;
use App\Http\Controllers\TurnoControlador;
use App\Http\Controllers\BateadorControlador;
use App\Http\Controllers\EntradaControlador;
use App\Http\Controllers\LoginControlador;
use App\Http\Controllers\RosterControlador;


//use App\Http\Controllers\InformacionControlador;
use App\Http\Controllers\ManejadorControlador;
use App\Http\Controllers\TemporadaControlador;

use App\Models\Ampayer;
use App\Models\Jugador;
use App\Models\Lanzador;
use App\Models\User;
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



Route::get('/Resultados', function () {
    return view('Resultados');
});


/** Jugadores routes */
Route::get('/abc/jugadores/create', [JugadorControlador::class, 'create'])->middleware("auth")->name('jugadoresCreate');
Route::post('/abc/jugadores/store', [JugadorControlador::class, 'store'])->middleware("auth")->name("jugadoresStore");
Route::get("/abc/jugadores", [JugadorControlador::class, "index"])->middleware("auth")->name("jugadoresIndex");
Route::get("/abc/jugadores/edit/{id}", [JugadorControlador::class, "edit"])->middleware("auth")->name("jugadoresEdit");
Route::post("/abc/jugadores/update", [JugadorControlador::class, "update"])->middleware("auth")->name("jugadoresUpdate");
Route::get("/abc/jugadores/listado", [JugadorControlador::class, "listado"])->name("jugadoresListado");

/**juegos */
Route::get('/abc/juegos/create', [JuegoControlador::class, 'create'])->middleware("auth")->name('juegosCreate');
Route::post('/abc/juegos/store', [JuegoControlador::class, 'store'])->middleware("auth")->name("juegosStore");
Route::get("/abc/juegos", [JuegoControlador::class, "index"])->middleware("auth")->name("juegosIndex");
Route::get("/abc/juegos/edit/{id}", [JuegoControlador::class, "edit"])->middleware("auth")->name("juegosEdit");
Route::post("/abc/juegos/update", [JuegoControlador::class, "update"])->middleware("auth")->name("juegosUpdate");
Route::get("/abc/juegos/details/{id}", [JuegoControlador::class, "details"])->middleware("auth")->name("juegosDetails");

/**Entradas */
Route::get('/abc/Entrada/create/{juegoId}', [EntradaControlador::class, 'create'])->middleware("auth")->name('EntradaCreate');
Route::post('/abc/Entrada/store', [EntradaControlador::class, 'store'])->middleware("auth")->name("EntradaStore");
Route::get("/abc/Entrada", [EntradaControlador::class, "index"])->middleware("auth")->name("EntradaIndex");
Route::get("/abc/Entrada/edit/{id}", [EntradaControlador::class, "edit"])->middleware("auth")->name("EntradaEdit");
Route::post("/abc/Entrada/update", [EntradaControlador::class, "update"])->middleware("auth")->name("EntradaUpdate");

/** Ampayers routes */
Route::get('/abc/Ampayers/create', [AmpayerControlador::class, 'create'])->middleware("auth")->name('AmpayersCreate');
Route::post('/abc/Ampayers/store', [AmpayerControlador::class, 'store'])->middleware("auth")->name("AmpayersStore");
Route::get("/abc/Ampayers", [AmpayerControlador::class, "index"])->middleware("auth")->name('AmpayersIndex');
Route::get("/abc/Ampayers/edit/{id}", [AmpayerControlador::class, "edit"])->middleware("auth")->name("AmpayersEdit");
Route::post("/abc/Ampayers/update", [AmpayerControlador::class, "update"])->middleware("auth")->name("AmpayersUpdate");

/** Rooster */
Route::get('/abc/Roster/create/{idEquipo}', [RosterControlador::class, 'create'])->middleware("auth")->name('RosterCreate');
Route::post('/abc/Roster/store', [RosterControlador::class, 'store'])->middleware("auth")->name("RosterStore");
Route::get("/abc/Roster", [RosterControlador::class, "index"])->middleware("auth")->name('RosterIndex');
Route::get("/abc/Roster/edit/{id}", [RosterControlador::class, "edit"])->middleware("auth")->name("RosterEdit");
Route::post("/abc/Roster/update", [RosterControlador::class, "update"])->middleware("auth")->name("RosterUpdate");


//informacion
Route::get('/contacto', function () {
    return view('contacto'); })->name("contacto");


/** AmpayersJuego routes */
Route::get('/abc/AmpayersJuego/create/{juegoId}', [AmpayersJuegoControlador::class, 'create'])->middleware("auth")->name('AmpayersJuegoCreate');
Route::post('/abc/AmpayersJuego/store', [AmpayersJuegoControlador::class, 'store'])->middleware("auth")->name('AmpayersJuegoStore');
Route::get("/abc/AmpayersJuego/edit/{id}", [AmpayersJuegoControlador::class, "edit"])->middleware("auth")->name("AmpayersJuegoEdit");
Route::post("/abc/AmpayersJuego/update", [AmpayersJuegoControlador::class, "update"])->middleware("auth")->name("AmpayersJuegoUpdate");

/* Lanzadores routes */
Route::get('/abc/Lanzadores/create/{juegoId}', [LanzadorControlador::class, 'create'])->middleware("auth")->name('LanzadorCreate');
Route::post('/abc/Lanzadores/store', [LanzadorControlador::class, 'store'])->middleware("auth")->name('LanzadorStore');
Route::get("/abc/Lanzadores/edit/{id}", [LanzadorControlador::class, "edit"])->middleware("auth")->name("LanzadorEdit");
Route::post("/abc/Lanzadores/update", [LanzadorControlador::class, "update"])->middleware("auth")->name("LanzadorUpdate");

/**Equipo routes */
Route::get('/abc/equipos/create', [EquipoControlador::class, 'create'])->middleware("auth")->name('EquiposCreate');
Route::post('/abc/equipos/store', [EquipoControlador::class, 'store'])->middleware("auth")->name('EquiposStore');
Route::get('/abc/equipos', [EquipoControlador::class, 'index'])->middleware("auth")->name('equiposIndex');
Route::get('/abc/equipos/edit/{id}', [EquipoControlador::class, 'edit'])->middleware("auth")->name('EquiposEdit');
Route::get('/abc/equipos/details/{id}', [EquipoControlador::class, 'details'])->middleware("auth")->name('EquiposDetails');
Route::post('/abc/equipos/update', [EquipoControlador::class, 'update'])->middleware("auth")->name('equiposUpdate');

Route::get('/equipos', function () {
    return view('equipos.listado');
});

//temporadas
Route::get('/abc/Temporadas/create', [TemporadaControlador::class, 'create'])->middleware("auth")->name('TemporadasCreate');
Route::post('/abc/Temporadas/store', [TemporadaControlador::class, 'store'])->middleware("auth")->name('TemporadasStore');
Route::get('/abc/Temporadas', [TemporadaControlador::class, 'index'])->middleware("auth")->name('temporadasIndex');
Route::get('/abc/Temporadas/edit/{id}', [TemporadaControlador::class, 'edit'])->middleware("auth")->name('TemporadasEdit');
Route::post('/abc/Temporadas/update', [TemporadaControlador::class, 'update'])->middleware("auth")->name('TemporadasUpdate');

Route::get('/abc/liga/create', [LigaControlador::class, 'create'])->middleware("auth")->name('ligasCreate');
Route::post('/abc/liga/store', [LigaControlador::class, 'store'])->middleware("auth")->name('ligasStore');
Route::get('/abc/liga', [LigaControlador::class, 'index'])->middleware("auth")->name('ligasIndex');
Route::get('/abc/liga/edit/{id}', [LigaControlador::class, 'edit'])->middleware("auth")->name('ligasEdit');
Route::post('/abc/liga/update', [LigaControlador::class, 'update'])->middleware("auth")->name('ligasUpdate');

Route::get('/abc/manejadores/create', [ManejadorControlador::class, 'create'])->middleware("auth")->name('manejadoresCreate');
Route::post('/abc/manejadores/store', [ManejadorControlador::class, 'store'])->middleware("auth")->name('manejadoresStore');
Route::get('/abc/manejadores', [ManejadorControlador::class, 'index'])->middleware("auth")->name('manejadoresIndex');
Route::get('/abc/manejadores/edit/{id}', [ManejadorControlador::class, 'edit'])->middleware("auth")->name('manejadoresEdit');
Route::post('/abc/manejadores/update', [ManejadorControlador::class, 'update'])->middleware("auth")->name('manejadoresUpdate');

/**Routes de Turnos */
Route::get('/abc/turnos/create/{juegoId}', [TurnoControlador::class, 'create'])->middleware("auth")->name('turnoCreate');
Route::post('/abc/turnos/store', [TurnoControlador::class, 'store'])->middleware("auth")->name('turnoStore');
Route::get('/abc/turnos', [TurnoControlador::class, 'index'])->middleware("auth")->name('turnoIndex');
Route::get('/abc/turnos/edit/{id}', [TurnoControlador::class, 'edit'])->middleware("auth")->name("turnoEdit");
Route::post('/abc/turnos/update', [TurnoControlador::class, 'update'])->middleware("auth")->name('turnoUpdate');

/**BATEADORES*/
Route::get('/abc/bateadores/create/{juegoId}', [BateadorControlador::class, 'create'])->middleware("auth")->name('bateadoresCreate');
Route::post('/abc/bateadores/store', [BateadorControlador::class, 'store'])->middleware("auth")->name('bateadoresStore');
Route::get('/abc/bateadores', [BateadorControlador::class, 'index'])->middleware("auth")->name('bateadoresIndex');
Route::get('/abc/bateadores/edit/{id}', [BateadorControlador::class, 'edit'])->middleware("auth")->name("bateadoresEdit");
Route::post('/abc/bateadores/update', [BateadorControlador::class, 'update'])->middleware("auth")->name('bateadoresUpdate');



/**Routes de informacion 
Route::get('/abc/informacion/create', [InformacionControlador::class,'create']) -> name('turnoCreate'); 
Route::post('/abc/informacion/store', [InformacionControlador::class,'store']) -> name('turnoStore');
Route::get('/Luis/informacion', [InformacionControlador::class,'index']) -> name('informacionIndex'); 
Route::get('/abc/informacion/edit/{id}', [InformacionControlador::class,'edit'])->name("turnoEdit"); 
Route::post('/abc/informacion/update', [InformacionControlador::class,'update']) -> name('turnoUpdate'); */

Route::get('/informacion', function () {
    return view('luis/informacion'); });

//Login
Route::get('/login', function () {
    return view('sesion.login'); })->name("login");
Route::get('/register', function () {
    return view('sesion.register'); });
//Route::get('/registrologin', [UserControlador::class,'create']) -> name('RegistroCreate');
Route::post('/register', [LoginControlador::class, 'register'])->name('Register');
Route::get('/logout', [LoginControlador::class, 'logout'])->name('logout');
Route::post('/login', [LoginControlador::class, 'login'])->name('login');



//inicio
Route::get('/inicio', function () {
    return view('inicio.inicio'); })->name("inicio");
Route::post('/inicio', function () {
    return view('inicio.inicio'); });

Route::redirect("/", "/inicio");

Route::get('/reglamento', function () {
    return view('Boxscore'); })->name("reglamento");
Route::get('/boxscore', function () {
    return view('Boxscore.boxscore'); })->name("boxscore    ");

?>