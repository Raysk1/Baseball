<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\User;

use Illuminate\Http\Request;

/**
 * Summary of UserController
 */
class UserController extends Controller
{
    //
 
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
        $a -> nombre = $request -> nombre;
        $a ->email = $request -> email;
        $a -> password = $request -> password;
       $a -> save();
        return response()->redirectTo(route("RegistroCreate"))
            ->with(["success" => "Actulizado exitosamente"])
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate');

    }
}
//asi quedo ya me enfade