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
            'company_name'  => 'Salon & Day Spa',
            'email'         => 'info@salonanspa.com',
            'address'       => '102 Machhigalli, Bagbazar, Kathmandu',
            'facebook_link' => '',
            'logo'          => '',
        ]);
    }
}