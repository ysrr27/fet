<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Consultas;

class Menu extends Model
{
    protected function opcionesMenu(){

        //son usadas en el menu:
        $tiposCursos = Consultas::consulta('categorias','');
        $cursosNegocios = Consultas::consulta('cursosCategoria','Negocios');
        $cursosDesarrollo = Consultas::consulta('cursosCategoria','Desarrollo');
        $cursosTecnologia = Consultas::consulta('cursosCategoria','Tecnología');
        $cursosProductividad = Consultas::consulta('cursosCategoria','Productividad');
        \View::share(compact('tiposCursos','cursosNegocios','cursosDesarrollo','cursosTecnologia','cursosProductividad'));   
    }
}