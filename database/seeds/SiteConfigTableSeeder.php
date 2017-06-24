<?php

use Illuminate\Database\Seeder;

class SiteConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('site_config')->insert([
            'key'   => 'first_contact_number',
            'value' => '4216913',
        ]);

        DB::table('site_config')->insert([
            'key'   => 'second_contact_number',
            'value' => '4247765',
        ]);

        DB::table('site_config')->insert([
            'key'   => 'welcome_title',
            'value' => 'Welcome to Creative Link Pvt. Ltd.',
        ]);

        DB::table('site_config')->insert([
            'key'   => 'welcome_description',
            'value' => 'It is our great pleasure to introduce; Creative Link Pvt. Ltd. has been established primarily to serve the NATION in the field of Graphic Design, Press and a Stamp Bank.
It has been providing its services at affordable price in timely manner. Moreover, quality is the key factor it provides than the competitor organizations so that it has gained popularity since the period of its establishment.',
        ]);

        DB::table('site_config')->insert([
            'key'   => 'site_title',
            'value' => 'Creative Link : Graphic Design, Press &amp; Stamp Bank'
        ]);

        DB::table('site_config')->insert([
            'key'   => 'company_caption',
            'value' => 'GRAPHIC DESIGN, PRESS & STAMP BANK'
        ]);


    }
}
