<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'phone' => '+905395797956',
            'email' =>'halilomergurgan@gmail.com',
            'address' =>'Üniversiteler, İkizler Binası, ODTÜ Teknokent D:Z-14, 06800 Çankaya/Ankara',
            'facebook' =>'halilomergurgan',
            'twitter' =>'halilomergurgan',
            'linkedin' => 'halilomergurkan',
            'instagram' =>'halilomergurgan',
            'latitude' => '39.8921689',
            'longitude' =>'32.7609139',
        ]);
    }
}
