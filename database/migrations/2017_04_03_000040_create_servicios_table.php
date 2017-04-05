<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('ser_id');
            $table->integer('ser_servicio_rec_id')->unsigned();
            $table->foreign('ser_servicio_rec_id')->references('rec_id')->on('recursiva');  
            $table->integer('ser_tipo_rec_id')->unsigned();
            $table->foreign('ser_tipo_rec_id')->references('rec_id')->on('recursiva');             
            $table->string('ser_detalle',50);
            $table->text('ser_descripcion');
            $table->string('ser_info_adicional',45);
            $table->integer('ser_parroquia_rec_id')->unsigned();
            $table->foreign('ser_parroquia_rec_id')->references('rec_id')->on('recursiva');
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
        Schema::drop('servicios');
    }
}
