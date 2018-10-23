<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names');
            $table->string('last_names');
            $table->string('dni');
            $table->string('phone')->default(null);            

            //esto verificar
            $table->string('city_id');
            $table->string('driver_id');
            $table->text('address');
            $table->string('zip_code');

            //foreign keys
            //fixme quitar nullable, debe lllegar de la pantalla
            $table->unsignedInteger('addresses_id')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
