<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMudanzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mudanzas', function (Blueprint $table) {
            $table->increments('mud_id');
            $table->integer('mud_tipo_rec_id')->unsigned();
            $table->foreign('mud_tipo_rec_id')->references('rec_id')->on('recursiva');  
            $table->string('mud_titulo',50);
            $table->integer('mud_habitaciones');
            $table->integer('mud_pisos');
            $table->integer('mud_origen_rec_id')->unsigned();
            $table->foreign('mud_origen_rec_id')->references('rec_id')->on('recursiva');  
            $table->integer('mud_destino_rec_id')->unsigned();
            $table->foreign('mud_destino_rec_id')->references('rec_id')->on('recursiva');
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
        Schema::drop('mudanzas');
    }
}
