<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Equipo::all();
        return response(view("Equipos.index", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $j = Equipo::orderBy('idEquipo', 'DESC')->first();
        $lastId = $j == null ? 0 : $j->idEquipo + 1; 
        return response(view('Equipos.create', compact('lastId')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $e = new Equipo();
        $e -> idEquipo = $request->idEquipo;
        $e ->nombre = $request->nombre;
        $e ->ciudad = $request->ciudad;
        $e ->idTecnico = $request -> idTecnico;
        
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destino= "img/equipo/";
            $filename =$e->idEquipo.".png";
            $uploadSuccess= $request->file('imagen')->move($destino,$filename);

        }
        
        $e -> save();
        return response()->redirectTo(route("equiposIndex"))
        ->with(["success" => "Creado exitosamente"])
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datos = Equipo::find($id);
        return response(view("Equipos.edit", compact("datos")));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $e = Equipo::find($request->idEquipo);
        $e -> idEquipo = $request->idEquipo;
        $e ->nombre = $request->nombre;
        $e ->ciudad = $request->ciudad;
        $e ->idTecnico = $request -> idTecnico;
        $e -> save();
        return response()->redirectTo(route("equiposIndex"))
        ->with(["success" => "Actualizado exitosamente"])
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
