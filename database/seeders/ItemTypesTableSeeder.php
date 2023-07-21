<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item_types')->insert(['name' => 'Print']);
        $faker = Faker::create();
        // Item types for a stationery store
        $stationeryTypeItems = ['Pencil', 'Notebook', 'Eraser', 'Pen', 'Ruler', 'Highlighter', 'Stapler', 'Staples', 'Tape', 'Glue', 'Scissors', 'Paper', 'Folder', 'Binder', 'Calculator', 'Backpack', 'Lunchbox', 'Water bottle', 'Crayons', 'Markers', 'Sharpener', 'Paper clips', 'Push pins', 'Index cards', 'Construction paper', 'Poster board', 'Stickers', 'White out', 'Rubber bands', 'Envelopes'];
        // Item types for a cafeteria
        $cafeteriaTypeItems = ['Sandwich', 'Salad', 'Soup', 'Pizza', 'Pasta', 'Burger', 'Fries', 'uggets', 'Chicken tenders', 'Chicken wings', 'Hot dog', 'Burrito', 'Taco', 'Chips', 'Fruit', 'Vegetables', 'Yogurt', 'Milk', 'Juice', 'Soda', 'Water', 'Coffee', 'Tea', 'Cookies', 'Brownies', 'Cake', 'Ice cream', 'Candy', 'Chocolate', 'Popcorn'];
        // Define the number of items to generate
        $numItemsToGenerate = 15;

        // Loop to generate and insert the random items
        for ($i = 0; $i < $numItemsToGenerate; $i++) {
            DB::table('item_types')->insert([
                'name' => $faker->randomElement($stationeryTypeItems),
            ]);
        }
        for ($i = 0; $i < $numItemsToGenerate; $i++) {
            DB::table('item_types')->insert([
                'name' => $faker->randomElement($cafeteriaTypeItems),
            ]);
        }
    }
}
