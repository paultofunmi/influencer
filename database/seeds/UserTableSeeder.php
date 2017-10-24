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
        //retrieves roles: user and admin 
        $user_role = Role::where('name', 'user')->first();
        $admin_role = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Ordinary User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($user_role);


        $user = new User();
        $user->name = 'Admin User';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($admin_role);
    }
}
