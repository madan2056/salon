<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@creativelink.com',
            'image' => '',
            'status' => 1,
            'password' => bcrypt('admin@pwd16'),
        ]);


        DB::table('users')->insert([
            'name' => 'sagar',
            'email' => 'sagar@gmail.com',
            'image' => '',
            'status' => 1,
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'yonjan',
            'email' => 'yonjan@gmail.com',
            'image' => '',
            'status' => 1,
            'password' => bcrypt('admin'),
        ]);
    }
}
