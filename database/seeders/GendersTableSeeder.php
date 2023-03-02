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
        DB::table('genders')->insert(['name' => 'Masculino']);
        DB::table('genders')->insert(['name' => 'Femenino']);
        DB::table('genders')->insert(['name' => 'No binario']);
        DB::table('genders')->insert(['name' => 'Intersexual']);
        DB::table('genders')->insert(['name' => 'Transgénero']);
        DB::table('genders')->insert(['name' => 'Cisgénero']);
        DB::table('genders')->insert(['name' => 'Agénero']);
        DB::table('genders')->insert(['name' => 'Androginia']);
        DB::table('genders')->insert(['name' => 'Bigénero']);
        DB::table('genders')->insert(['name' => 'Demigénero']);
        DB::table('genders')->insert(['name' => 'Femme']);
        DB::table('genders')->insert(['name' => 'Género fluido']);
        DB::table('genders')->insert(['name' => 'Genderqueer']);
        DB::table('genders')->insert(['name' => 'Hermafrodita']);
        DB::table('genders')->insert(['name' => 'Masculinidad tóxica']);
        DB::table('genders')->insert(['name' => 'Metrosexual']);
        DB::table('genders')->insert(['name' => 'Neutrois']);
        DB::table('genders')->insert(['name' => 'Pangénero']);
        DB::table('genders')->insert(['name' => 'Transfemenino']);
        DB::table('genders')->insert(['name' => 'Transmasculino']);
        DB::table('genders')->insert(['name' => 'Trigénero']);
        DB::table('genders')->insert(['name' => 'Two-Spirit']);
        DB::table('genders')->insert(['name' => 'Xenogénero']);
        DB::table('genders')->insert(['name' => 'Queer']);
        DB::table('genders')->insert(['name' => 'Questioning']);
        DB::table('genders')->insert(['name' => 'Asexual']);
        DB::table('genders')->insert(['name' => 'Poligénero']);
        DB::table('genders')->insert(['name' => 'Multigénero']);
        DB::table('genders')->insert(['name' => 'Intergénero']);
        DB::table('genders')->insert(['name' => 'Variante de género']);
    }
}
