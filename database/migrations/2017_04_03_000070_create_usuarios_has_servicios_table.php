<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosHasServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_has_servicios', function (Blueprint $table) {
            $table->increments('uhs_id');           
            $table->integer('uhs_usu_id')->unsigned();
            $table->foreign('uhs_usu_id')->references('id')->on('users');   
            $table->integer('uhs_ser_id')->unsigned();
            $table->foreign('uhs_ser_id')->references('ser_id')->on('servicios');
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
        Schema::drop('usuarios_has_servicios');
    }
}
