<?php

use Illuminate\Database\Seeder;
use App\User;
//Seeder class is used to export data into database
class UsersTablesSeeder extends Seeder
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
            'name'=>'Vaibhavi More',
            'email'=>'vaibmore26@gmail.com',
            //convert simple string to hash string
            'password'=>Hash::make('password'),
            'remember_token'=>str_random(10),
        ]);
    }
}
