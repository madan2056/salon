<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(SiteConfigTableSeeder::class);
         $this->call(SiteProfileTableSeeder::class);
         $this->call(PageTableSeeder::class);

    }
}
