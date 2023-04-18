<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaControlador extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Entrada::all();
        return response(view("Entradas.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $e = Entrada::orderBy('idCarrera', 'DESC')->first();
        $lastId = $e->idCarrera + 1;
        return response(view('Entradas.create', compact('lastId')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $e = new Entrada();
        $e->idJuego = $request->idJuego;
        $e->entradaAlta = $request->entradaAlta;
        $e->entradaBaja = $request->entradaBaja;
        $e->carrerasAlta = $request->carrerasAlta;
        $e->carrerasBaja = $request->carrerasBaja;
        $e->idCarrera = $request->idCarrera;
        $e->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $e->idJuego]))
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
        $datos = Entrada::find($id);
        return response(view("Entradas.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $e = Entrada::find($request->idCarrera);
        $e->idJuego = $request->idJuego;
        $e->entradaAlta = $request->entradaAlta;
        $e->entradaBaja = $request->entradaBaja;
        $e->carrerasAlta = $request->carrerasAlta;
        $e->carrerasBaja = $request->carrerasBaja;
        $e->idCarrera = $request->idCarrera;
        $e->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $e->idCarrera]))
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