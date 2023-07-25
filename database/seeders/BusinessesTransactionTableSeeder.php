<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessesTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        DB::table('businesses_transactions')->insert(['name' => $faker->sentence(5), 'mount' => '586', 'business_id' => '1']);
        $numItems = 125;
        for ($i = 0; $i < $numItems; $i++) {
            DB::table('businesses_transactions')->insert([
                'name' => $faker->sentence(5),
                'mount' => $faker->numberBetween(1, 1000),
                'business_id' => $faker->numberBetween(1, 4),
            ]);
        }        
    }
}
