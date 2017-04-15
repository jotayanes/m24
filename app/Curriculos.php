<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curriculos';

    

    protected $primaryKey = 'cur_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cur_direccion', 'cur_telfijo','cur_fecha_nac','cur_parroquia_rec_id', 'cur_sexo_rec_id','cur_nacionalidad_rec_id','cur_usu_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}









