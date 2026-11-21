<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class materiaisController extends Controller
{
    //
    public function materiais (){
        $materiais = Material::ativos()->get();
        return view('auth.materiais', compact('materiais'));
    }
}


