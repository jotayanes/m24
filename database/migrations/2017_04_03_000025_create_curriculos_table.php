<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->increments('cur_id');
            $table->string('cur_direccion');
            $table->string('cur_telfijo');
            $table->date('cur_fecha_nac');
            $table->integer('cur_parroquia_rec_id')->unsigned();
            $table->foreign('cur_parroquia_rec_id')->references('rec_id')->on('recursiva');
            $table->integer('cur_sexo_rec_id')->unsigned();
            $table->foreign('cur_sexo_rec_id')->references('rec_id')->on('recursiva'); 
            $table->integer('cur_nacionalidad_rec_id')->unsigned();
            $table->foreign('cur_nacionalidad_rec_id')->references('rec_id')->on('recursiva'); 
            $table->integer('cur_usu_id')->unsigned();
            $table->foreign('cur_usu_id')->references('id')->on('users');                                        
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
        Schema::drop('curriculos');
    }
}
