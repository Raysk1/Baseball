<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Http\Controllers\Controller;

class JugadorControlador extends Controller {

    public function vistaJugadoresTabla() {

    }


    /** 
     * Display a listing of the resource. 
     * @return \Illuminate\Http\Response 
     */
    public function index() {

        //  
        $datos = Jugador::all(["idAfiliacion", "nombre", "apellidos", "posicion", "status", "rama"]);
        return response(view("Jugadores.index", compact("datos")));

    }
    /** 
    * Show the form for creating a new resource. 
    * @return \Illuminate\Http\Response 
    
    */
    public function create() {

        //  
        $year = date("Y"); //Obtiene el año actual en formato de 4 dígitos
        $yearId = str_split($year, 2)[1] . "0000";
        $yearId = intval($yearId);
        $lastUser = Jugador::orderBy('idAfiliacion', 'DESC')->first();
        $lastUserId = $lastUser->idAfiliacion;
        $id = 0;
        if ($yearId > $lastUserId) {
            $id = $yearId;
        } else {
            $id = $lastUserId + 1;
        }

        $lastId = $id;


        return response(view('Jugadores.create', compact('lastId')));

    }
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request 
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request) {

        $j = new Jugador();
        $j->idAfiliacion = $request->idAfiliacion;
        $j->nombre = $request->nombre;
        $j->apellidos = $request->apellidos;
        $j->fechaNacimiento = $request->fechaNacimiento;
        $j->curp = $request->curp;
        $j->posicion = $request->posicion;
        $j->golpea = $request->golpea;
        $j->tira = $request->tira;
        $j->pagina = $request->pagina;
        $j->abreviacion = $request->abreviacion;
        $j->status = $request->status;
        $j->rama = $request->rama;
        $j->save();
        return response() ->redirectTo(route("jugadoresIndex"))
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

        $datos = Jugador::find($id);
        return response(view("Jugadores.edit", compact("datos")));

    }
    /** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request) {

        //  
        $j = Jugador::find($request->idAfiliacion);
        $j->nombre = $request->nombre;
        $j->apellidos = $request->apellidos;
        $j->fechaNacimiento = $request->fechaNacimiento;
        $j->curp = $request->curp;
        $j->posicion = $request->posicion;
        $j->golpea = $request->golpea;
        $j->tira = $request->tira;
        $j->pagina = $request->pagina;
        $j->abreviacion = $request->abreviacion;
        $j->status = $request->status;
        $j->rama = $request->rama;
        $j->save();
        return response() ->redirectTo(route("jugadoresIndex"))
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