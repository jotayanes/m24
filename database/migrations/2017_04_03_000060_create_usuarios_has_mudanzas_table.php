<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosHasMudanzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_has_mudanzas', function (Blueprint $table) {
            $table->increments('uhm_id');           
            $table->integer('uhm_usu_id')->unsigned();
            $table->foreign('uhm_usu_id')->references('id')->on('users');   
            $table->integer('uhm_mud_id')->unsigned();
            $table->foreign('uhm_mud_id')->references('mud_id')->on('mudanzas');
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
        Schema::drop('usuarios_has_mudanzas');
    }
}
