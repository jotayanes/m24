<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recursiva_has_Inmuebles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recursiva_has_inmuebles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['rhi_rec_id', 'rhi_inm_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['usu_tipo_rec_id', 'usu_status_rec_id'];
}
