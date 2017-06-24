<?php

use Illuminate\Database\Seeder;

class SiteProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_profile')->insert([
            'company_name'  => 'Creative Link Pvt. Ltd.',
            'email'         => 'info@creativelinknepal.com',
            'address'       => '102 Machhigalli, Bagbazar, Kathmandu',
            'facebook_link' => 'https://www.facebook.com/creativelinknepal/',
            'logo'          => 'Creative-Logo.png',
        ]);
    }
}