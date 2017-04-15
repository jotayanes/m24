<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recursiva extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recursiva';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'rec_id';    
    protected $fillable = ['rec_detalle', 'rec_nemonico','rec_padre'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['per_usu_id'];
}
