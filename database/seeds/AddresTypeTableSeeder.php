<?php

use Illuminate\Database\Seeder;
use App\AddresType;

class AddresTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = new AddresType();
        $type->name = 'Home';
        $type->save();

        $type = new AddresType();
        $type->name = 'Hospital';
        $type->save();
    }
}
