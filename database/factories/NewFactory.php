<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\News::class, function (Faker $faker) {
    $name = $faker->words(rand(1, 5), true);
    return [
        'title_tr' => $name,
        'title_eng'=> $name,
        'description_tr'=>$faker->sentence,
        'description_eng' =>$faker->sentence,
        'photo_path'=>$faker->image('public/storage/news',500,350, null, false)

    ];
});
