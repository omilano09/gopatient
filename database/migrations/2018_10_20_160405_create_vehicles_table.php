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
            $table->increments('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->integer('seats');

            //foreign keys
            $table->unsignedInteger('vehicle_types_id');
            $table->foreign('vehicle_types_id')->references('id')->on('vehicle_types');

            $table->unsignedInteger('drivers_id');
            $table->foreign('drivers_id')->references('id')->on('drivers');

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
        Schema::dropIfExists('vehicles');
    }
}
