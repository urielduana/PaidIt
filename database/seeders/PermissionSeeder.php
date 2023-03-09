<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::truncate();

        // Generate roles
        // Role::create(['name' => 'super-admin']);
        // Role::create(['name' => 'customer']);
        // Role::create(['name' => 'administrator']);
        // Role::create(['name' => 'chef']);
        // Role::create(['name' => 'waiter']);
        // Role::create(['name' => 'cashier']);
        // Role::create(['name' => 'seller']);
        // Role::create(['name' => 'driver']);
        Role::create(['name' => 'prueba_employee']);
        Role::create(['name' => 'prueba_customer']);

        // // Generate permissions
        // Permission::create(['name' => 'user.index']);
        // Permission::create(['name' => 'user.create']);
        // Permission::create(['name' => 'user.edit']);
        // Permission::create(['name' => 'user.destroy']);
        // Permission::create(['name' => 'user.show']);
        // Permission::create(['name' => 'user.restore']);
        // Permission::create(['name' => 'user.forceDelete']);
        // Permission::create(['name' => 'view_customer']);
        // Permission::create(['name' => 'view_employee']);


        // // Assign permissions to roles
        // $role = Role::findByName('super-admin');
        // $role->givePermissionTo(Permission::all());

        // $role = Role::findByName('customer');
        // $role->givePermissionTo('user.index');

        // $role = Role::findByName('administrator');
        // $role->givePermissionTo('view_employee');

        $role = Role::findByName('prueba_employee');
        $role->givePermissionTo('view_employee');

        $role = Role::findByName('prueba_customer');
        $role->givePermissionTo('view_customer');




        // Give role to user to test
        // $user = User::find(1);
        // $role = Role::findByName('administrator');
        // $user->assignRole($role->id);
    }
}
