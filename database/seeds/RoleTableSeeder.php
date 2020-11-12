<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->rol = 'admin';
        $role->name ="Administrador";
        $role->description = "Administrador";
        $role->save();

        $role = new Role();
        $role->rol = 'user';
        $role->name ="Usuario";
        $role->description = "Usuario";
        $role->save();
    }
}
