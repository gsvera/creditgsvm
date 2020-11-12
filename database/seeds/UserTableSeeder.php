<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('rol','user')->first();
        $role_admin = Role::where('rol','admin')->first();

        $user = new User();
        $user->name = "Toño";
        $user->rol = "User";
        $user->email = "pelado@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = "Guillermo";
        $user->rol = "Admin";
        $user->email = "memo@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
