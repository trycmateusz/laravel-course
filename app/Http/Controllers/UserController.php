<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function list (Request $request) {
        $faker = Factory::create();
        $users = [];
        $count = $faker->numberBetween(3, 15);
        for ($i = 0; $i < $count; $i++) {
            $users[] = [
                'id' => $faker->uuid,
                'name' => $faker->firstName
            ];
        }
        $flashSuccess = $faker->numberBetween(0, 1);
        session()->flash('flashSuccess', $flashSuccess);
        session()->now('flashSuccessIgnoreInitially', true);
        return view('user.list', [
            'users' => $users
        ]);
    }
    public function show (string $id) {
        $faker = Factory::create();
        $user = [
            'id' => $id,
            'name' => $faker->name,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'age' => $faker->numberBetween(12, 24)
        ];
        return view('user.details', [
            'user' => $user
        ]);
    }
    public function create () {
        return view('user.create');
    }
}
