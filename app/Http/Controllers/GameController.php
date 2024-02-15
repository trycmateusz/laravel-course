<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faker = Factory::create();
        return view('game.list', [
            'games' => [
                '1' => [
                    'name' => $faker->name(),
                    'year' => $faker->year()
                ],
                '2' => [
                    'name' => $faker->name(),
                    'year' => $faker->year()
                ],
                '3' => [
                    'name' => $faker->name(),
                    'year' => $faker->year()
                ],
                '4' => [
                    'name' => $faker->name(),
                    'year' => $faker->year()
                ],
                '5' => [
                    'name' => $faker->name(),
                    'year' => $faker->year()
                ],
                '6' => [
                    'name' => $faker->name(),
                    'year' => $faker->year()
                ]
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'tutaj byloby dodwaanie do bazy';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $faker = Factory::create();
        $game = [
            'name' => $faker->name(),
            'year' => $faker->year()
        ];
        return view('game.show', [
            'id' => $id,
            'game' => $game
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('game.edit', [
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'tutaj dzialoby sie samo edytowanie do bazy. request: ' . $request . 'i id: ' . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'usuwanie zasobu' . $id;
    }
}
