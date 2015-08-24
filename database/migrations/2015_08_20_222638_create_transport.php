<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->integer('travel')->unsigned();
            $table->foreign('travel')->references('id')->on('travel');

            $table->integer('bus')->unsigned();
            $table->foreign('bus')->references('id')->on('bus');

            $table->integer('guide')->unsigned();
            $table->foreign('guide')->references('id')->on('guide');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transport');
    }
}
