<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert(['description' => 'Suspendisse accumsan tortor quis turpis.', 'Customer_id' => '1']);
        $faker = \Faker\Factory::create();
        $numCustomersToGenerate = 50;
        for ($i = 0; $i < $numCustomersToGenerate; $i++) {
            DB::table('orders')->insert([
                'description' => $faker->sentence(6, true),
                'Customer_id' => $i + 2,
            ]);
        }
    }
}
