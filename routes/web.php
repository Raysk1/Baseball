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


//use App\Http\Controllers\InformacionControlador;

use App\Http\Controllers\ManejadorControlador;
use App\Http\Controllers\TemporadaControlador;
use App\Http\Controllers\UserControlador;
use App\Models\Ampayer;
use App\Models\Jugador;
use App\Models\Ampayersjuego;
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
Route::redirect("/","/inicio");

Route::get('/', function () {
    return view('welcome');
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

/**juegos */
Route::get('/abc/juegos/create', [JuegoControlador::class,'create']) -> name('juegosCreate'); 
Route::post('/abc/juegos/store', [JuegoControlador::class,'store'])->name("juegosStore"); 
Route::get("/abc/juegos",[JuegoControlador::class,"index"])->name("juegosIndex");
Route::get("/abc/juegos/edit/{id}",[JuegoControlador::class,"edit"])->name("juegosEdit");
Route::post("/abc/juegos/update",[JuegoControlador::class,"update"]) -> name("juegosUpdate");
Route::get("/abc/juegos/details/{id}",[JuegoControlador::class,"details"]) ->name("juegosDetails");

/**Entradas */
Route::get('/abc/Entrada/create/{juegoId}', [EntradaControlador::class,'create']) -> name('EntradaCreate'); 
Route::post('/abc/Entrada/store', [EntradaControlador::class,'store'])->name("EntradaStore"); 
Route::get("/abc/Entrada",[EntradaControlador::class,"index"])->name("EntradaIndex");
Route::get("/abc/Entrada/edit/{id}",[EntradaControlador::class,"edit"])->name("EntradaEdit");
Route::post("/abc/Entrada/update",[EntradaControlador::class,"update"]) -> name("EntradaUpdate");

/** Ampayers routes */
Route::get('/abc/Ampayers/create', [AmpayerControlador::class,'create']) -> name('AmpayersCreate'); 
Route::post('/abc/Ampayers/store', [AmpayerControlador::class,'store'])->name("AmpayersStore"); 
Route::get("/abc/Ampayers",[AmpayerControlador::class,"index"])->name("AmpayersIndex");
Route::get("/abc/Ampayers/edit/{id}",[AmpayerControlador::class,"edit"])->name("AmpayersEdit");
Route::post("/abc/Ampayers/update",[AmpayerControlador::class,"update"]) -> name("AmpayersUpdate");

//inicio
Route::get('/inicio', function () {
    return view('inicio.inicio');
}) ->name("inicio"); 
//informacion
Route::get('/contacto', function () {
    return view('contacto');
}) ->name("contacto");


/** AmpayersJuego routes */
Route::get('/abc/AmpayersJuego/create/{juegoId}', [AmpayersJuegoControlador::class,'create']) -> name('AmpayersJuegoCreate');
Route::post('/abc/AmpayersJuego/store', [AmpayersJuegoControlador::class,'store']) -> name('AmpayersJuegoStore');
Route::get("/abc/AmpayersJuego/edit/{id}",[AmpayersJuegoControlador::class,"edit"])->name("AmpayersJuegoEdit");
Route::post("/abc/AmpayersJuego/update",[AmpayersJuegoControlador::class,"update"]) -> name("AmpayersJuegoUpdate");

/* Lanzadores routes */
Route::get('/abc/Lanzadores/create/{juegoId}', [LanzadorControlador::class,'create']) -> name('LanzadorCreate');
Route::post('/abc/Lanzadores/store', [LanzadorControlador::class,'store']) -> name('LanzadorStore');
Route::get("/abc/Lanzadores/edit/{id}", [LanzadorControlador::class,"edit"])->name("LanzadorEdit");
Route::post("/abc/Lanzadores/update", [LanzadorControlador::class,"update"]) -> name("LanzadorUpdate");

/**Equipo routes */
Route::get('/abc/equipos/create', [EquipoControlador::class,'create']) -> name('EquiposCreate'); 
Route::post('/abc/equipos/store', [EquipoControlador::class,'store']) -> name('EquiposStore'); 
Route::get('/abc/equipos', [EquipoControlador::class,'index']) -> name('equiposIndex'); 
Route::get('/abc/equipos/edit/{id}', [EquipoControlador::class,'edit']) -> name('EquiposEdit'); 
Route::post('/abc/equipos/update', [EquipoControlador::class,'update']) -> name('equiposUpdate'); 

Route::get('/abc/Temporadas/create', [TemporadaControlador::class,'create']) -> name('TemporadasCreate'); 
Route::post('/abc/Temporadas/store', [TemporadaControlador::class,'store']) -> name('TemporadasStore'); 
Route::get('/abc/Temporadas', [TemporadaControlador::class,'index']) -> name('temporadasIndex'); 
Route::get('/abc/Temporadas/edit/{id}', [TemporadaControlador::class,'edit']) -> name('TemporadasEdit'); 
Route::post('/abc/Temporadas/update', [TemporadaControlador::class,'update']) -> name('TemporadasUpdate'); 

Route::get('/abc/liga/create', [LigaControlador::class,'create']) -> name('ligasCreate'); 
Route::post('/abc/liga/store', [LigaControlador::class,'store']) -> name('ligasStore'); 
Route::get('/abc/liga', [LigaControlador::class,'index']) -> name('ligasIndex'); 
Route::get('/abc/liga/edit/{id}', [LigaControlador::class,'edit']) -> name('ligasEdit'); 
Route::post('/abc/liga/update', [LigaControlador::class,'update']) -> name('ligasUpdate'); 

Route::get('/abc/manejadores/create', [ManejadorControlador::class,'create']) -> name('manejadoresCreate'); 
Route::post('/abc/manejadores/store', [ManejadorControlador::class,'store']) -> name('manejadoresStore'); 
Route::get('/abc/manejadores', [ManejadorControlador::class,'index']) -> name('manejadoresIndex'); 
Route::get('/abc/manejadores/edit/{id}', [ManejadorControlador::class,'edit']) -> name('manejadoresEdit'); 
Route::post('/abc/manejadores/update', [ManejadorControlador::class,'update']) -> name('manejadoresUpdate'); 

/**Routes de Turnos */
Route::get('/abc/turnos/create/{juegoId}', [TurnoControlador::class,'create']) -> name('turnoCreate'); 
Route::post('/abc/turnos/store', [TurnoControlador::class,'store']) -> name('turnoStore');
Route::get('/abc/turnos', [TurnoControlador::class,'index']) -> name('turnoIndex'); 
Route::get('/abc/turnos/edit/{id}', [TurnoControlador::class,'edit'])->name("turnoEdit"); 
Route::post('/abc/turnos/update', [TurnoControlador::class,'update']) -> name('turnoUpdate'); 

/**BATEADORES*/
Route::get('/abc/bateadores/create/{juegoId}', [BateadorControlador::class,'create']) -> name('bateadoresCreate'); 
Route::post('/abc/bateadores/store', [BateadorControlador::class,'store']) -> name('bateadoresStore');
Route::get('/abc/bateadores', [BateadorControlador::class,'index']) -> name('bateadoresIndex'); 
Route::get('/abc/bateadores/edit/{id}', [BateadorControlador::class,'edit'])->name("bateadoresEdit"); 
Route::post('/abc/bateadores/update', [BateadorControlador::class,'update']) -> name('bateadoresUpdate'); 

/**Routes de informacion 
Route::get('/abc/informacion/create', [InformacionControlador::class,'create']) -> name('turnoCreate'); 
Route::post('/abc/informacion/store', [InformacionControlador::class,'store']) -> name('turnoStore');
Route::get('/Luis/informacion', [InformacionControlador::class,'index']) -> name('informacionIndex'); 
Route::get('/abc/informacion/edit/{id}', [InformacionControlador::class,'edit'])->name("turnoEdit"); 
Route::post('/abc/informacion/update', [InformacionControlador::class,'update']) -> name('turnoUpdate'); */

Route::get('/informacion', function () {
    return view('luis/informacion');
});
Route::get('/login', function () {
    return view('sesion/login');
});
Route::get('/registrologin', function () {
    return view('sesion/registrologin');
});
Route::get('/header', function () {
    return view('pantalla.header');
})->name("header");

//

Route::get('/sesion/registrologin', [UserControlador::class,'create']) -> name('RegistroCreate');
Route::post('/sesion/store', [UserControlador::class,'store']) -> name('RegistroStore');


?>