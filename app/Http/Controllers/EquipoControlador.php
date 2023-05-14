<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manejador;

class EquipoControlador extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $datos = Equipo::all();
        return response(view("Equipos.index", compact("datos")));
    }

    public function details($id) {
        $equipo = Equipo::find($id);
        $datos = ["equipo" => $equipo];
        return response(view("equipos.details", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $j = Equipo::orderBy('idEquipo', 'DESC')->first();
        $lastId = $j == null ? 0 : $j->idEquipo + 1;
        $manejadores = Manejador::all();
        $datos = ["lastId" => $lastId, "manejadores" => $manejadores];
        return response(view('Equipos.create', compact('datos')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $e = new Equipo();
        $e->idEquipo = $request->idEquipo;
        $e->nombre = $request->nombre;
        $e->ciudad = $request->ciudad;
        $e->idTecnico = $request->idTecnico;

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destino = "img/equipos/";
            $filename = $e->idEquipo . ".png";
            $uploadSuccess = $request->file('imagen')->move($destino, $filename);

        }

        $e->save();
        return response()->redirectTo(route("EquiposDetails",["id" => $e->idEquipo]))
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
        $e = Equipo::find($id);
        $manejadores = Manejador::all();
        $datos = ["equipo" => $e, "manejadores" => $manejadores];
        return response(view("Equipos.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $e = Equipo::find($request->idEquipo);
        $e->idEquipo = $request->idEquipo;
        $e->nombre = $request->nombre;
        $e->ciudad = $request->ciudad;
        $e->idTecnico = $request->idTecnico;
        $e->save();
        return response()->redirectTo(route("EquiposDetails",["id" => $e->idEquipo]))
            ->with(["success" => "Actualizado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }

    public function listado(Request $request){
        $equipos = Equipo::all();
        return response(view("Equipos.listado", compact("equipos")));
    }
}