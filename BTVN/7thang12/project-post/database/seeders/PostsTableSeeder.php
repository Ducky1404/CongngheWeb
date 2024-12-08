<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
         foreach (range(1, 30) as $index) {
             Post::create([
                 'title' => $faker->sentence(5),
                 'content' => $faker->paragraph(4),
             ]);
         }
    }
}
