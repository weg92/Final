<?php
/**
 * Created by PhpStorm.
 * User: Kyle
 * Date: 5/4/2019
 * Time: 8:04 PM
 */

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {

    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
