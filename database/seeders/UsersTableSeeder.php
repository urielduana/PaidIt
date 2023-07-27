<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(['name' => 'admin', 'age' => '61', 'phone' => '1153443089', 'email' => 'admin@admin.com', 'password' => Hash::make('password'), 'Gender_id' => '1', 'profile_photo_path' => 'profile-photos/default.jpg']);
        // Give super admin to the first user
        $user = User::find(1);
        $role = Role::where('name', 'super-admin')->first();
        $user->assignRole($role);

        $faker = \Faker\Factory::create();

        $numUsersToGenerate = 100;
        for ($i = 0; $i < $numUsersToGenerate; $i++) {
            $photoPath = 'profile-photos/default.jpg'; // Ruta de una imagen de perfil de muestra
            DB::table('users')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 80),
                'phone' => $faker->numerify('##########'),
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'Gender_id' => $faker->numberBetween(1, 5),
                'profile_photo_path' => $photoPath, // Asignar la ruta de la foto de perfil
            ]);
        }
    }
}
