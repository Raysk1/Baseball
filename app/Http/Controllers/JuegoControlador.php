<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Temporada;
use Illuminate\Http\Request;
use App\Models\Juego;
use App\Models\Parque;
use Illuminate\Support\Facades\DB;

class JuegoControlador extends Controller {


    /** 
     * Display a listing of the resource. 
     * @return \Illuminate\Http\Response 
     */
    public function index() {

        $datos = DB::table("juegos")
            ->select(array(
                "juegos.idJuego",
                "temporadas.temporada",
                "juegos.jornada",
                "parques.descripcion as parque",
                "juegos.fecha",
                "juegos.hora",
                "juegos.clima",
                "e1.nombre as equipoLocal",
                "e2.nombre as equipoVisitante",
                "juegos.final"
            ))
            ->join("equipos as e1", "e1.idEquipo", "=", "juegos.idEquipoLocal")
            ->join("equipos as e2", "e2.idEquipo", "=", "juegos.idEquipoVisitante")
            ->join("parques", "parques.idCampo", "=", "juegos.idCampo")
            ->join("temporadas", "temporadas.idTemporada", "=", "juegos.idTemporada")
            ->get();
        return response(view("Juegos.index", compact("datos")));
    }
    /** 
    * Show the form for creating a new resource. 
    * @return \Illuminate\Http\Response 
    
    */
    public function create() {
        $j = Juego::orderBy('idJuego', 'DESC')->first();
        $lastId = $j != null ? $j->idJuego + 1 : 0;
        $datos = array(
            "lastId" => $lastId, 
            "equipos" => Equipo::all(["idEquipo", "nombre"]),
            "temporadas" =>  Temporada::all(["idTemporada","nombre"]),
            "campos" => Parque::all());
        return response(view('Juegos.create', compact('datos')));
    }
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request 
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request) {

        $j = new Juego();
        $j->idTemporada = $request->idTemporada;
        $j->jornada = $request->jornada;
        $j->idCampo = $request->idCampo;
        $j->fecha = $request->fecha;
        $j->hora = $request->hora;
        $j->clima = $request->clima;
        $j->idEquipoVisitante = $request->idEquipoVisitante;
        $j->idEquipoLocal = $request->idEquipoLocal;
        $j->final = $request->final;
        $j->idAviso = $request->idAviso;
        $j->idCuerpo = $request->idCuerpo;
        $j->save();
        return response()->redirectTo(route("juegosIndex"))
            ->with(["success" => "Creado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');

    }
    /** 
     * Display the specified resource. 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function show($id) {

        //  
    }
    /** 
     * Show the form for editing the specified resource. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */
    public function edit($id) {
        $datos = array(
           "juego" => Juego::find($id), 
            "equipos" => Equipo::all(["idEquipo", "nombre"]),
            "temporadas" =>  Temporada::all(["idTemporada","nombre"]),
            "campos" => Parque::all());
        return response(view("Juegos.edit", compact("datos")));
    }
    /** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request) {
        $j = Juego::find($request->idJuego);
        $j->idTemporada = $request->idTemporada;
        $j->jornada = $request->jornada;
        $j->idCampo = $request->idCampo;
        $j->fecha = $request->fecha;
        $j->hora = $request->hora;
        $j->clima = $request->clima;
        $j->idEquipoVisitante = $request->idEquipoVisitante;
        $j->idEquipoLocal = $request->idEquipoLocal;
        $j->final = $request->final;
        $j->idAviso = $request->idAviso;
        $j->idCuerpo = $request->idCuerpo;
        $j->save();
        return response()->redirectTo(route("juegosIndex"))
            ->with(["success" => "Actulizado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');

    }
    /** 
     * Remove the specified resource from storage. 
     * @param  int  $id 
     * @return  \Illuminate\Http\Response 
     */
    public function destroy($id) {

    }
}