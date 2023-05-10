<?php

namespace App\Http\Controllers;

use App\Models\Ampayer;
use App\Models\Ampayersjuego;
use App\Models\Juego;
use Illuminate\Http\Request;

class AmpayersJuegoControlador extends Controller {
    /** 
     * Display a listing of the resource. 
     * @return \Illuminate\Http\Response 
     */
    public function index() {


    }
    /** 
    * Show the form for creating a new resource. 
    * @return \Illuminate\Http\Response 
    
    */
    public function create($juegoId) {
        $j = Ampayersjuego::orderBy('idCuerpo', 'DESC')->first();
        $ampayers = Ampayer::orderBy("nombre")->get();
        $datos = ["lastId" => $j == null ? 1 :  $j->idCuerpo + 1, "juegoId" => $juegoId,"ampayers" => $ampayers];
        return response(view('AmpayersJuegos.create', compact("datos")));
    }
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request 
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request) {
        $a = new Ampayersjuego();
        $a->idCuerpo = $request->idCuerpo;
        $a->idJuego = $request->idJuego;
        $a->idAmpayer = $request->idAmpayer;
        $a->ubicacion = $request->ubicacion;
        $a->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $a->idJuego]))
            ->with(["success" => "Actulizado exitosamente"])
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
        $ampayers = Ampayer::orderBy("nombre")->orderBy("apellidos")->get();
        $datos = ["ampayer" => Ampayersjuego::find($id),"ampayers" => $ampayers];
        return response(view("AmpayersJuegos.edit", compact("datos")));
    }

    /** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request) {
        $a = Ampayersjuego::find($request->idCuerpo);
        $a->idCuerpo = $request->idCuerpo;
        $a->idJuego = $request->idJuego;
        $a->idAmpayer = $request->idAmpayer;
        $a->ubicacion = $request->ubicacion;
        $a->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $a->idJuego]))
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