<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicles_id');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->integer('seats');
            $table->timestamps();

            $table->unsignedInteger('vehicle_types_id');
            $table->foreign('vehicle_types_id')->references('vehicle_types_id')->on('vehicle_types');

            $table->unsignedInteger('drivers_id');
            $table->foreign('drivers_id')->references('drivers_id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
