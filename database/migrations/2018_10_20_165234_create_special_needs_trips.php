<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialNeedsTrips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_needs_trips', function (Blueprint $table) {
            $table->increments('special_needs_trips_id');

            $table->unsignedInteger('special_needs_id');
            $table->foreign('special_needs_id')->references('special_needs_id')->on('special_needs');

            $table->unsignedInteger('trips_id');
            $table->foreign('trips_id')->references('trips_id')->on('trips');

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
        Schema::dropIfExists('special_needs_trips');
    }
}
