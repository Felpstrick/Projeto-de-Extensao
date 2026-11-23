<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastroMaterialController extends Controller
{
    //
    public function formCadastroMaterial (){
        return view('auth.cadastroMaterial');
    }
}
