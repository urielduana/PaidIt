<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_items')->insert(['quantity' => '1', 'Cart_id' => '1', 'Item_id' => '1']);
        $faker = \Faker\Factory::create();
        $numItems = 125;
        for ($i = 0; $i < $numItems; $i++) {
            DB::table('cart_items')->insert([
                'quantity' => $faker->numberBetween(1, 10),
                'Cart_id' => $faker->numberBetween(1, 51),
                'Item_id' => $faker->numberBetween(1, 72),
            ]);
        }
    }
}
