<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use app\Models\Student;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $classesIds = DB::table('classes')->pluck('class_id')->toArray();
        foreach (range(1, 50) as $index) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date,
                'parent_phone' => $faker->numerify('##########'),
                'class_id' => $faker->randomElement($classesIds),
                ]);
        }
    }
}
