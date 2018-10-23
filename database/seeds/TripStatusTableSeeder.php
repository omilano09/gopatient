<?php

use Illuminate\Database\Seeder;
use App\TripStatus;

class TripStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = new TripStatus();
        $status->name = 'On Time';
        $status->save();

        $status = new TripStatus();
        $status->name = 'Canceled';
        $status->save();

        $status = new TripStatus();
        $status->name = 'Active';
        $status->save();
    }
}
