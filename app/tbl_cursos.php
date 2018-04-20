<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_cursos extends Model
{
    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_cursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['str_curso', 'str_categoria', 'str_clase', 'str_imagen'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['str_curso','str_categoria'];

}
