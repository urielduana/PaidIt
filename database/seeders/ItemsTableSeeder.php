<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Define the types of items (e.g., pencils, notebooks, etc.)
        $stationeryItems = ['Pencil', 'Notebook', 'Eraser', 'Pen', 'Ruler', 'Highlighter', 'Stapler', 'Staples', 'Tape', 'Glue', 'Scissors', 'Paper', 'Folder', 'Binder', 'Calculator', 'Backpack', 'Lunchbox', 'Water bottle', 'Crayons', 'Markers', 'Sharpener', 'Paper clips', 'Push pins', 'Index cards', 'Construction paper', 'Poster board', 'Stickers', 'White out', 'Rubber bands', 'Envelopes'];
        $cafeteriaItem = ['Sandwich', 'Salad', 'Soup', 'Pizza', 'Pasta', 'Burger', 'Fries', 'Chicken nuggets', 'Chicken tenders', 'Chicken wings', 'Hot dog', 'Burrito', 'Taco', 'Chips', 'Fruit', 'Vegetables', 'Yogurt', 'Milk', 'Juice', 'Soda', 'Water', 'Coffee', 'Tea', 'Cookies', 'Brownies', 'Cake', 'Ice cream', 'Candy', 'Chocolate', 'Popcorn'];
        // Define the number of items to generate
        $numItemsToGenerate = 35;

        // Loop to generate and insert the random items
        for ($i = 0; $i < $numItemsToGenerate; $i++) {
            DB::table('items')->insert([
                'name' => $faker->randomElement($stationeryItems),
                'price' => $faker->randomFloat(2, 1, 100),
                'description' => $faker->sentence(),
                'stock' => $faker->numberBetween(1, 1000),
                'Item_type_id' => $faker->numberBetween(2, 16),
                'Business_id' => 1,
            ]);
            DB::table('items')->insert([
                'name' => $faker->randomElement($cafeteriaItem),
                'price' => $faker->randomFloat(2, 1, 100),
                'description' => $faker->sentence(),
                'stock' => $faker->numberBetween(1, 1000),
                'Item_type_id' => $faker->numberBetween(2, 31),
                'Business_id' => $faker->numberBetween(3, 4),
            ]);
        }

        // Simple seeder for a printer center
        DB::table('items')->insert([
            'name' => 'Black and white print',
            'price' => 0.10,
            'description' => 'Print a page',
            'stock' => 1000,
            'Item_type_id' => 1,
            'Business_id' => 2,
        ]);
        DB::table('items')->insert([
            'name' => 'Color print',
            'price' => 0.50,
            'description' => 'Print a page',
            'stock' => 1000,
            'Item_type_id' => 1,
            'Business_id' => 2,
        ]);
    }
}
