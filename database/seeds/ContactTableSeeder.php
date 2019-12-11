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
            'address' =>'Adres: Kızılırmak Mah. Ufuk Üniv. Cad. Farilya İş Merkezi No:8 Kat:2 Daire:7 Çankaya / ANKARA',
            'facebook' =>'halilomergurgan',
            'twitter' =>'halilomergurgan',
            'linkedin' => 'halilomergurkan',
            'instagram' =>'halilomergurgan',
            'latitude' => '39.9093815',
            'longitude' =>'32.8103307',
        ]);
    }
}
