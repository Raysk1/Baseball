<?php

namespace App\Http\Controllers;

use App\Models\Parque;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class ParqueControlador extends Controller
{
    //

    public function index() {
        $parques = Parque::all();
        return response(view("parques.index", compact("parques")));
    }

    public function store(Request $request)
    {
        $p = new Parque();
        $p->idCampo = $request->idCampo;
        $p->descripcion = $request->descripcion;
        $p-> save();

        return response()->redirectTo(route("parquesIndex"))
            ->with(["success" => "Creado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');

    }

    public function create(){
        $p = Parque::orderBy('idCampo', 'DESC')->first();
        if ($p == null) {
            $lastId = 1;
        } else {
            $lastId = $p->idCampo + 1;
        }
        return response(view('parques.create', compact('lastId')));
    }

    public function update(Request $request) {
        $parque = Parque::find($request->idCampo);
        $parque->idCampo = $request->idCampo;
        $parque->descripcion = $request->descripcion;
        $parque->save();
        return response()->redirectTo(route("parquesIndex"))
            ->with(["success" => "Actualizado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');
    }

    public function edit($id){
        $parque = Parque::find($id);
        return response(view("parques.edit", compact('parque')));
    }

    

}
