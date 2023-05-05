<?php

namespace App\Http\Controllers;

use App\Models\Bateador;
use App\Models\Equipo;
use App\Models\Juego;
use Illuminate\Http\Request;

class BateadorControlador extends Controller
{
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
    public function create($idJuego) {
        $t = Bateador::orderBy('idBateadores', 'DESC')->first();
        $lastId = $t == null ? 1 : $t->idBateadores + 1;
        $j = Juego::find($idJuego);
        $jugadores = $j->equipoVisitante->jugadores;
        $jugadores->merge($j->equipoLocal->jugadores);
        $datos =["lastId" => $lastId, "jugadores" => $jugadores,"juegoId" => $idJuego]; 
        return response(view('Bateadores.create', compact('datos')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $t = new Bateador();
        $t->idJuego = $request->idJuego;
        $t->idAfiliacion = $request->idAfiliacion;
        $t->AB = $request->AB;
        $t->C = $request ->C;
        $t->H = $request -> H;
        $t->CP = $request -> CP;
        $t->BB = $request -> BB;
        $t->K = $request -> K;
        $t->PJE = $request -> PJE;
        $t->OBP = $request -> OBP;
        $t->idBateadores  = $request -> idBateadores ;
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
    public function edit( $id) {
        $b = Bateador::find($id);
        $j = $b->juego;
        $jugadores = $j->equipoVisitante->jugadores;
        $jugadores->merge($j->equipoLocal->jugadores);
        $datos =["bateador"=>$b, "jugadores" => $jugadores];
        return response(view("Bateadores.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $t = Bateador::find($request->idBateadores );
        $t->idJuego = $request->idJuego;
        $t->idAfiliacion = $request->idAfiliacion;
        $t->AB = $request->AB;
        $t->C = $request ->C;
        $t->H = $request -> H;
        $t->CP = $request -> CP;
        $t->BB = $request -> BB;
        $t->K = $request -> K;
        $t->PJE = $request -> PJE;
        $t->OBP = $request -> OBP;
        $t->idBateadores  = $request -> idBateadores ;
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
