<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert(['Customer_id' => '1']);
        $faker = \Faker\Factory::create();
        $numCustomersToGenerate = 50;
        for ($i = 0; $i < $numCustomersToGenerate; $i++) {
            DB::table('carts')->insert([
                'Customer_id' => $i + 2,
            ]);
        }
    }
}
