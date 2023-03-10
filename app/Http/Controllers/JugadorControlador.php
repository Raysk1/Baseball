<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Http\Controllers\Controller;

class JugadorControlador extends Controller {
    public function vistaFormAlta() {
        $year = date("Y"); //Obtiene el año actual en formato de 4 dígitos
        $yearId = str_split($year, 2)[1] . "0000";
        $yearId = intval($yearId);
        $lastUser = Jugador::orderBy('idAfiliacion', 'DESC')->first();
        $lastUserId = $lastUser->idAfiliacion;
        $id = 0;
        if ($yearId > $lastUserId) {
            $id = $yearId;
        } else {
            $id = $lastUserId + 1;
        }

        $lastId = $id;


        return view('/Jugadores/formJugadoresAlta', compact('lastId'));
    }

    public function create(Request $request) {
        $j = new Jugador();
        $j->idAfiliacion = $request->idAfiliacion;
        $j->nombre = $request->nombre;
        $j->apellidos = $request->apellidos;
        $j->fechaNacimiento = $request->fechaNacimiento;
        $j->curp = $request->curp;
        $j->posicion = $request->posicion;
        $j->golpea = $request->golpea;
        $j->tira = $request->tira;
        $j->pagina = $request->pagina;
        $j->abreviacion = $request->abreviacion;
        $j->status = $request->status;
        $j->save();
        $lastId = $j->idAfiliacion + 1;
        return view('/Jugadores/formJugadoresAlta', compact('lastId'));
    }
}