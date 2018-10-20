<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_driver = new Role();
        $role_driver->name = 'driver';
        $role_driver->description = 'A Driver User';
        $role_driver->save();

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'A Manager User';
        $role_manager->save();


        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'System Administrator';
        $role_admin->save();

        $role_specialist = new Role();
        $role_specialist->name = 'especialist';
        $role_specialist->description = 'Especialist';
        $role_specialist->save();

        $role_client = new Role();
        $role_client->name = 'client';
        $role_client->description = 'Client';
        $role_client->save();
    }

}
