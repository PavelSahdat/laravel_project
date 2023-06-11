<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = \App\Models\Role::create([
            'role'=> 'admin',
            'description'=> 'This is the admin user, can access everything!',
        ]);

        $trainerRole = \App\Models\Role::create([
            'role'=> 'trainer',
            'description'=> '',
        ]);

        $gymManager = \App\Models\User::create([
            'name'=> 'Gym Manager',
            'email'=> 'admin@gym.com',
            'password'=> bcrypt('Admin@123'),
        ]);

        $gymManager->roles()->attach($trainerRole);
    }
}
