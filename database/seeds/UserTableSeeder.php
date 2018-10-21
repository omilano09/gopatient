<?php

use Illuminate\Database\Seeder;
use App\Users;
use App\Roles;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_driver = Roles::where('name', 'driver')->first();
        $role_manager  = Roles::where('name', 'manager')->first();
        $role_client = Roles::where('name', 'client')->first();

        $driver = new Users();
        $driver->name = 'Driver Name';
        $driver->email = 'driver@ag.com';
        $driver->password = bcrypt('123456');
        $driver->save();
        $driver->roles()->attach($role_driver);

        $manager = new Users();
        $manager->name = 'Manager Name';
        $manager->email = 'manager@ag.com';
        $manager->password = bcrypt('123456');
        $manager->save();
        $manager->roles()->attach($role_manager);

        $client = new Users();
        $client->name = 'Cliente Perez';
        $client->email = 'client@ag.com';
        $client->password = bcrypt('123456');
        $client->save();
        $client->roles()->attach($role_client);

        $specialist = new Users();
        $specialist->name = 'Maria Especialista';
        $specialist->email = 'specialist@ag.com';
        $specialist->password = bcrypt('123456');
        $specialist->save();
        $specialist->roles()->attach($role_client);

    }
}
