<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$orderStatuses = ['ACTIVE', 'PAUSED', 'DELETED'];

$factory->define(Order::class, function (Faker $faker) use ($orderStatuses) {
     return [
            'status' => $orderStatuses[array_rand($orderStatuses)],
            'total' => $faker->randomNumber(8)
    ];
});