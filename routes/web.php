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
<<<<<<< HEAD
    return view('/Abcjugadores/Abcjugadores');
}); 
    ?>
=======
    return view('Abcjugadores/Abcjugadores');
});
    ?>
>>>>>>> 0e8edcb5956d6ffa9984267ef3aaa34bf05e61f7
