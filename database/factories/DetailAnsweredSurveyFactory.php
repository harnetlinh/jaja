<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Laravue\Models\DetailAnsweredSurvey;
use Faker\Generator as Faker;

$factory->define(DetailAnsweredSurvey::class, function (Faker $faker) {
    return [
        'answered_survey_id' => App\Laravue\Models\AnsweredSurvey::all()->random()->id,
        'option_id' => App\Laravue\Models\Option::all()->random()->id,
        'times' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
