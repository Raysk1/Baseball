<?php

namespace App\Http\Controllers;

use App\Models\Temporada;
use Illuminate\Http\Request;

class TemporadaControlador extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Temporada::all();
        return response(view("Temporadas.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $t = Temporada::orderBy('idTemporada', 'DESC')->first();
        if ($t == null) {
            $lastId = 1;
        } else {
            $lastId = $t->idTemporada + 1;
        }
        return response(view('Temporadas.create', compact('lastId')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $t = new Temporada();
        $t->idLiga = $request->idLiga;
        $t->grupo = $request->grupo;
        $t->categoria = $request->categoria;
        $t->momento = $request->momento;
        $t->nombre = $request->nombre;
        $t->temporada;
        $t->save();
        return response()->redirectTo(route("temporadasIndex"))
            ->with(["success" => "Creado exitosamente"])
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
        $datos = Temporada::find($id);
        return response(view("Temporadas.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $t = Temporada::find($request->idTemporada);
        $t->idLiga = $request->idLiga;
        $t->grupo = $request->grupo;
        $t->categoria = $request->categoria;
        $t->momento = $request->momento;
        $t->temporada = $request->temporada;
        $t->nombre = $request->nombre;
        $t->save();
        return response()->redirectTo(route("temporadasIndex"))
            ->with(["success" => "Actualizado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}