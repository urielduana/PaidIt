<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert(['salary' => '14265.4', 'User_id' => '1', 'Business_id' => '1']);
        $faker = \Faker\Factory::create();
        $numCustomersToGenerate = 50;
        for ($i = 0; $i < $numCustomersToGenerate; $i++) {
            DB::table('employees')->insert([
                'salary' => $faker->randomFloat(2, 0, 10000),
                'User_id' => $i + 52,
                'Business_id' => $faker->numberBetween(1, 4)
            ]);
        }
    }
}
