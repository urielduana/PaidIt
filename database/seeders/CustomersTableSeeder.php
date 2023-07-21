<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert(['balance' => '990.52', 'guardian_name' => 'Tybie Calbert', 'guardian_phone' => '3176373761', 'User_id' => '1']);
        $faker = \Faker\Factory::create();
        $numCustomersToGenerate = 50;
        for ($i = 0; $i < $numCustomersToGenerate; $i++) {
            DB::table('customers')->insert([
                'balance' => $faker->randomFloat(2, 0, 10000),
                'guardian_name' => $faker->name,
                'guardian_phone' => $faker->numerify('##########'),
                'User_id' => $i + 2,
            ]);
        }
    }
}
