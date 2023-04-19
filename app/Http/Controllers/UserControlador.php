<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Users;

use Illuminate\Http\Request;

/**
 * Summary of UserController
 */
class UserControlador extends Controller
{
    //
   /** 
    * Show the form for creating a new resource. 
    * @return \Illuminate\Http\Response 
    
    */
    public function create(Request $request){
       
        $j = Users::orderBy('id', 'DESC')->first();
        $lastId = $j->id + 1;
        return response(view('sesion.registrologin', compact('lastId')));
    }
    /**
     * Summary of store
     * @param Request $request
     * @return \Illuminate\Http\ResponseTrait
     */
    public function store(Request $request) {
        $a = new Users();
        $a -> name = $request -> name;
        $a ->email = $request -> email;
        $a -> password = $request -> password;
       $a -> save();
        return response()->redirectTo(route("RegistroCreate"))
            ->with(["success" => "Actualizado exitosamente"]);

    }
}
