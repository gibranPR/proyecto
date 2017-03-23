<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Carrera;

class miControlador extends Controller
{
    public function mat($id){
    	$mat = DB::table('carrera_mat')
    	->join('materias', 'carrera_mat.id_materia','=','materias.id')
    	->join('carreras', 'carrera_mat.id_carrera','=','carreras.id')
    	->select('carrera_mat.id_materia as id_materia', 'carrera_mat.id_carrera as id_carrera' ,'materias.nombre as nombre_mat', 'carreras.nombre as nombre_carrera')
    	->where('carrera_mat.id_carrera',$id)
    	->get();
    	return view('materias', compact('mat'));
    }
}
