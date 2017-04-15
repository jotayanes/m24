<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios_has_Servicios extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios_has_servicios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'uhs_id';    
    protected $fillable = ['uhs_usu_id', 'uhs_ser_id','uhs_tipo_rec_id','uhs_status_rec_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['usu_tipo_rec_id', 'usu_status_rec_id'];
}
