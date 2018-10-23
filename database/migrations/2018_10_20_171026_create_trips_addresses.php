<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->dateTime('pickup_time');
            $table->dateTime('app_time');
            $table->boolean('app_call');

            //foreign keys
            $table->unsignedInteger('trips_id');
            $table->foreign('trips_id')->references('id')->on('trips');

            $table->unsignedInteger('addresses_id');
            $table->foreign('addresses_id')->references('id')->on('addresses');

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
        Schema::dropIfExists('trips_addresses');
    }
}
