<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Hardware_DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centerIds = DB::table('i_t__centers')->pluck('center_id');
        $faker = Faker::create();
        foreach (range(1 , 10) as $index) {
            DB::table('hardware__devices')->insert([
                'device_name' => $faker->name,
                'device_type' => $faker->name,
                'status' => $faker->boolean,
                'center_id' => $faker->randomElement($centerIds)
            ]);
        }
    }
}
