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
            'email' => 'admin@salonanspa.com',
            'image' => '',
            'status' => 1,
            'password' => bcrypt('admin@pwd16'),
        ]);
    }
}
