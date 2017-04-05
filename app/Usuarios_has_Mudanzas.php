<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios_has_Mudanzas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios_has_mudanzas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['uhm_usu_id', 'uhm_mud_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['usu_tipo_rec_id', 'usu_status_rec_id'];
}
