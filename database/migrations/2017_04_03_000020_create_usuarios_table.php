<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',255);
            $table->string('password',255);
            $table->integer('usu_tipo_rec_id')->unsigned();
            $table->foreign('usu_tipo_rec_id')->references('rec_id')->on('recursiva');
            $table->integer('usu_status_rec_id')->unsigned();
            $table->foreign('usu_status_rec_id')->references('rec_id')->on('recursiva');
            $table->integer('usu_per_id')->unsigned();
            $table->foreign('usu_per_id')->references('per_id')->on('personas');
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
        Schema::drop('users');
    }
}
