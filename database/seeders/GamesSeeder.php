<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->truncate();
        $faker = Factory::create();
        $games = [];
        for ($i = 0; $i < 1000; $i++) {
            $games[] = [
                'title' => $faker->words($faker->numberBetween(1, 3), true),
                'description' => $faker->sentence(),
                'publisher_id' => $faker->numberBetween(1, 5),
                'genre_id' => $faker->numberBetween(1, 4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'published_at' => Carbon::now(),
                'tags' => $faker->optional()->randomElement(['Co-Op', 'Multiplayer', 'Singleplayer', 'Souls-like'])
            ];
        }
        DB::table('games')->insert($games);
    }
}
