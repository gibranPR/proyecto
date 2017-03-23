<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Carrera;

class miControlador extends Controller
{
    public function carrerasMenu(){
    	$carreras=Carrera::all();
    }
}
