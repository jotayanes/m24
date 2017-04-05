<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mudanzas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mudanzas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['mud_tipo_rec_id', 'mud_titulo','mud_habitaciones','mud_pisos','mud_origen_rec_id','mud_destino_rec_id';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['mud_tipo_rec_id','mud_origen_rec_id','mud_destino_rec_id'];
}
