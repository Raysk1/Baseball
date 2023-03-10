<?php

namespace App\Http\Controllers;
use App\Models\Ampayer;
use Illuminate\Http\Request;

class AmpayerControlador extends Controller
{

    /** 
     * Display a listing of the resource. 
     * @return \Illuminate\Http\Response 
     */
    public function index() {

        $datos = Ampayer::all();
        return response(view("Ampayers.index", compact("datos")));
    }
    /** 
    * Show the form for creating a new resource. 
    * @return \Illuminate\Http\Response 
    
    */
    public function create() {
        $j = Ampayer::orderBy('idAmpayer', 'DESC')->first();
        $lastId = $j->idAmpayer;
        return response(view('Apayers.create', compact('lastId')));
    }
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request 
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request) {

        $a = new Ampayer();
        $a -> nombre = $request -> nombre;
        $a ->apellidos = $request -> apellidos;
        $a -> fechaNacimiento = $request -> fechaNacimiento;
        $a -> curp = $request -> curp;
        $a -> abreviacion = $request -> abreviacion;
        $a -> activo = $request -> activo;
        $a -> save();
        return response()->redirectTo(route("ampayersIndex"))
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
        $datos = Ampayer::find($id);
        return response(view("Ampayers.edit", compact("datos")));
    }
    /** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request) {
        $a = Ampayer::find($request->idAmpayer);
        $a -> nombre = $request -> nombre;
        $a ->apellidos = $request -> apellidos;
        $a -> fechaNacimiento = $request -> fechaNacimiento;
        $a -> curp = $request -> curp;
        $a -> abreviacion = $request -> abreviacion;
        $a -> activo = $request -> activo;
        $a -> save();
        return response() ->redirectTo(route("ampayersIndex"))
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
