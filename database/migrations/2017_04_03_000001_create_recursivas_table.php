<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursiva', function (Blueprint $table) {
            $table->increments('rec_id');
            $table->string('rec_detalle',255);
            $table->string('rec_nemonico',5);
            $table->integer('rec_padre');
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
        Schema::drop('recursiva');
    }
}
