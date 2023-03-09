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

Route::get('/Abcjugadores', function () {
    return view('/Abcjugadores/Abcjugadores');
}); 
    ?>
<<<<<<< HEAD
=======
    
    
>>>>>>> a6e18cebe276891b59d05ddd36ab94a5ad84aa49
