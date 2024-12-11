<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $LibraryIds = DB::table('libraries')->pluck('library_id');
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('books')->insert([
                'book_title' => $faker->name,
                'book_author' => $faker->name,
                'publication_year' => $faker->year,
                'book_genre' => $faker->name,
                'library_id' => $faker->randomElement($LibraryIds)
            ]);
        }
    }
}
