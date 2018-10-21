<?php

use Illuminate\Database\Seeder;
use App\VehicleType;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = new VehicleType();
        $type->name = 'Sedan';
        $type->save();

        $type = new VehicleType();
        $type->name = 'Van';
        $type->save();
    }
}
