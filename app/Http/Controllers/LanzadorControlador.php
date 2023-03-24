<?php

namespace App\Http\Controllers;

use App\Models\Lanzador;
use Illuminate\Http\Request;

class LanzadorControlador extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Lanzador::all();
        return response(view("Lanzadores.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $t = Lanzador::orderBy('idLanzadores', 'DESC')->first();
        $lastId = $t->idLanzadores + 1;
        return response(view('Lanzadores.create', compact('lastId')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $t = new Lanzador();
        $t->idJuego = $request->idJuego;
        $t->idAfiliacion = $request->idAfiliacion;
        $t->IP = $request->IP;
        $t->C = $request ->C;
        $t->H = $request -> H;
        $t->BA = $request -> BA;
        $t->BB = $request -> BB;
        $t->K = $request -> K;
        $t->PCA = $request -> PCA;
        $t->POP = $request -> POP;
        $t->idLanzadores  = $request -> idLanzadores ;
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
        $datos = Lanzador::find($id);
        return response(view("Lanzadores.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $t = Lanzador::find($request->idBateadores );
        $t->idJuego = $request->idJuego;
        $t->idAfiliacion = $request->idAfiliacion;
        $t->IP = $request->IP;
        $t->C = $request ->C;
        $t->H = $request -> H;
        $t->BA = $request -> BA;
        $t->BB = $request -> BB;
        $t->K = $request -> K;
        $t->PCA = $request -> PCA;
        $t->POP = $request -> POP;
        $t->idLanzadores  = $request -> idLanzadores ;
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
