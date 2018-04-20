<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_equipoilernus extends Model
{
    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_equipoilernus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['str_nombre', 'str_sexo', 'str_cargo', 'str_imagen','str_cv','blb_img'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['str_curso','str_categoria'];

}
