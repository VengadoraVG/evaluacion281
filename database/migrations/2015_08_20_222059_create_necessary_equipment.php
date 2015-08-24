<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNecessaryEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necessary_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->integer('item')->unsigned();
            $table->foreign('item')->references('id')->on('item');

            $table->integer('travel')->unsigned();
            $table->foreign('travel')->references('id')->on('travel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('necessary_equipment');
    }
}
