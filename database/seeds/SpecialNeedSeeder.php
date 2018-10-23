<?php

use Illuminate\Database\Seeder;
use App\SpecialNeed;

class SpecialNeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $need = new SpecialNeed();
        $need->name = 'Wheelchair';
        $need->save();

        $need = new SpecialNeed();
        $need->name = 'Walker';
        $need->save();

        $need = new SpecialNeed();
        $need->name = 'Special Assistance';
        $need->save();

        $need = new SpecialNeed();
        $need->name = 'Pharmacy Stop';
        $need->save();

        $need = new SpecialNeed();
        $need->name = 'Cane';
        $need->save();

        $need = new SpecialNeed();
        $need->name = 'High Risk';
        $need->save();
    }
}
