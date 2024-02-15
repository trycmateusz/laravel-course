<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Faker\Factory;

class ShowAddress extends Controller {
    public function __invoke () {
        $faker = Factory::create();
        $address = [
            'postalCode' => $faker->postcode,
            'street' => $faker->streetName,
            'houseNumber' => $faker->numberBetween(1, 69),
            'flatNumber' => $faker->numberBetween(1, 69)
        ];
        return view('user.address', [
            'address' => $address
        ]);
    }
}
