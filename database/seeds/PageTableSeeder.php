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
            'rank'      => 1,
        ]);

        DB::table('page')->insert([
            'title1'    => 'Our Service',
            'page_type' => 'our_service',
            'status'    => 1,
            'rank'      => 2,
        ]);

        DB::table('page')->insert([
            'title1'    => 'Product',
            'page_type' => 'product_list',
            'status'    => 1,
            'rank'      => 3,
        ]);

        DB::table('page')->insert([
            'title1'    => 'Request Quotation',
            'page_type' => 'request_quotation',
            'status'    => 1,
            'rank'      => 3,
        ]);

        DB::table('page')->insert([
            'title1'    => 'Inqury Form',
            'page_type' => 'inquiry_form',
            'status'    => 1,
            'rank'      => 3,
        ]);
    }
}
