<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $medicineIds = DB::table('medicines')->pluck('medicine_id')->toArray();
        foreach (range(1, 50) as $index) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->randomElement($medicineIds),
                'quantity' => $faker->numberBetween(1, 100),
                'sale_date' => $faker->date,
                'customer_phone' => $faker->numerify('##########'),
            ]);
        }
    }
}
