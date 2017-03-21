<?php

use Illuminate\Database\Seeder;
use Biblios\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'user1',
        	'email' => 'user1@gmail.com',
        	'password' => bcrypt('password1'),
        	'admin' => false
        ]);
        User::create([
        	'name' => 'user2',
        	'email' => 'user2@gmail.com',
        	'password' => bcrypt('password2'),
        	'admin' => false
        ]);
        User::create([
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('passwordadmin'),
        	'admin' => true
        ]);
    }
}
