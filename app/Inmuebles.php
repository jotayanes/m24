<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmuebles extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inmuebles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['inm_banos', 'inm_habitaciones','inm_banoservicio','inm_estacionamiento','inm_habservicio','inm_antiguedad','inm_mterreno','inm_mconstruccion','inm_lineas','inm_areasocial','inm_parroquia_rec_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['inm_parroquia_rec_id'];
}
