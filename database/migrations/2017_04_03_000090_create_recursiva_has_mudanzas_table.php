<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursivaHasMudanzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursiva_has_mudanzas', function (Blueprint $table) {
            $table->increments('rhm_id');           
            $table->integer('rhm_rec_id')->unsigned();
            $table->foreign('rhm_rec_id')->references('rec_id')->on('recursiva');   
            $table->integer('rhm_mud_id')->unsigned();
            $table->foreign('rhm_mud_id')->references('mud_id')->on('mudanzas');
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
        Schema::drop('recursiva_has_mudanzas');
    }
}
