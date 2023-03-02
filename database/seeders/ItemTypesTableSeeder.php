<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item_types')->insert(['name' => 'Smoothies']);
        DB::table('item_types')->insert(['name' => 'Cuadernos']);
        DB::table('item_types')->insert(['name' => 'Notas adhesivas']);
        DB::table('item_types')->insert(['name' => 'Frappés']);
        DB::table('item_types')->insert(['name' => 'Café']);
        DB::table('item_types')->insert(['name' => 'Reglas']);
        DB::table('item_types')->insert(['name' => 'Tijeras']);
        DB::table('item_types')->insert(['name' => 'Frappés']);
        DB::table('item_types')->insert(['name' => 'Pasteles']);
        DB::table('item_types')->insert(['name' => 'Smoothies']);
        DB::table('item_types')->insert(['name' => 'Bagels']);
        DB::table('item_types')->insert(['name' => 'Té']);
        DB::table('item_types')->insert(['name' => 'Té']);
        DB::table('item_types')->insert(['name' => 'Frappés']);
        DB::table('item_types')->insert(['name' => 'Wraps']);
        DB::table('item_types')->insert(['name' => 'Smoothies']);
        DB::table('item_types')->insert(['name' => 'Té']);
        DB::table('item_types')->insert(['name' => 'Té']);
        DB::table('item_types')->insert(['name' => 'Clips']);
        DB::table('item_types')->insert(['name' => 'Jugos']);
        DB::table('item_types')->insert(['name' => 'Jugos']);
        DB::table('item_types')->insert(['name' => 'Bolígrafos']);
        DB::table('item_types')->insert(['name' => 'Bolígrafos']);
        DB::table('item_types')->insert(['name' => 'Sandwiches']);
        DB::table('item_types')->insert(['name' => 'Chocolate caliente']);
        DB::table('item_types')->insert(['name' => 'Smoothies']);
        DB::table('item_types')->insert(['name' => 'Té']);
        DB::table('item_types')->insert(['name' => 'Papel de envolver']);
        DB::table('item_types')->insert(['name' => 'Papel de envolver']);
        DB::table('item_types')->insert(['name' => 'Ensaladas']);
    }
}
