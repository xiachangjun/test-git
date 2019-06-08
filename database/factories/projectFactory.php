<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/



//$factory->define(\App\project::class, function (Faker $faker) {
//    $user_ids=User::pluck('id')->toArray();
//    return [
//        'title' => $faker->sentence,
//        'body' => $faker->paragraph,
//        'user_id'=>$faker->randomElement($user_ids),
//        'last_user_id'=>$faker->randomElement($user_ids),
//    ];
//});