<?php

namespace App\Http\Controllers;
use App\Models\Ampayer;
use Illuminate\Http\Request;

class AmpayerControlador extends Controller
{
    public function create(Request $request){
        $a = new Ampayer();
        $a -> nombre = $request -> nombre;
        $a ->apellidos = $request -> apellidos;
        $a -> fechaNacimiento = $request -> fechaNacimiento;
        $a -> curp = $request -> curp;
        $a -> abreviacion = $request -> abreviacion;
        $a -> activo = $request -> activo;
        $a -> save();
        
    }
}
