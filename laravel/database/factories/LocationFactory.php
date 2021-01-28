<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        
        'name'      =>  $faker -> city(),
        'address'   =>  $faker -> address(),
        'employees_number'   =>  rand(1, 100),
    ];
});
