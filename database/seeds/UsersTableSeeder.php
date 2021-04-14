<?php

use App\User;
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
        //
        User::create([
            'name' => 'Manuel',
            'email' => 'manuel2@gmail.com',
            'password' => bcrypt('123456')
        ]);
        
    }
}
