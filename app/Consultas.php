<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Consultas extends Model
{
    	protected function consulta($consulta,$valor){

		switch ($consulta) {
				
			case 'cursosCategoria':
				
        		$cursosCategoria = DB::table('tbl_cursos')
                ->select('str_curso','str_titulocorto')
                ->where('str_categoria', '=', $valor)
                ->orderBy('str_categoria','asc')              
                ->get();  

				return $cursosCategoria;

			break;

			case 'categorias':
				
                $categorias = DB::table('tbl_cursos')
                ->select('str_categoria')
                ->groupBy('str_categoria')
                ->orderBy('str_categoria','asc')              
                ->get();

				return $categorias;

			break;			
		}
	}	
}
