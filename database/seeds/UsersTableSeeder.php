<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_driver = Role::where(‘name’, ‘driver’)->first();
        $role_manager  = Role::where(‘name’, ‘manager’)->first();

        $driver = new User();
        $driver->name = ‘Driver Name’;
        $driver->email = ‘driver@ag.com’;
        $driver->password = bcrypt(‘123456’);
        $driver->save();
        $driver->roles()->attach($role_driver);

        $manager = new User();
        $manager->name = ‘Manager Name’;
        $manager->email = ‘manager@ag.com’;
        $manager->password = bcrypt(‘123456’);
        $manager->save();
        $manager->roles()->attach($role_manager);

        $client = new User();
        $client->name = ‘Cliente Perez’;
        $client->email = ‘client@ag.com’;
        $client->password = bcrypt(‘123456’);
        $client->save();
        $client->roles()->attach($role_client);

        $specialist = new User();
        $specialist->name = ‘Maria Especialista’;
        $specialist->email = ‘specialist@ag.com’;
        $specialist->password = bcrypt(‘123456’);
        $specialist->save();
        $specialist->roles()->attach($role_client);

    }
}
