<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisteredUserController;


use App\Http\Controllers\Controller;


use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //Para que funcione la Validacion de Hash
use Illuminate\Http\RedirectResponse; //Para la funcion withErrors()
use Illuminate\Support\Facades\Validator;


/**
 * Summary of UserController
 */
class UserControlador extends Controller {
    //
   /** 
    * Show the form for creating a new resource. 
    * @return \Illuminate\Http\Response 
    
    */
    public function create(Request $request){
       
        $j = User::orderBy('id', 'DESC')->first();
        $lastId = $j->id + 1;
        return response(view('sesion.registrologin', compact('lastId')));
    }
    /**
     * Summary of store
     * @param Request $request
     * @return \Illuminate\Http\ResponseTrait
     */
    public function store(Request $request) {
        $a = new User();
        $a -> name = $request -> name;
        $a ->email = $request -> email;
        $a -> password = $request -> password;
       $a -> save();
        return response()->redirectTo(route("RegistroCreate"))
            ->with(["success" => "Actualizado exitosamente"]);
    }

    /*public function validarUsuario(Request $request){
        $usuario = Users::WHERE('email', $request->email)->first();
        
        if ($usuario && Hash::check($request->password, $usuario->password)) {
            // Usuario y contraseña válidos
            return view('inicio');
        } else {
            // Usuario o contraseña inválidos
            return view('login')->with(['mensaje' => 'Usuario o contraseña inválidos']);
        }
    }*/
    

}
