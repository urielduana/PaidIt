<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_order')->insert(['name' => 'Pending']);
        DB::table('status_order')->insert(['name' => 'In process']);
        DB::table('status_order')->insert(['name' => 'Delivered']);
        DB::table('status_order')->insert(['name' => 'Canceled']);
    }
}
