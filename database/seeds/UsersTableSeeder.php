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
        $user= \App\User::create([
            'name'=>'admin',
            'email'=>'nour@gmail.com',
            'password'=>bcrypt('secret'),
            'name'=>'nour',


        ]);
        $user->attachRole('super_admin');

    }
}
