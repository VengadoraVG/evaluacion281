<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OriginDestinationLatlng extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travel', function (Blueprint $table) {
            $table->text('origin_lat_lng');
            $table->text('destination_lat_lng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travel', function (Blueprint $table) {
            $table->dropColumn(['origin_lat_lng', 'destination_lat_lng']);
        });
    }
}
