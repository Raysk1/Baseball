<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Models\Roster;
use App\Models\Temporada;
use Illuminate\Http\Request;

class RosterControlador extends Controller
{
    public function index()
    {
        $datos = Roster::all();
        return view("Roster.index",compact("datos"));
    }
    /** 
     * Show the form for creating a new resource. 
     * @return \Illuminate\Http\Response 
    
     */
    public function create($idEquipo)
    {

      
        $lastRoster = Roster::orderBy('idRoster', 'DESC')->first();
        $lastId = $lastRoster == null ? 1 : $lastRoster->idRoster + 1;
        $datos = [
            "lastId" => $lastId,
            "idEquipo" => $idEquipo,
            "temporadas" => Temporada::all(),
            "jugadores" => Jugador::orderBy("nombre")->orderBy("apellidos")->get(),
        ];

        return response(view('Roster.create', compact('datos')));
    }
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request 
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request)
    {
        $r = new Roster();
        $r->idRoster = $request->idRoster;
        $r->idEquipo = $request->idEquipo;
        $r -> idTemporada = $request ->idTemporada;
        $r-> idAfiliacion = $request->idAfiliacion;
        $r-> save();

        return response()->redirectTo(route("EquiposDetails",["id" => $r->idEquipo]))
            ->with(["success" => "Creado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');

    }
    /** 
     * Display the specified resource. 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function show($id)
    {
        
        //  
    }
    /** 
     * Show the form for editing the specified resource. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */
    public function edit($id)
    {
        $r = Roster::find($id);
        $datos = [
            "roster" => $r,
            "temporadas" => Temporada::all(),
            "jugadores" => Jugador::orderBy("nombre")->orderBy("apellidos")->get(),
        ];
       
        return response(view("Roster.edit", compact("datos")));
    }
    /** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request)
    {

        $r = Roster::find($request->idRoster);
        $r->idEquipo = $request->idEquipo;
        $r -> idTemporada = $request ->idTemporada;
        $r-> idAfiliacion = $request->idAfiliacion;

        return response()->redirectTo(route("EquiposDetails",["id" => $r->idEquipo]))
        ->with(["success" => "Actulizado exitosamente"])
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate');

    }
    /** 
     * Remove the specified resource from storage. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */
    public function destroy($id)
    {
    }
}
