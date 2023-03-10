<?php

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

Route::get('/Boxscore', function () {
    return view('Boxscore');
});
Route::get('/B', function () {
    return view('B');
});
Route::get('/Resultados', function () {
    return view('Resultados');
});

Route::get('/altajugadores', function () {
    return view('/Abcjugadores/altajugadores');
}); 
Route::get('/bajajugadores', function () {
    return view('/Abcjugadores/bajajugadores');
}); 
Route::get('/cambiojugadores', function () {
    return view('/Abcjugadores/cambiojugadores');
}); 

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