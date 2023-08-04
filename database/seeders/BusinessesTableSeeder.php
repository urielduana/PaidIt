<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// php artisan db:seed --class=BusinessesTableSeeder
class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('businesses')->insert(['name' => 'Stationery', 'email' => 'carnaldo0@umich.edu', 'phone' => '5828056716', 'address' => '56988 Birchwood Crossing']);
        DB::table('businesses')->insert(['name' => 'Print center', 'email' => 'awhitesel1@sciencedirect.com', 'phone' => '8253770914', 'address' => '9 Russell Crossing']);
        DB::table('businesses')->insert(['name' => 'Main Cafeteria', 'email' => 'pgoodliff2@biglobe.ne.jp', 'phone' => '2863701373', 'address' => '2 Hanover Place']);
        DB::table('businesses')->insert(['name' => 'Secondary Cafeteria', 'email' => 'mbarrowcliff3@princeton.edu', 'phone' => '8935272455', 'address' => '9526 Buena Vista Parkway']);
    }
}
