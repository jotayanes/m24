<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosHasInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_has_inmuebles', function (Blueprint $table) {
            $table->increments('uhi_id');           
            $table->integer('uhi_usu_id')->unsigned();
            $table->foreign('uhi_usu_id')->references('id')->on('users');   
            $table->integer('uhi_inm_id')->unsigned();
            $table->foreign('uhi_inm_id')->references('inm_id')->on('inmuebles');
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
        Schema::drop('usuarios_has_inmuebles');
    }
}
