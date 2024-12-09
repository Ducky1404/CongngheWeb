<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $computerIds = DB::table('computers')->pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            DB::table('issues')->insert([
                'computer_id' => $faker->randomElement($computerIds),
                'reporter_by' => $faker->name,
                'reported_date' => $faker->date,
                'description' => $faker->paragraph,
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
            ]);
        }
    }
}
