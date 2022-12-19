<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //Admin 

        DB::table('users')->insert([
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
            ],

            //vendor

            [
                'name' => 'Rana Vendor',
                'username' => 'vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'vendor',
                'status' => 'active',
            ],

            //admin

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
            ],

        ]);
    }
}
