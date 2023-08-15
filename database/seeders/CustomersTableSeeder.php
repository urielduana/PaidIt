<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert(['guardian_name' => 'Tybie Calbert', 'guardian_phone' => '3176373761', 'User_id' => '1', 'nfc_auth' => $this->generateHexValue()]);
        $faker = \Faker\Factory::create();
        $numCustomersToGenerate = 50;
        for ($i = 0; $i < $numCustomersToGenerate; $i++) {
            DB::table('customers')->insert([
                'guardian_name' => $faker->name,
                'guardian_phone' => $faker->numerify('##########'),
                'User_id' => $i + 2,
                'nfc_auth' => $this->generateHexValue(),
            ]);
        }
    }

    private function generateHexValue($length = 16)
    {
        $characters = '0123456789ABCDEF';
        $hexValue = '';

        for ($i = 0; $i < $length; $i++) {
            $hexValue .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $hexValue;
    }
}
