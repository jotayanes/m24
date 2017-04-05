<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursivaHasInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursiva_has_inmuebles', function (Blueprint $table) {
            $table->increments('rhi_id');           
            $table->integer('rhi_rec_id')->unsigned();
            $table->foreign('rhi_rec_id')->references('rec_id')->on('recursiva');   
            $table->integer('rhi_inm_id')->unsigned();
            $table->foreign('rhi_inm_id')->references('inm_id')->on('inmuebles');
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
        Schema::drop('recursiva_has_inmuebles');
    }
}
