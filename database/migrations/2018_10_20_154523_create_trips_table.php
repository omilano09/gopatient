<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('trips_id');
            $table->string('reference_number');
            $table->date('date');
            $table->string('notes');
            $table->integer('aditional_passenger_count');
            $table->timestamps();

            $table->unsignedInteger('trip_statuses_id');
            $table->foreign('trip_statuses_id')->references('trip_statuses_id')->on('trip_statuses');

            $table->unsignedInteger('drivers_id');
            $table->foreign('drivers_id')->references('drivers_id')->on('drivers');

            $table->unsignedInteger('patients_id');
            $table->foreign('patients_id')->references('patients_id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
