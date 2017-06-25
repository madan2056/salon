<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page')->insert([
            'title1'    => 'Home',
            'page_type' => 'home',
            'status'    => 1,
            'show_in_menu' => 1,
            'rank'      => 1,
        ]);

        DB::table('page')->insert([
            'title1'    => 'About Us',
            'lsug'    =>  str_slug('About Us'),
            'page_type' => 'page',
            'status'    => 1,
            'show_in_menu' => 1,
            'rank'      => 2,
        ]);

        DB::table('page')->insert([
            'title1'    => 'What is and Why - COSMETIC TATTOO?',
            'page_type' => 'what-is-and-why-cosmetic-tattoo',
            'status'    => 1,
            'show_in_menu' => 0,
            'rank'      => 25,
        ]);

    }
}
