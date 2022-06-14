<?php

use App\Models\User;
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
        User::create([
            'name'=>'manager',
            'role'=>'manager',
            'email'=>'manager@gmail.com',
            'password'=>bcrypt('123456')
        ]);


        User::create([
            'name'=>'desk_officer',
            'role'=>'desk_officer',
            'email'=>'desk_officer@gmail.com',
            'password'=>bcrypt('123456')
        ]);

        User::create([
            'name'=>'accountant',
            'role'=>'accountant',
            'email'=>'accountant@gmail.com',
            'password'=>bcrypt('123456')
        ]);
    }
}