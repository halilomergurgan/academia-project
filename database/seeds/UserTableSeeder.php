<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name' => 'Güven SAYILGAN',
            'email' =>'sayilgan@ankara.edu.tr',
            'password' => bcrypt('halil2019'),
        ]);
    }
}
