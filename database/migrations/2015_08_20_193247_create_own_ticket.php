<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('own_ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->tinyInteger('rating')->unsigned();

            $table->integer('owner')->unsigned();
            $table->foreign('owner')->references('id')->on('tourist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('own_ticket');
    }
}
