<?php

namespace App\Http\Controllers;

use App\Models\Manejador;
use Illuminate\Http\Request;

class ManejadorControlador extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Manejador::all();
        return response(view("Manejadores.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $m = Manejador::orderBy('idTecnico', 'DESC')->first();
        if ($m == null) {
            $lastId = 1;
        } else {

            $lastId = $m->idTecnico + 1;
        }
        return response(view('Manejadores.create', compact('lastId')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $m = new Manejador();
        $m->nombre = $request->nombre;
        $m->tipo = $request->tipo;
        $m->save();
        return response()->redirectTo(route("manejadoresIndex"))
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
        $datos = Manejador::find($id);
        return response(view("Manejadores.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $m = Manejador::find($request->idTecnico);
        $m->nombre = $request->nombre;
        $m->tipo = $request->tipo;
        $m->save();
        return response()->redirectTo(route("manejadoresIndex"))
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