<?php

namespace App\Http\Controllers;

use App\Models\Bateador;
use App\Models\Equipo;
use App\Models\Juego;
use App\Models\Jugador;
use App\Models\Lanzador;
use App\Models\Roster;
use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoControlador extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Turno::all();
        return response(view("Turnos.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($juegoId, $equipoId) {
        $t = Turno::orderBy('idTurno', 'DESC')->first();
        $idTurno = $t != null ? $t->idTurno : 0;
        $j = Juego::find($juegoId);
        $jugadores = Bateador::obtenerBateadores($juegoId,$equipoId);
        $equipoRival = $j->idEquipoLocal == $equipoId ? $j->idEquipoVisitante : $j->idEquipoLocal;
        $lanzadores = Lanzador::obtenerLanzadores($juegoId,$equipoRival);
        $datos = ["lastId" => $idTurno + 1, "juegoId" => $juegoId, "jugadores" => $jugadores, "lanzadores" => $lanzadores];
        return response(view('Turnos.create', compact('datos')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $j = Bateador::find($request->idBateadores) -> jugador;
        $juego = Juego::find($request->idJuego);
        $r = $j->rosters->where("idTemporada", "=", $juego->idTemporada)->first();
        $t = new Turno();
        $t->idJuego = $request->idJuego;
        $t->idEquipo = $r->idEquipo;
        $t->idBateadores = $request->idBateadores;
        $t->turno = $request->turno;
        $t->inning = $request->inning;
        $t->posicion = $request->posicion;
        $t->tipo = $request->tipo;
        $t->resultado = $request->resultado;
        $t->carrera = (int) $request->carrera;
        $t->producciones = $request->producciones;
        $t->detalles = $request->detalles;
        $t->idLanzador = $request->idLanzador;
        $t->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $t->idJuego]))
            ->with(["success" => "Actulizado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $t = Turno::find($id);
        $j = Juego::find($t->idJuego);
        $jugadores = $j->equipoLocal->jugadores;
        $jugadores = $jugadores->merge($j->equipoVisitante->jugadores);
        $lanzadores = $j->lanzadores;
        $datos = ["turno" => $t, "jugadores" => $jugadores, "lanzadores" => $lanzadores];
        return response(view("Turnos.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $j = Jugador::find($request->idAfiliacion);
        $juego = Juego::find($request->idJuego);
        $r = $j->rosters->where("idTemporada", "=", $juego->idTemporada)->first();
        $t = Turno::find($request->idTurno);
        $t->idJuego = $request->idJuego;
        $t->idEquipo = $r->idEquipo;
        $t->idAfiliacion = $request->idAfiliacion;
        $t->turno = $request->turno;
        $t->inning = $request->inning;
        $t->posicion = $request->posicion;
        $t->tipo = $request->tipo;
        $t->resultado = $request->resultado;
        $t->carrera = (int) $request->carrera;
        $t->producciones = $request->producciones;
        $t->detalles = $request->detalles;
        $t->idLanzador = $request->idLanzador;
        $t->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $t->idJuego]))
            ->with(["success" => "Actulizado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}