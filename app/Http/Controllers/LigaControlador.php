<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use Illuminate\Http\Request;

class LigaControlador extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Liga::all();
        return response(view("Ligas.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $l = Liga::orderBy('idLiga', 'DESC')->first();
        if ($l == null) {
            $lastId = 1;
        } else {

            $lastId = $l->idLiga + 1;
        }
        return response(view('Ligas.create', compact('lastId')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $l = new Liga();
        $l->descripcion = $request->descripcion;
        $l->presidente = $request->presidente;
        $l->coordinador = $request->coordinador;
        $l->mapa = $request->mapa;
        $l->direccion = $request->direccion;
        $l->telefono = $request->telefono;
        $l->redes = $request->redes;
        $l->save();
        return response()->redirectTo(route("ligasIndex"))
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
        $datos = Liga::find($id);
        return response(view("Ligas.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $l = Liga::find($request->idLiga);
        $l->descripcion = $request->descripcion;
        $l->presidente = $request->presidente;
        $l->coordinador = $request->coordinador;
        $l->mapa = $request->mapa;
        $l->direccion = $request->direccion;
        $l->telefono = $request->telefono;
        $l->redes = $request->redes;
        $l->save();
        return response()->redirectTo(route("ligasIndex"))
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