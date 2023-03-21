<?php

use App\Http\Controllers\JugadorControlador;
use App\Models\Ampayer;
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

Route::get('/abc/jugadores/create', [JugadorControlador::class,'vistaFormAlta']) -> name('jugadoresForm'); 
Route::post('/abc/jugadores/create', [JugadorControlador::class,'create']); 
 

Route::get('/inicio', function () {
    return view('/inicio/inicio');
}); 
Route::get('/inicio', function () {
    return view('/inicio/inicio');
}); 

Route::get('tablajugadores', function () {
    return view('/tablajugadores/tablajugadores');
});

Route::get('/informacion', function () {
    return view('/Luis/informacion');
});

Route::get('/pagina', function () {
    return view('/Luis/pagina');
});


Route::get('/iniciio', function () {
    return view('/Luis/iniciio');
});
?>