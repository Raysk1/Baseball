<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function store(Request $request) {
       /* $a = new Users();
        $a->id = $request->id;
        $a->nombre = $request->nombre;
        $a->email = $request->email;
       // $a->password =$request ->password;
      */

    }
    public function create(Request $request){
        //$t = Users::;
        //$lastId = $t->id + 1;
        return response(view('sesion.registrologin', compact('id')));
    }
}
//asi quedo ya me enfade