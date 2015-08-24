<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItinerary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerary', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('travel')->unsigned();
            $table->foreign('travel')->references('id')->on('travel');

            $table->integer('activity')->unsigned();
            $table->foreign('activity')->references('id')->on('activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('itinerary');
    }
}
