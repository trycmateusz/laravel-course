<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->truncate();
        DB::table('publishers')->insert(
            [
                'id' => 1,
                'name' => 'Atari',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'EA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Blizzard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Ubisoft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Activision',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        );
    }
}
