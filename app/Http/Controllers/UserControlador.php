<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
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
    public function create(Request $request)
    {
        $j = User::orderBy('idUser', 'DESC')->first();
        $lastId = $j->idUser + 1;
        return response(view('sesion.registrologin', compact('lastId')));
    }
    /**
     * Summary of store
     * @param Request $request
     * @return \Illuminate\Http\ResponseTrait
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->redirectTo(route("RegistroCreate"))
            ->with(["success" => "Actualizado exitosamente"]);
    }

}
