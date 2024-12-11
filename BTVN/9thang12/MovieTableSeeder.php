<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $cinemaIds = DB::table('cinemas')->pluck('cinema_id')->toArray();
        foreach (range(1, 10) as $index) {
            DB::table('movies')->insert([
                'movie_title' => $faker->name,
                'movie_director' => $faker->name,
                'release_date' => $faker->date,
                'duration' => $faker->randomDigit,
                'cinema_id' => $faker->randomElement($cinemaIds)
            ]);
        }
    }
}
