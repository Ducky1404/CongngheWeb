<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            DB::table('medicines')->insert([
                'name' => $faker->name,
                'brand' => $faker->word,
                'dosage' => $faker->word,
                'form' => $faker->word,
                'price' => $faker->randomFloat(2, 0, 1000),
                'stock' => $faker->numberBetween(0, 100),
            ]);
        }
    }
}
