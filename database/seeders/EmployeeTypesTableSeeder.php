<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employee_types')->insert(['name' => 'Barista']);
        DB::table('employee_types')->insert(['name' => 'Cajero']);
        DB::table('employee_types')->insert(['name' => 'Gerente']);
        DB::table('employee_types')->insert(['name' => 'Mesero']);
        DB::table('employee_types')->insert(['name' => 'Cocinero']);
        DB::table('employee_types')->insert(['name' => 'Repartidor']);
        DB::table('employee_types')->insert(['name' => 'Limpieza']);
        DB::table('employee_types')->insert(['name' => 'Vendedor']);
        DB::table('employee_types')->insert(['name' => 'Encargado']);
        DB::table('employee_types')->insert(['name' => 'Almacenista']);
        DB::table('employee_types')->insert(['name' => 'Diseñador']);
        DB::table('employee_types')->insert(['name' => 'Contador']);
    }
}
