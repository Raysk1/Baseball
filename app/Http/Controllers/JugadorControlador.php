<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Http\Controllers\Controller;

class JugadorControlador extends Controller
{
    public function vistaForm(){
        return view('/Jugadores/formJugadoresAlta');
    }

    public function create(Request $request){
        $j = new Jugador();
        $j -> nombre = $request -> nombre;
        $j -> apellidos = $request ->apellidos;
        $j -> fechaNacimiento = $request -> fechaNacimiento;
        $j -> curp = $request -> curp;
        $j -> posicion = $request -> posicion;
        $j -> golpea = $request -> golpea;
        $j -> tira = $request -> tira;
        $j -> pagina = $request -> pagina;
        $j -> abreviacion = $request -> abreviacion;
        $j -> status = $request -> status;
        $j -> save();
        return view('/Jugadores/formJugadoresAlta');
    }
}
