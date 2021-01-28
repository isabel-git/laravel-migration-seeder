<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brend;
use Faker\Generator as Faker;

$factory->define(Brend::class, function (Faker $faker) {
    return [

        'name'              =>  ($faker -> company()),
        'logo'              =>  ($faker -> url()),
        'locations_number'  =>  (rand(1, 90)),
    ];
});
