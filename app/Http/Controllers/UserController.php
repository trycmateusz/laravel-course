<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function list () {
        $faker = Factory::create();
        $users = [];
        $count = $faker->numberBetween(3, 15);
        for ($i = 0; $i < $count; $i++) {
            $users[] = [
                'id' => $faker->uuid,
                'name' => $faker->firstName
            ];
        }
        return view('user.list', [
            'users' => $users
        ]);
    }
    public function show (int $userId) {
        $faker = Factory::create();
        $user = [
            'id' => $userId,
            'name' => $faker->name,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'age' => $faker->numberBetween(12, 24)
        ];
        return view('user.show', [
            'user' => $user
        ]);
    }
}
