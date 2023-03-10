<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoControlador extends Controller
{
    public function create(Request $request){
        $j = new Juego();
        $j->idTemporada = $request -> idTemporada;
        $j -> jornada = $request -> jornada;
        $j -> idCampo = $request -> idCampo;
        $j -> fecha = $request -> fecha;
        $j -> hora = $request -> hora;
        $j -> clima = $request -> clima;
        $j -> idEquipoVisitante = $request -> idEquipoVisitante;
        $j -> idEquipoLocal = $request -> idEquipoLocal;
        $j -> final = $request -> final;
        $j -> idAviso = $request -> idAviso;
        $j -> idCuerpo = $request -> idCuerpo;
        $j -> save();
    }
}
