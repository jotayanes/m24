<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('inm_id');           
            $table->integer('inm_banos');
            $table->integer('inm_habitaciones');
            $table->integer('inm_banoservicio');
            $table->integer('inm_estacionamiento');
            $table->integer('inm_habservicio');
            $table->integer('inm_antiguedad');
            $table->integer('inm_mterreno');
            $table->integer('inm_mconstruccion');
            $table->integer('inm_lineas');
            $table->integer('inm_areasocial');
            $table->integer('inm_parroquia_rec_id')->unsigned();
            $table->foreign('inm_parroquia_rec_id')->references('rec_id')->on('recursiva');
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inmuebles');
    }
}
