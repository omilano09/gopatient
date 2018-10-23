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
            $table->increments('id');
            $table->string('reference_number');
            $table->date('date');
            $table->string('notes');
            $table->integer('aditional_passenger_count');

            //foreign keys
            $table->unsignedInteger('trip_statuses_id');
            $table->foreign('trip_statuses_id')->references('id')->on('trip_statuses');

            $table->unsignedInteger('drivers_id');
            $table->foreign('drivers_id')->references('id')->on('drivers');

            $table->unsignedInteger('patients_id');
            $table->foreign('patients_id')->references('id')->on('patients');

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
        Schema::dropIfExists('trips');
    }
}
