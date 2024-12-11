<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LaptopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $renterIds = DB::table('renters')->pluck('renter_id');
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('laptops')->insert([
                'brand' => $faker->name,
                'model' => $faker->name,
                'specifications' => $faker->name,
                'rental_status' => $faker->boolean,
                'renter_id' => $faker->randomElement($renterIds)
            ]);
        }
    }
}
