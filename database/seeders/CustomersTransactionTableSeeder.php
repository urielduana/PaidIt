<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        DB::table('customers_transactions')->insert([
            'name' => 'income',
            'mount' => '586',
            'customer_id' => '1',
            'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
        ]);
        $numItems = 125;
        for ($i = 0; $i < $numItems; $i++) {
            $name = $faker->randomElement(['income', 'expense']);
            DB::table('customers_transactions')->insert([
                'name' => $name,
                'mount' => $faker->numberBetween(1, 1000),
                'customer_id' => $faker->numberBetween(1, 4),
                'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
            ]);
        }
    }
}

