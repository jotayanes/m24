<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personas';

    

    protected $primaryKey = 'per_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['per_nombre', 'per_apellido','per_ci','per_telefono'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   
}
