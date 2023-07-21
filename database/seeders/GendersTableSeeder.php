<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->insert(['name' => 'Normal']);
        DB::table('genders')->insert(['name' => 'Male']);
        DB::table('genders')->insert(['name' => 'Female']);
        DB::table('genders')->insert(['name' => 'Non Binary']);
        DB::table('genders')->insert(['name' => 'Other']);
    }
}
