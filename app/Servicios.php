<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'ser_id';    
    protected $fillable = ['ser_servicio_rec_id', 'ser_tipo_rec_id','ser_titulo','ser_descripcion','ser_info_adicional','ser_parroquia_rec_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['ser_servicio_rec_id','ser_tipo_rec_id','ser_parroquia_rec_id'];
}
