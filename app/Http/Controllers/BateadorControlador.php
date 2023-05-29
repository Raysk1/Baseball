<?php

namespace App\Http\Controllers;

use App\Models\Bateador;
use App\Models\Juego;
use Illuminate\Http\Request;

class BateadorControlador extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Bateador::all();
        return response(view("Bateadores.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($juegoId, $equipoId) {
        $t = Bateador::orderBy('idBateadores', 'DESC')->first();
        $lastId = $t == null ? 1 : $t->idBateadores + 1;
        $j = Juego::find($juegoId);
        $jugadores = $j->idEquipoLocal == $equipoId ? $j->equipoLocal->jugadores : $j->equipoVisitante->jugadores;
        $datos = ["lastId" => $lastId, "jugadores" => $jugadores, "juegoId" => $juegoId];
        return response(view('Bateadores.create', compact('datos')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $t = new Bateador();
        $t->idJuego = $request->idJuego;
        $t->AB = $request->AB;
        $t->C = $request->C;
        $t->H = $request->H;
        $t->CP = $request->CP;
        $t->BB = $request->BB;
        $t->K = $request->K;

        $t->PJE = ($t->AB != 0) ? number_format($t->H / $t->AB, 3) : 0; // Calcula el promedio de bateo
        $total_bases = $t->H + $t->BB;
        $turnos_plato = $t->AB + $t->BB;
        $t->OBP = ($turnos_plato != 0) ? number_format($total_bases / $turnos_plato, 3) : 0;

        $t->idAfiliacion = $request->idAfiliacion;
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
    public function edit($id) {
        $b = Bateador::find($id);
        $j = $b->juego;
        $jugadores = $j->equipoVisitante->jugadores;
        $jugadores = $jugadores->merge($j->equipoLocal->jugadores);
        $datos = ["bateador" => $b, "jugadores" => $jugadores];
        return response(view("Bateadores.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $t = Bateador::find($request->idBateadores);
        $t->idJuego = $request->idJuego;
        $t->idBateadores = $request->idBateadores;
        $t->AB = $request->AB;
        $t->C = $request->C;
        $t->H = $request->H;
        $t->CP = $request->CP;
        $t->BB = $request->BB;
        $t->K = $request->K;
        $t->PJE = ($t->AB != 0) ? number_format($t->H / $t->AB, 3) : 0; // Calcula el promedio de bateo
        $total_bases = $t->H + $t->BB;
        $turnos_plato = $t->AB + $t->BB;
        $t->OBP = ($turnos_plato != 0) ? number_format($total_bases / $turnos_plato, 3) : 0;

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